 <style>
     .card {
         border: 1px solid #ddd;
         transition: transform 0.3s, box-shadow 0.3s;
         box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.1);
         /* Shadow lembut */
     }

     .card:hover {
         transform: translateY(-5px);
         /* Tambahkan efek hover */
         box-shadow: 0px 10px 16px rgba(0, 0, 0, 0.2);
         /* Shadow lebih besar saat hover */
     }

     .card-image img {
         border-top-left-radius: 8px;
         border-top-right-radius: 8px;
     }

     .card-body {
         padding: 15px;
     }
 </style>

 <!-- HERO -->
 <div class="hero">
     <div class="text" id="hero-text">
         Temukan Tukang Terbaik Untuk Semua Kebutuhan Renovasi Anda
         <br>
         <button id="booking-button">Booking Sekarang</button>
     </div>
     <img src="<?php echo $this->config->item('url_hero'); ?>" alt="Tukang" style="margin-bottom: -50px;">
 </div>

 <!-- LAYANAN -->
 <section id="layanan" class="container mt-5 text-center">
     <div class="row g-4">
         <h1 class="text-start">Kategori Layanan Kami</h1>
         <div class="col-lg-3 col-md-3 col-sm-6 col-6">
             <div class="card h-100 p-3">
                 <div class="card-image">
                     <img src="<?php echo $this->config->item('url_rumah'); ?>" class="card-img-top" alt="Desain Interior"
                         style="width: 130px;">
                 </div>
                 <div class="card-body text-center">
                     <h5 class="card-title">Design Interior</h5>
                     <p class="card-text">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet
                         consectetur.</p>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-6 col-6">
             <div class="card h-100 p-3">
                 <div class="card-image">
                     <img src="<?php echo $this->config->item('url_cat'); ?>" class="card-img-top" alt="Desain Interior"
                         style="width: 130px;">
                 </div>
                 <div class="card-body text-center">
                     <h5 class="card-title">Layanan Plumbing</h5>
                     <p class="card-text">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet
                         consectetur.</p>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-6 col-6">
             <div class="card h-100 p-3">
                 <div class="card-image">
                     <img src="<?php echo $this->config->item('url_genteng'); ?>" class="card-img-top" alt="Tukang Genteng"
                         style="width: 130px;">
                 </div>
                 <div class="card-body text-center">
                     <h5 class="card-title">Tukang Genteng</h5>
                     <p class="card-text">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet
                         consectetur.</p>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-6 col-6">
             <div class="card h-100 p-3">
                 <div class="card-image">
                     <img src="<?php echo $this->config->item('url_renovasi'); ?>" class="card-img-top" alt="Desain Interior"
                         style="width: 130px;">
                 </div>
                 <div class="card-body text-center">
                     <h5 class="card-title">Renovasi Bangunan</h5>
                     <p class="card-text">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet
                         consectetur.</p>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-6 col-6">
             <div class="card h-100 p-3">
                 <div class="card-image">
                     <img src="<?php echo $this->config->item('url_ac'); ?>" class="card-img-top" alt="Desain Interior"
                         style="width: 130px;">
                 </div>
                 <div class="card-body text-center">
                     <h5 class="card-title">Tukang Ac</h5>
                     <p class="card-text">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet
                         consectetur.</p>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-6 col-6">
             <div class="card h-100 p-3">
                 <div class="card-image">
                     <img src="<?php echo $this->config->item('url_pipa'); ?>" class="card-img-top" alt="Desain Interior"
                         style="width: 130px;">
                 </div>
                 <div class="card-body text-center">
                     <h5 class="card-title">Tukang Pipa</h5>
                     <p class="card-text">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet
                         consectetur.</p>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-6 col-6">
             <div class="card h-100 p-3">
                 <div class="card-image">
                     <img src="<?php echo $this->config->item('url_listrik'); ?>" class="card-img-top" alt="Desain Interior"
                         style="width: 130px;">
                 </div>
                 <div class="card-body text-center">
                     <h5 class="card-title">Tukang Listrik</h5>
                     <p class="card-text">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet
                         consectetur.</p>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-6 col-6">
             <div class="card h-100 p-3">
                 <div class="card-image">
                     <img src="<?php echo $this->config->item('url_lantai'); ?>" class="card-img-top" alt="Desain Interior"
                         style="width: 130px;">
                 </div>
                 <div class="card-body text-center">
                     <h5 class="card-title">Tukang Keramik</h5>
                     <p class="card-text">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet
                         consectetur.</p>
                 </div>
             </div>
         </div>

     </div>
 </section>


 <!-- PENCAPAIAN -->
 <section id="pencapaian" class="achievement-section py-5">
     <div class="container text-center">
         <h2 class="mb-5 text-start">
             <span class="fw-bold">Pencapaian</span> <span class="text-warning">CariTukang</span>
         </h2>
         <div class="row justify-content-center">
             <div class="col-lg-3 col-md-6 col-6 mb-5">
                 <div class="achievement-item">
                     <div class="circle bg-warning text-white mb-3">
                         <h3><?php echo ($total_bookings); ?></h3>
                     </div>
                     <p class="text-white">Booking</p>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-6 mb-5">
                 <div class="achievement-item">
                     <div class="circle bg-warning text-white mb-3">
                         <h3><?php echo ($total_mitra); ?></h3>
                     </div>
                     <p class="text-white">Daftar Mitra</p>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-6">
                 <div class="achievement-item">
                     <div class="circle bg-warning text-white mb-3">
                         <h3>117+</h3>
                     </div>
                     <p class="text-white">Pekerjaan</p>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-6">
                 <div class="achievement-item">
                     <div class="circle bg-warning text-white mb-3">
                         <h3>117+</h3>
                     </div>
                     <p class="text-white">Pekerjaan</p>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- TESTIMONI -->
 <div id="testimoni" class="container carousel-slider bg-light my-5">
     <div class="row">
         <!-- Left Image Section -->
         <h1><b>Penilaian Mereka</b></h1>
         <h5 class="mb-4">Rating dan Testimoni</h5>
         <div class="col-12 col-md-4 text-center image-container mb-4 mb-md-0">
             <img src="<?php echo $this->config->item('url_testi'); ?>" alt="Placeholder Image" style="width: 400px; height: 400px;">
         </div>

         <!-- Right Slider Section -->
         <div class="col-12 col-md-8">
             <div class=" owl-carousel owl-theme owl-testimoni">
                 <?php foreach ($ulasan as $item): ?>
                     <div class="item bg-white shadow-sm rounded p-3 text-start">
                         <div class="d-flex align-items-center">
                             <div class="text-center me-3">
                                 <img src="./assets/download (1).png" style="width:60px; display: inline;">
                             </div>
                             <div>
                                 <h6><?php echo htmlspecialchars($item['nama_customer']); ?></h6>
                                 <span><?php echo str_repeat('⭐', $item['jumlah_ulasan']); ?></span>
                             </div>
                         </div>
                         <span class="text-muted"><?php echo htmlspecialchars($item['deskripsi_ulasan']); ?>
                     </div>
                 <?php endforeach; ?>
             </div>
         </div>
     </div>
 </div>

 <!-- ALUR -->
 <section id="alur" class="alur-booking py-5">
     <div class="container text-center">
         <div class="text-start font-white">
             <h2 class="fw-bold fs-2">Alur Booking Jasa Tukang</h2>
             <p class="fw-normal fs-4">Dengan 3 Langkah Lebih Mudah! Tukang Siap Berangkat</p>
         </div>

         <div class="row g-4 mt-4">
             <div class="col-md-4">
                 <div class="alur-card p-4">
                     <div class="alur-number">1</div>
                     <h5 class="fw-bold">Isi Form Booking</h5>
                     <p>Lorem ipsum dolor sit amet consectetur. At sit morbi porttitor malesuada vestibulum.</p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="alur-card p-4">
                     <div class="alur-number">2</div>
                     <h5 class="fw-bold">Tunggu Konfirmasi</h5>
                     <p>Lorem ipsum dolor sit amet consectetur. At sit morbi porttitor malesuada vestibulum.</p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="alur-card p-4">
                     <div class="alur-number">3</div>
                     <h5 class="fw-bold">Tukang OTW</h5>
                     <p>Lorem ipsum dolor sit amet consectetur. At sit morbi porttitor malesuada vestibulum.</p>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 <script>
     $('.owl-testimoni').owlCarousel({
         loop: true,
         margin: 10,
         dots: true, // Menambahkan titik navigasi
         responsive: {
             0: {
                 items: 1
             },
             600: {
                 items: 2
             },
             1000: {
                 items: 3
             }
         }
     });
 </script>
 <script>
     $(document).ready(function() {
         $("#testimonial-slider").owlCarousel({
             items: 1,
             itemsDesktop: [1000, 1],
             itemsDesktopSmall: [979, 1],
             itemsTablet: [768, 1],
             pagination: true,
             transitionStyle: "backSlide",
             autoPlay: true
         });
     });
 </script>