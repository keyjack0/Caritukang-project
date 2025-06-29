<section class="container my-5 pt-5">  
    <div class="container row mb-5">  
        <div class="col-lg-8 mx-auto text-center"> <!-- Center the content -->  
            <h1 class="fw-bold"><?php echo $detail_artikel->judul_artikel; ?></h1>  
            <img src="<?php echo $this->config->item('url_artikel') . $detail_artikel->foto_artikel; ?>" class="img-fluid rounded mb-4" alt="Featured Article" style="width: 600px;" >  
                <div class="text-start">           
            <p class=""><?php echo $detail_artikel->isi_artikel; ?></p></div> 
        </div>  
         
    </div>  
  
    <div class="row">  
        <div class="col-lg-12">  
            <h4 class="text-center">Rekomendasi Artikel Lainnya</h4> <!-- Center the heading -->  
            <div class="row">  
                <?php foreach ($recommended_articles as $recommended_article): ?>  
                    <div class="col-12 col-md-4 mb-3">  
                        <div class="card border-0 text-start"> <!-- Center the card content -->  
                            <img src="<?php echo $this->config->item('url_artikel') . $recommended_article->foto_artikel; ?>" class="card-img-top " alt="Artikel" style="width: 400px; text-align: center;" >  
                            <div class="card-body">  
                                <h5 class="card-title"><?php echo $recommended_article->judul_artikel; ?></h5>  
                                <a href="<?php echo site_url('artikel/detail/' . $recommended_article->id_artikel); ?>" class="btn btn-primary text-end">Baca Selengkapnya</a>  
                            </div>  
                        </div>  
                    </div>  
                <?php endforeach; ?>  
            </div>  
        </div>  
    </div>  
</section>  
