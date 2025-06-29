<section class="container my-5 pt-5">  
    <h2 class="mb-4">Artikel</h2>  
    <div class="row">  
        <?php foreach ($artikel as $article): ?>  
            <div class="col-lg-4 col-md-6 mb-4">  
                <div class="card border-0">  
                    <img src="<?php echo $this->config->item('url_artikel') . $article->foto_artikel; ?>" class="card-img-top" alt="Artikel" style="width: 300px;" >  
                    <div class="card-body">  
                        <h5 class="card-title"><?php echo $article->judul_artikel; ?></h5>  
                        <p class="card-text text-muted"><?php echo substr($article->isi_artikel, 0, 100) . '...'; ?></p>  
                        <a href="<?php echo site_url('artikel/detail/' . $article->id_artikel); ?>" class="btn btn-primary">Baca Selengkapnya</a>  
                    </div>  
                </div>  
            </div>  
        <?php endforeach; ?>  
    </div>  
</section>  
