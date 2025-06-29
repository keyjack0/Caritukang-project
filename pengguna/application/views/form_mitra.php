    <!-- HERO -->
    <div class="hero_mitra text-center" style="background: #024CAA;">
        <div class="row align-items-center">
            <div class="col-md-5">
                <img src="<?php echo $this->config->item('url_mitra'); ?>" alt="Tukang">
            </div>
            <div class="col-md-6">
                <div class="text-end text-white fw-bold mx-5" id="hero-text">
                    <h1>
                        <h1>
                            <span style="color: white;">BERSAMA</span>
                            <span style="color: orange;">CARITUKANG</span><span style="color: white;">,</span> <br>
                            <span style="color: white;">DAPATKAN PELANGGAN LEBIH </span><br>
                            <span style="color: white;">BANYAK!</span>
                        </h1>

                    </h1>
                    <br>
                    <button type="button" class="btn btn-warning mt-2 text-white" style="background-color: #EC8305">Gabung Sekarang</button>
                </div>
            </div>
        </div>
    </div>

    <!-- HEADLINE -->
    <div class="text-center mt-3">
        <h1>Pendaftaran Mitra CariTukang</h1>
        <p>Silahkan diisi dengan lengkap para mitra CariTukang. <br>
            jika ada kendala, silahkan hubungi Customer Services di halaman bawah.</p>
    </div>

    <!-- FORM -->
    <div class="container mt-5">
        <h3 class="mb-3 text-center">Data Diri</h3>
        <form class="needs-validation" novalidate="" method="post">
            <div class="row g-3">
                <div class="col-sm-12">
                    <label for="firstName"  class="form-label">Nama Lengkap</label>
                    <input type="text" name='nama_mitra' class="form-control" id="firstName" placeholder="Misal : Abdul Aziz" value=""
                        required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                    <span class="text-danger"><?php echo form_error('nama_mitra')?></span>
                </div>

                <div class="col-sm-6">
                    <label for="firstName" class="form-label">Nomor Telepon</label>
                    <input type="number" name='wa_mitra' class="form-control" id="firstName"
                        placeholder="Inputkan Nomor yang bisa Dihubungi lewat WA" value="" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                    <span class="text-danger"><?php echo form_error('wa_mitra')?></span>
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Usia</label>
                    <input type="number" name='usia_mitra' class="form-control" id="lastName" placeholder="Misal : 31 Tahun" value=""
                        required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                    <span class="text-danger"><?php echo form_error('usia_mitra')?></span>
                </div>

                <div class="col-sm-12">
                    <label for="firstName" class="form-label">Alamat Lengkap</label>
                    <input type="text" name='alamat_lengkap' class="form-control" id="firstName"
                        placeholder="Misal : Jalan Pandega Marta XI No.1, Manggung, Caturtunggal, Kec. Depok, Kab. Sleman, Daerah Istimewa Yogyakarta"
                        value="" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                    <span class="text-danger"><?php echo form_error('alamat_lengkap')?></span>
                </div>

                <div class="col-sm-6">
                    <label for="firstName" class="form-label">Kota/Kabupaten</label>
                    <input type="text" name='kabupaten/kota' class="form-control" id="firstName" placeholder="Misal : Kabupaten Sleman"
                        value="" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                    <span class="text-danger"><?php echo form_error('kabupaten/kota')?></span>
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Kecamatan</label>
                    <input type="text" name='kecamatan' class="form-control" id="lastName" placeholder="Misal : Kecamatan Depok" value=""
                        required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                    <span class="text-danger"><?php echo form_error('kecamatan')?></span>
                </div>

                <h4 class="mt-5 mb-1 text-center">Data Pekerjaan</h4>

                <div class="col-sm-6">
                    <label for="firstName" class="form-label">Peran/Profesi Tukang</label>
                    <select class="form-control mb-3" name="id_peran" required>
                        <option value="">Pilih Peran</option>
                        <?php foreach ($peran as $p): ?>
                            <option value="<?php echo $p['id_peran']; ?>">
                                <?php echo $p['nama_peran']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <span class="text-danger"><?php echo form_error('peran')?></span>
                </div>

                <div class="col-sm-6">
                    <label for="lastName"  class="form-label">Pengalaman menjadi Tukang</label>
                    <input type="number" name='pengalaman_mitra' class="form-control" id="lastName" placeholder="Misal : 5 Tahun" value=""
                        required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                    <span class="text-danger"><?php echo form_error('pengalaman_mitra')?></span>
                </div>

                <h4 class="mt-5 mb-3 text-center">Keahlian Khusus</h4>


                    <label for="keahlian">Pilih Keahlian</label>
                    <select id="keahlian" name="id_keahlian" multiple class="form-control" required style="width: 300px;">
                        <?php foreach ($keahlian as $k): ?>
                            <option value="<?php echo $k['id_keahlian']; ?>">
                                <?php echo $k['nama_keahlian']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <span class="text-danger"><?php echo form_error('keahlian')?></span>

                    <button type="submit" class="w-100 btn btn-primary btn-lg mt-3 my-5" style="background-color: #EC8305">Daftar </button>
                <!-- </form> -->

            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>