<div class="container">
    <h5>Ubah Keahlian</h5>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="">Nama Keahlian</label>
            <input type="text" name="nama_keahlian" class="form-control mb-3" value="<?php echo $keahlian['nama_keahlian'] ?>">
            <input type="text" name="harga_per_hari" class="form-control" value="<?php echo $keahlian['harga_per_hari'] ?>">
        </div>
        <button type="submit" class="btn link-btn btn-primary">Simpan</button>
    </form>
</div>