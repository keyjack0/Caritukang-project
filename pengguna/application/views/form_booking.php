<!-- <pre>
<?php print_r($keahlian); ?>
</pre>
  -->
<!-- HERO -->
<div class="hero text-center py-5" style="background: #024CAA;">
    <div class="row align-items-center py-5">
        <div class="col">
            <div class="text-white text-start p-5" id="hero-text">
                <h1 class="fw-bold">SIAPKAN MATERIALMU YA!</h1<br>
                    <h3 class="fw-light">PASTIKAN BAHAN-BAHAN UNTUK PENGERJAAN PROYEK SUDAH SIAP YAAA!</h3>
                    <br>
                    <button type="button" class="btn btn-warning mt-2 text-white" style="background-color: #EC8305">Booking Sekarang</button>
            </div>
        </div>
        <div class="col">
            <img src="<?php echo $this->config->item('url_booking'); ?>" width="800px" alt="Tukang">
        </div>
    </div>
</div>

<!-- HEADLINE -->
<div class="text-center mt-3">
    <h1 class="fw-bold">Pendaftaran Boking Tukang</h1>
    <p>Silahkan diisi dengan lengkap.<br>
        jika ada kendala, silahkan hubungi Customer Services di halaman bawah.</p>
</div>

<!-- FORM -->
<div class="container mt-5">
    <h4 class="mb-5 text-center">Silahkan Pilih Keahlian Tukang Anda!</h4>

    <form class="needs-validation" novalidate="" method="post" enctype="multipart/form-data">
        <div class="row g-3">
            <!-- <div class="container"> -->
            <div class="row">
                <label for="keahlian">Pilih Keahlian</label>
                <select id="keahlian" name="id_keahlian" class="form-control form-select" required>
                    <?php foreach ($keahlian as $k): ?>
                        <option value="<?php echo $k['id_keahlian']; ?>">
                            <?php echo $k['nama_keahlian']; ?>
                            | <?php echo number_format($k['harga_per_hari'], 0, ',', '.'); ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>

            <h4 class="mb-5 text-center">Silahkan Isi Lokasi Perbaikan anda!</h4>
            <div class="col-sm-6">
                <label for="firstName" class="form-label">Kota/Kabupaten</label>
                <input type="text" name="kabupaten/kota" class="form-control" id="firstName" placeholder="Misal : Kabupaten Sleman" value="" required="">
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
                <span class="text-danger"><?php echo form_error('kabupaten/kota') ?></span>
            </div>

            <div class="col-sm-6">
                <label for="lastName" class="form-label">Kecamatan</label>
                <input type="text" name="kecamatan" class="form-control" id="lastName" placeholder="Misal : Kecamatan Depok" value="" required="">
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
                <span class="text-danger"><?php echo form_error('kecamatan') ?></span>
            </div>

            <!-- file hidden -->
            <div class="col-sm-6">
                <!-- <label for="firstName" class="form-label">Nama booking</label> -->
                <input type="hidden" name="nama_booking" class="form-control" id="firstName" value="<?php echo $customer['nama_booking']; ?>"
                    readonly required="">
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
            </div>

            <div class="col-sm-6">
                <!-- <label for="lastName" class="form-label">Wa booking</label> -->
                <input type="hidden" name="wa_booking" class="form-control" id="lastName" value="<?php echo $customer['wa_booking']; ?>" readonly required="">
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
            </div>
            <!-- end file hidden -->

            <div class="col-sm-6">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
                <textarea name="alamat_lengkap" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Misal : Jalan Pandega Marta XI No.1, Manggung, Caturtunggal, Kec. Depok, Kab. Sleman, Daerah Istimewa Yogyakarta"></textarea>
                <span class="text-danger"><?php echo form_error('alamat_lengkap') ?></span>
            </div>

            <div class="col-sm-6">
                <label for="lastName" class="form-label">Tanggal Pemesanan</label>
                <input type="date" name="tanggal_booking" class="form-control" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
                <span class="text-danger"><?php echo form_error('tanggal_booking') ?></span>
            </div>

            <h4 class="mb-3">Fotokan Kendala yang Anda Alami</h4>
            <div class="row">
                <div class="col-sm-2">
                    <input type="file" name="foto_kendala" class="form-control" style="width: 400px;" required>
                    <!-- <img src="./assets/fotokerusakan.png" alt="" style="width: 150px; height: 150px;"> -->
                </div>
                <span class="text-danger"><?php echo form_error('foto_kendala') ?></span>
            </div>


            <div class="col-sm-12">
                <h4 for="exampleFormControlTextarea" class="form-label">Deskripsikan Masalah Anda!</h4>
                <textarea name="deskripsi_booking" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Contoh : AC tidak dingin meskipun sudah dinyalakan lama. Mungkin perlu servis atau pengisian freon."></textarea>
                <span class="text-danger"><?php echo form_error('deskripsi_booking') ?></span>
            </div>
            <button class="w-100 btn btn-primary btn-lg my-5" type="submit" style="background-color: #024CAA">Booking</button>
        </div>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>