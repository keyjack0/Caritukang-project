<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notifikasi extends CI_Controller
{
    public function index()
    {
        $id_customer = $this->session->userdata('id_customer');
        $this->load->model('Mbooking');
        $this->load->model('Mtransaksi');

        $booking = $this->Mbooking->get_booking_by_customer($id_customer);

        foreach ($booking as &$b) {
            $trans = $this->Mtransaksi->get_by_booking($b['id_booking']);
            $b['status_transaksi'] = $trans ? $trans['status_transaksi'] : 'pending';
        }

        $data['booking'] = $booking;

        $this->load->view('header');
        $this->load->view('profil/side_profil');
        $this->load->view('profil/notifikasi_profil', $data);
        // $this->load->view('footer');
    }


    public function detail_notifikasi($id_booking)
    {
        $this->load->model('Mbooking');
        $this->load->model('Mtransaksi');
        $id_customer = $this->session->userdata('id_customer');
        $data['booking'] = $this->Mbooking->get_booking_by_id_customer($id_booking, $id_customer);
        $data['transaksi'] = $this->Mtransaksi->get_by_booking($id_booking);
        if (!$data['transaksi']) {
            $data['transaksi'] = ['status_transaksi' => 'pending'];
        }

        //untuk foto
        $data['config'] = $this->config->item('url_booking');
        $data['config'] = [
            'assets_booking' => $_SERVER['DOCUMENT_ROOT'] . "/CariTukang/assets/booking/",
            'url_booking' => 'http://localhost/CariTukang/assets/booking/'
        ];

        $this->load->view('header');
        $this->load->view('profil/side_profil');
        $this->load->view('profil/detail_notifikasi', $data);
    }

    public function bayar($id_booking)
    {
        $this->load->model('Mbooking');
        $this->load->model('Mtransaksi');

        $id_customer = $this->session->userdata('id_customer');
        $data['booking'] = $this->Mbooking->get_booking_by_id_customer($id_booking, $id_customer);

        if (!$data['booking']) {
            $this->session->set_flashdata('pesan_gagal', 'Data booking tidak ditemukan atau tidak sesuai.');
            redirect('notifikasi', 'refresh');
        }

        // Validasi harga layanan
        if (empty($data['booking']['harga_layanan']) || !is_numeric($data['booking']['harga_layanan']) || $data['booking']['harga_layanan'] <= 0) {
            $this->session->set_flashdata('pesan_gagal', 'Harga layanan tidak valid.');
            redirect('notifikasi', 'refresh');
        }

        // Konfigurasi Midtrans
        include 'midtrans-php/Midtrans.php';
        \Midtrans\Config::$serverKey = 'SB-Mid-server-s9KS6RQGKddSay83d438rUiV';
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        // Cek apakah sudah ada transaksi sebelumnya
        $transaksi = $this->Mtransaksi->get_transaksi_by_id_booking($id_booking);

        if ($transaksi) {
            $order_id = $transaksi['kode_pembayaran'];
        } else {
            $order_id = 'CT-' . uniqid();
            $this->Mtransaksi->insert_transaksi([
                'id_booking' => $id_booking,
                'kode_pembayaran' => $order_id,
                'total_pembayaran' => (int)$data['booking']['harga_layanan'],
                'status_transaksi' => 'pending',
                'tanggal_transaksi' => date('Y-m-d H:i:s')
            ]);
        }

        // Siapkan Snap token
        $params = [
            'transaction_details' => [
                'order_id' => $order_id,
                'gross_amount' => (int)$data['booking']['harga_layanan']
            ],
            'customer_details' => [
                'first_name' => $data['booking']['nama_booking'],
                'phone' => $data['booking']['wa_booking']
            ]
        ];

        try {
            $snapToken = \Midtrans\Snap::getSnapToken($params);
        } catch (Exception $e) {
            log_message('error', 'Midtrans SnapToken error: ' . $e->getMessage());
            $this->session->set_flashdata('pesan_gagal', 'Gagal membuat token pembayaran.');
            redirect('notifikasi');
        }

        // Cek status ke Midtrans (fallback jika callback tidak digunakan)
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.sandbox.midtrans.com/v2/$order_id/status",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                'accept: application/json',
                'authorization: Basic ' . base64_encode('SB-Mid-server-s9KS6RQGKddSay83d438rUiV:')
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if (!$err && $response) {
            $result = json_decode($response, true);
            if (isset($result['transaction_status'])) {
                $status_midtrans = $result['transaction_status'];
                $status_lokal = 'pending';

                if ($status_midtrans === 'settlement') {
                    $status_lokal = 'selesai';
                    $this->session->set_flashdata('pesan_sukses', 'Pembayaran berhasil dikonfirmasi.');
                } elseif (in_array($status_midtrans, ['cancel', 'expire'])) {
                    $status_lokal = 'batal';
                    $this->session->set_flashdata('pesan_gagal', 'Pembayaran dibatalkan atau kadaluarsa.');
                }

                $this->db->where('kode_pembayaran', $order_id);
                $this->db->update('transaksi', [
                    'status_transaksi' => $status_lokal,
                    'tanggal_transaksi' => date('Y-m-d H:i:s')
                ]);
            }
        }

        // Kirim ke view
        $data['snapToken'] = $snapToken;
        $data['order_id'] = $order_id;

        $this->load->view('header');
        $this->load->view('profil/side_profil');
        $this->load->view('transaksi', $data);
    }
}
