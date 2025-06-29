<div class="container-fluid mt-4">
    <h5>Data Ulasan</h5>
   
        <!-- <div class=" d-flex justify-content-end mb-3">
            <a href="<?php echo base_url('ulasan/tambah'); ?>" class="btn link-btn btn-primary">
                <i class="bi bi-plus"></i>
                <span>Tambah Data</span>
            </a>
        </div> -->
        <table class="table table-bordered" id="tableku">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Rating</th>
                    <th>deskripsi </th>
                    <th>Waktu</th>
                    <th>Customer</th>
                    
                </tr>
            </thead>
            <tbody>

                <?php foreach ($ulasan as $k => $v) : ?>

                    <tr>
                        <td><?php echo $k + 1; ?></td>
                        <td><?php echo $v['jumlah_ulasan'];  ?></td>
                        <td><?php echo $v['deskripsi_ulasan'];  ?></td>
                        <td><?php echo date('d-m-Y', strtotime($v['waktu_ulasan']));  ?></td>
                        <td><?php echo $v['nama_customer'];  ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>



        </table>
   
</div>