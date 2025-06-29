<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Midtrans_callback extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Memuat model yang dibutuhkan
        $this->load->model('Mtransaksi');
        $this->load->model('Mbooking');

        // Memuat library Midtrans-PHP
        // Pastikan Anda telah meletakkan folder 'midtrans-php' di direktori 'application/third_party/'
        // Atau sesuaikan path ini jika Anda menempatkannya di lokasi lain
        include 'midtrans-php/Midtrans.php';
    }

    public function notification() {
        // Ini adalah endpoint yang akan dipanggil oleh Midtrans
        // Tidak ada tampilan (view) yang perlu dimuat di sini, ini adalah proses backend

        // Konfigurasi Midtrans
        \Midtrans\Config::$isProduction = false; // Ganti ke TRUE jika di lingkungan produksi
        \Midtrans\Config::$serverKey = 'SB-Mid-server-s9KS6RQGKddSay83d438rUiV'; // Server Key Midtrans Anda

        // Membuat objek notifikasi dari Midtrans
        $notif = new \Midtrans\Notification();

        // Mengambil data dari notifikasi
        $transaction_status = $notif->transaction_status;
        $order_id = $notif->order_id;
        $payment_type = $notif->payment_type;
        $fraud_status = $notif->fraud_status;
        $gross_amount = $notif->gross_amount; // Jumlah pembayaran
        $transaction_time = $notif->transaction_time; // Waktu transaksi dari Midtrans

        // Untuk debugging, Anda bisa log semua notifikasi yang masuk
        // Pastikan direktori 'logs' Anda writable
        log_message('info', 'Midtrans Notification Received: ' . json_encode($notif));

        // Dapatkan data transaksi dari database Anda
        // Pastikan model Mtransaksi memiliki fungsi get_transaksi_by_kode_pembayaran
        $transaction_data = $this->Mtransaksi->get_transaksi_by_kode_pembayaran($order_id);

        if (!$transaction_data) {
            log_message('error', "Transaksi dengan order_id " . $order_id . " tidak ditemukan di database.");
            http_response_code(404); // Beri tahu Midtrans bahwa transaksi tidak ditemukan
            return;
        }

        // ====== Logika untuk memperbarui status transaksi di database Anda ======

        // Cek apakah status transaksi sudah "selesai" untuk menghindari pembaruan ganda (idempotency)
        if ($transaction_data['status_transaksi'] == 'selesai') {
            log_message('info', "Transaksi order_id " . $order_id . " sudah selesai, tidak perlu update.");
            http_response_code(200); // Penting: Tetap kembalikan 200 OK
            return;
        }

        // Inisialisasi status lokal
        $status_lokal = 'pending'; // Default

        if ($transaction_status == 'capture') {
            // Untuk pembayaran kartu, 'capture' adalah ketika pembayaran berhasil.
            if ($payment_type == 'credit_card' || $payment_type == 'debit_card') {
                if ($fraud_status == 'challenge') {
                    $status_lokal = 'pending'; // Atau 'challenge' jika Anda punya status spesifik
                    log_message('info', "Transaksi order_id: " . $order_id . " ditantang oleh FDS.");
                } else {
                    $status_lokal = 'selesai';
                    log_message('info', "Transaksi order_id: " . $order_id . " berhasil ditangkap menggunakan " . $payment_type . ".");
                }
            }
        } elseif ($transaction_status == 'settlement') {
            // Untuk metode pembayaran non-kartu, 'settlement' adalah ketika pembayaran berhasil.
            $status_lokal = 'selesai';
            log_message('info', "Transaksi order_id: " . $order_id . " berhasil diselesaikan menggunakan " . $payment_type . ".");
        } elseif ($transaction_status == 'pending') {
            $status_lokal = 'pending';
            log_message('info', "Transaksi order_id: " . $order_id . " sedang menunggu pembayaran.");
        } elseif ($transaction_status == 'deny') {
            $status_lokal = 'batal';
            log_message('info', "Transaksi order_id: " . $order_id . " ditolak oleh Midtrans.");
        } elseif ($transaction_status == 'expire') {
            $status_lokal = 'batal';
            log_message('info', "Transaksi order_id: " . $order_id . " kedaluwarsa.");
        } elseif ($transaction_status == 'cancel') {
            $status_lokal = 'batal';
            log_message('info', "Transaksi order_id: " . $order_id . " dibatalkan.");
        } else {
            // Tangani status lain jika diperlukan
            log_message('warning', "Status transaksi tidak tertangani untuk order_id: " . $order_id . " Status: " . $transaction_status);
        }

        // Perbarui tabel transaksi di database Anda
        $this->Mtransaksi->update_status_transaksi($order_id, $status_lokal);

        // Jika transaksi selesai, perbarui juga status booking
        if ($status_lokal == 'selesai') {
            $this->Mbooking->update_status_booking($transaction_data['id_booking'], 'selesai');
            log_message('info', "Status booking id " . $transaction_data['id_booking'] . " diubah menjadi 'selesai'.");
        } else if ($status_lokal == 'batal') {
             $this->Mbooking->update_status_booking($transaction_data['id_booking'], 'batal'); // Set status booking ke 'batal' jika transaksi dibatalkan/kadaluarsa
             log_message('info', "Status booking id " . $transaction_data['id_booking'] . " diubah menjadi 'batal'.");
        }


        // Penting: Selalu kembalikan HTTP 200 OK ke Midtrans
        // Ini memberi tahu Midtrans bahwa notifikasi telah diterima dan diproses dengan sukses.
        http_response_code(200);
    }
}