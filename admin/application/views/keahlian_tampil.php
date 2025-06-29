<div class="container-fluid mt-4">
    <h5>Data Keahlian</h5>
    <table class="table table-bordered" id="tableku" style="width: 100%;">
        <div class="d-flex justify-content-end mb-3">
            <a href="<?php echo base_url('keahlian/tambah'); ?>" class="btn link-btn btn-primary">
            <i class="bi bi-plus"></i>
            <span>Tambah Data</span>
            </a>
        </div>
        <thead style="background-color: #024CAA; color: #fff;">
            <tr>
                <th style="width: 5%;">No</th>
                <th style="width: 40%;">Nama Keahlian</th>
                <th style="width: 30%;">Harga Per Hari</th>
                <th style="width: 15%;">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($keahlian as $k => $v) : ?>
                <tr>
                    <td><?= $k + 1; ?></td>
                    <td><?= $v['nama_keahlian']; ?></td>
                    <td>Rp. <?= $v['harga_per_hari']; ?></td>
                    <td class="text-center">
                        <a href="<?php echo base_url("keahlian/ubah/" . $v["id_keahlian"]) ?>" class="btn btn-warning">Ubah</a>
                        <a href="<?php echo base_url("keahlian/hapus/" . $v["id_keahlian"]) ?>" class="btn btn-danger">Hapus</a>

                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>