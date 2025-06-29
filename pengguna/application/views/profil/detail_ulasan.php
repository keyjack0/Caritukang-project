<div class="container-fluid dashboard-content flex-grow-1">    
    <h1 class="mt-4">Semua Ulasan</h1>    
    
    <!-- Menampilkan pesan jika tidak bisa menambah ulasan -->    
    <?php if ($this->session->flashdata('message')): ?>    
        <div class="alert alert-warning">    
            <?php echo $this->session->flashdata('message'); ?>    
        </div>    
    <?php endif; ?>    
    
    <div class="d-flex justify-content-end mb-3">    
        <a href="<?php echo base_url('ulasan/tambah'); ?>" class="btn btn-primary" style="background-color: #024CAA; color: #fff;" id="tambahUlasanBtn">    
            <i class="bi bi-plus"></i>    
            <span>Tambah Data</span>    
        </a>    
    </div>    
    
    <div class="col-md-12">    
        <?php if (!empty($ulasan)): ?>    
            <?php foreach ($ulasan as $item): ?>    
                <div class="card">    
                    <div class="mx-3 my-3">    
                        <div class="rating">    
                        <p class="mb-0 text-start">    
                            <?php echo htmlspecialchars($item['nama_customer']); ?>  |
                            <small ><?php echo date('d-m-Y', strtotime($item['waktu_ulasan'])); ?></small>    
                        </p> 
                        <!-- <p class="text-muted"><?php echo($item['']); ?></p> -->
                            <span><?php echo str_repeat('⭐', $item['jumlah_ulasan']); ?></span>    
                        </div>    
                        <p class="mb-0 text-start">    
                            <?php echo htmlspecialchars($item['deskripsi_ulasan']); ?>    
                        </p>    
                    </div>    
                </div>    
                <div class="d-flex btn-card my-3">    
                    <a class="btn btn-orange flex-grow-1 me-2 py-2" href="<?php echo base_url('ulasan/ubah/' . $item['id_ulasan']); ?>">Ubah</a>    
                    <a class="btn btn-danger flex-grow-1 py-2" href="<?php echo base_url('ulasan/hapus/' . $item['id_ulasan']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus ulasan ini?');">Hapus</a>    
                </div>    
            <?php endforeach; ?>    
        <?php else: ?>    
            <p>Tidak ada ulasan yang tersedia.</p>    
        <?php endif; ?>    
    </div>    
</div>    
