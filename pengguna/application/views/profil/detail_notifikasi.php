<!-- CONTENT -->
<div class="dashboard-content flex-grow-1">
    <div class="d-flex mt-3 justify-content-between">
        <div class="status">
            <h3>Status Booking</h3>
            <!-- <span class="badge <?= isset($transaksi['status_transaksi']) && $transaksi['status_transaksi'] == 'selesai' ? 'bg-success' : 'bg-warning text-dark' ?>">
                <?= isset($transaksi['status_transaksi']) && $transaksi['status_transaksi'] == 'selesai' ? 'Selesai' : 'Pending' ?>
            </span> -->
        </div>
        <div class="tgl text-end">
            <h5>Tanggal Booking:</h5>
            <h5><?= date('l, d F Y', strtotime($booking['tanggal_booking'])) ?></h5>
        </div>
    </div>

    <div class="container mt-4">
        <div class="card px-4 py-2 shadow-sm">
            <div class="row">
                <div class="col-md-4">
                    <?php
                    $image_url = $config['url_booking'] . $booking['foto_kendala'];
                    echo '<img src="' . $image_url . '" alt="Tukang yang Anda Pesan" style="max-width: 200px;" class="img-fluid rounded">';
                    ?>
                </div>
                <div class="col-md-8 d-flex flex-column justify-content-center">
                    <h5 class="fw-bold">Detail Booking</h5>
                    <div>
                        <h6 class="fw-bold mb-1">Tukang yang Anda Pesan</h6>
                        <p class="mb-2"><?= $booking['nama_booking'] ?></p>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Alamat Anda</h6>
                        <p class="mb-2"><?= $booking['alamat_lengkap'] ?>, <?= $booking['kecamatan'] ?>, <?= $booking['kabupaten/kota'] ?></p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <h6 class="fw-bold mb-1">Deskripsi Masalah Anda</h6>
                    <p><?= $booking['deskripsi_booking'] ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex btn-card">
        <a href="<?= base_url('notifikasi/bayar/' . $booking['id_booking']) ?>" class="btn btn-info flex-grow-1 m-3">Bayar</a>
        <a href="<?= base_url('ulasan') ?>" class="btn btn-primary flex-grow-1 m-3">Beri Ulasan</a>
    </div>
</div>