    <div class="container-fluid dashboard-content flex-grow-1">
    <div class="container mt-5">  
            <h1>Ubah Ulasan</h1>  
            <form  method="post">  
                <input type="hidden" name="id_ulasan" value="<?php echo $ulasan['id_ulasan']; ?>">  
                <div class="mb-3">  
                    <label for="jumlah_ulasan" class="form-label">Jumlah Ulasan</label>  
                    <input type="number" class="form-control" id="jumlah_ulasan" name="jumlah_ulasan" value="<?php echo $ulasan['jumlah_ulasan']; ?>" required>  
                </div>  
                <div class="mb-3">  
                    <label for="deskripsi_ulasan" class="form-label">Deskripsi Ulasan</label>  
                    <textarea class="form-control" id="deskripsi_ulasan" name="deskripsi_ulasan" rows="4" required><?php echo htmlspecialchars($ulasan['deskripsi_ulasan']); ?></textarea>  
                </div>  
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>  
                <a href="<?php echo base_url('ulasan'); ?>" class="btn btn-secondary">Batal</a>  
            </form>  
        </div>  
    </div>