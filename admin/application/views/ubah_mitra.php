<div class="container mt-5">  
        <h3 class="mb-3 text-center">Ubah Data Mitra</h3>  
        <form class="needs-validation" novalidate="" method="post">  
            <div class="row g-3">  
                <div class="col-sm-12">  
                    <label for="nama_mitra" class="form-label">Nama Lengkap</label>  
                    <input type="text" name='nama_mitra' class="form-control" id="nama_mitra" placeholder="Misal : Abdul Aziz" value="<?php echo $mitra['nama_mitra']; ?>" required="">  
                    <div class="invalid-feedback">Nama lengkap diperlukan.</div>  
                </div>  
  
                <div class="col-sm-6">  
                    <label for="wa_mitra" class="form-label">Nomor Telepon</label>  
                    <input type="number" name='wa_mitra' class="form-control" id="wa_mitra" placeholder="Inputkan Nomor yang bisa Dihubungi lewat WA" value="<?php echo $mitra['wa_mitra']; ?>" required="">  
                    <div class="invalid-feedback">Nomor telepon diperlukan.</div>  
                </div>  
  
                <div class="col-sm-6">  
                    <label for="usia_mitra" class="form-label">Usia</label>  
                    <input type="number" name='usia_mitra' class="form-control" id="usia_mitra" placeholder="Misal : 31 Tahun" value="<?php echo $mitra['usia_mitra']; ?>" required="">  
                    <div class="invalid-feedback">Usia diperlukan.</div>  
                </div>  
  
                <div class="col-sm-12">  
                    <label for="alamat_lengkap" class="form-label">Alamat Lengkap</label>  
                    <input type="text" name='alamat_lengkap' class="form-control" id="alamat_lengkap" placeholder="Misal : Jalan Pandega Marta XI No.1" value="<?php echo $mitra['alamat_lengkap']; ?>" required="">  
                    <div class="invalid-feedback">Alamat lengkap diperlukan.</div>  
                </div>  
  
                <div class="col-sm-6">  
                    <label for="kabupaten_kota" class="form-label">Kota/Kabupaten</label>  
                    <input type="text" name='kabupaten/kota' class="form-control" id="kabupaten_kota" placeholder="Misal : Kabupaten Sleman" value="<?php echo $mitra['kabupaten/kota']; ?>" required="">  
                    <div class="invalid-feedback">Kota/Kabupaten diperlukan.</div>  
                </div>  
  
                <div class="col-sm-6">  
                    <label for="kecamatan" class="form-label">Kecamatan</label>  
                    <input type="text" name='kecamatan' class="form-control" id="kecamatan" placeholder="Misal : Kecamatan Depok" value="<?php echo $mitra['kecamatan']; ?>" required="">  
                    <div class="invalid-feedback">Kecamatan diperlukan.</div>  
                </div>  
  
                <div class="col-sm-6">  
                    <label for="id_peran" class="form-label">Peran/Profesi Tukang</label>  
                    <select class="form-control mb-3" name="id_peran" required>  
                        <option value="">Pilih Peran</option>  
                        <?php foreach ($peran as $p): ?>  
                            <option value="<?php echo $p['id_peran']; ?>" <?php echo ($mitra['id_peran'] == $p['id_peran']) ? 'selected' : ''; ?>>  
                                <?php echo $p['nama_peran']; ?>  
                            </option>  
                        <?php endforeach; ?>  
                    </select>  
                </div>  
  
                <div class="col-sm-6">  
                    <label for="pengalaman_mitra" class="form-label">Pengalaman menjadi Tukang</label>  
                    <input type="number" name='pengalaman_mitra' class="form-control" id="pengalaman_mitra" placeholder="Misal : 5 Tahun" value="<?php echo $mitra['pengalaman_mitra']; ?>" required="">  
                    <div class="invalid-feedback">Pengalaman diperlukan.</div>  
                </div>  
  
                <div class="col-sm-12">  
                    <label for="keahlian" class="form-label">Pilih Keahlian</label>  
                    <select id="keahlian" name="id_keahlian" multiple class="form-control" required>  
                        <?php foreach ($keahlian as $k): ?>  
                            <option value="<?php echo $k['id_keahlian']; ?>" <?php echo (in_array($k['id_keahlian'], explode(',', $mitra['id_keahlian']))) ? 'selected' : ''; ?>>  
                                <?php echo $k['nama_keahlian']; ?>  
                            </option>  
                        <?php endforeach; ?>  
                    </select>  
                </div>  
  
                <button type="submit" class="w-100 btn btn-primary btn-lg mt-3 my-5" style="background-color: #EC8305">Ubah Data</button>  
            </div>  
        </form>  
    </div>  