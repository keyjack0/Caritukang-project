
    <!-- CONTENT -->
    <div class="dashboard-content flex-grow-1">
        <h1 class="fw-bold">Hi, <?php echo $this->session->userdata("nama_customer") ?></h1>
        <!-- <p>Dengan jumlah booking kelipatan 10, dapatkan penawaran menarik</p> -->

        <div class="row">
            <div class="col-md-6 ">
                <div class="card p-3 mb-4 shadow">
                    <h3 class="fw-bold">Booking Tukang</h3>
                    <p><?php echo $total_tukang; ?> tukang telah membantu</p>
                    <ul class="list-unstyled">
                        <li>Desain Interior</li>
                        <li>Tukang Cat</li>
                        <li>Renovasi Bangunan</li>
                    </ul>
                <a href="<?php echo base_url('notifikasi') ?>" class="btn btn-light mt-2">Lihar Selengkapnya</a>
                    <!-- <button class="btn btn-light mt-2">Lihat Lebih Banyak</button> -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-5 mb-4 card-review shadow">
                    <span>⭐⭐⭐⭐⭐</span>
                    <p class="mb-0">Lihat semua Ulasan</p>
                    <a href="<?php echo base_url('ulasan') ?>" class="btn btn-light mt-2">Lihat Ulasan</a>
                    <!-- <button class="btn btn-light mt-2">Lihat ulasan saya</button> -->
                </div>
            </div>
        </div>
        <a href="<?php echo base_url('booking'); ?>" class="btn btn-orange w-100">BOOKING TUKANG</a>
    </div>
</div>