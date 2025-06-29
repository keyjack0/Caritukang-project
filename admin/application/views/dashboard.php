<div class="container-fluid p-3">    
    <h2>Hi, admin</h2>    
    <p class="lead">Selamat Datang di dashboard admin CariTukang</p>    
    <hr class="bg-white">    
    
    <div class="row">    
        <div class="col-lg-6 col-12 mb-4">    
            <div class="card bg-info text-white">    
                <div class="card-body">    
                    <h3 class="card-title"><?php echo $total_bookings; ?></h3>    
                    <p class="card-text">booking</p>    
                    <a href="<?php echo base_url('booking') ?>" class="btn btn-light">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>    
                </div>    
                <div class="card-footer bg-transparent border-top-0">    
                    <i class="fas fa-shopping-cart"></i>    
                </div>    
            </div>    
        </div>    
    
        <div class="col-lg-6 col-12 mb-4">    
            <div class="card bg-success text-white">    
                <div class="card-body">    
                    <h3 class="card-title"><?php echo $total_mitra; ?></h3>    
                    <p class="card-text">Daftar Mitra</p>    
                    <a href="<?php echo base_url('mitra') ?>" class="btn btn-light">Lihat Selengkapnya<i class="fas fa-arrow-circle-right"></i></a>    
                </div>    
                <div class="card-footer bg-transparent border-top-0">    
                    <i class="fas fa-user-plus"></i>    
                </div>    
            </div>    
        </div>    
    </div>    
</div>    
