<div class="container mt-4 mb-4">
    <h5>Data Booking</h5>
    <div class="table-responsive">
        <table class="table table-bordered" id="tableku">
            <thead style="background-color: #024CAA; color: #fff;" class="small">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tukang dibutuhkan</th>
                    <th>Alamat Lengkap</th>
                    <th>Kabupaten/Kota</th>
                    <th>Kecamatan</th>
                    <th>Tanggal Booking</th>
                    <th>Foto Kendala</th>
                    <th>Status Booking</th>
                    <th>No HP</th>
                    <th>Deskripsi Booking</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($booking as $key => $value) : ?>
                    <tr class="small">
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $value['nama_booking'] ?></td>
                        <td><?php echo $value['nama_keahlian'] ?></td>
                        <td><?php echo $value['alamat_lengkap'] ?></td>
                        <td><?php echo $value['kabupaten/kota'] ?></td>
                        <td><?php echo $value['kecamatan'] ?></td>
                        <td><?php echo $value['tanggal_booking'] ?></td>
                        <td>
                            <img src="<?php echo $this->config->item("url_booking") . $value["foto_kendala"] ?>" width="100" alt="Foto Kendala">
                        </td>
                        <td><?php echo $value['status_booking'] ?></td>
                        <td><?php echo $value['wa_booking'] ?></td>
                        <td><?php echo $value['deskripsi_booking'] ?></td>
                        <td class="text-center">
                            <div class="d-flex justify-content-between" role="group" aria-label="Basic example">
                                <!-- <a href="<?php echo base_url("booking/ubah/" . $value["id_booking"]) ?>" class="btn btn-warning me-1 btn-sm">Ubah</a> -->
                                <a href="<?php echo base_url("booking/hapus/" . $value["id_booking"]) ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </div>
                        </td>

                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>