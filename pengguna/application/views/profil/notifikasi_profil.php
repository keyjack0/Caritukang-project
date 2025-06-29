<div class="dashboard-content flex-grow-1">  
  <h2 class="fw-bold mb-4">Notifikasi</h2>  
  <div class="d-flex justify-content-between align-items-center mb-3">  
    <div class="d-flex gap-3">  
      <button class="btn btn-primary text-white shadow" style="Color: #024CAA;">Semua</button>  
    </div>  
  </div>  
  
  <div class="list-group">  
    <?php foreach ($booking as $b): ?>    
      <a href="<?= site_url('notifikasi/detail_notifikasi/' . $b['id_booking']) ?>" style="text-decoration:none; color:black;">  
        <div class="list-group-item d-flex flex-column p-3 mb-2 rounded-3 shadow">  
          <div class="d-flex justify-content-between align-items-center">  
            <span class="fw-bold"><?= date('d M Y', strtotime($b['tanggal_booking'])) ?></span>  
            <!-- <span class="badge <?= $b['status_transaksi'] == 'selesai' ? 'bg-success' : 'bg-warning text-dark' ?>">  
              <?= $b['status_transaksi'] == 'selesai' ? 'Selesai' : 'Pending' ?>  
            </span>   -->
          </div>  
          <p class="mb-0 mt-2">  
            <?= $b['deskripsi_booking'] ?>  
          </p>  
        </div>  
      </a>  
    <?php endforeach; ?>  
  </div>  
</div>  
