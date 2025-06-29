<div class="container-fluid dashboard-content flex-grow-1">
<div class="container mt-5">  
        <h1>Tambah Ulasan</h1>  
        <form  method="post">  
            <div class="mb-3">  
                <label for="jumlah_ulasan" class="form-label">Jumlah Ulasan (Bintang)</label>  
                <input type="number" name="jumlah_ulasan" id="jumlah_ulasan" class="form-control" min="1" max="5" required>  
            </div>  
            <div class="mb-3">  
                <label for="deskripsi_ulasan" class="form-label">Deskripsi Ulasan</label>  
                <textarea name="deskripsi_ulasan" id="deskripsi_ulasan" class="form-control" rows="4" required></textarea>  
            </div>  
            <button type="submit" class="btn btn-primary">Simpan Ulasan</button>  
            <a href="<?php echo base_url('ulasan'); ?>" class="btn btn-secondary">Kembali</a>  
        </form>  
    </div> 
</div>