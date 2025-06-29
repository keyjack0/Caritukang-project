<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <img src="<?php echo $this->config->item('url_logowhite'); ?>" alt="CariTukang Logo" class="footer-logo">
            </div>
            <div>
                <p>caritukang@gmail.com</p>
            </div>
        </div>

        <div class="text-center mt-4">
            <h1 class="footer-title">Lebih Mudah Menemukan Tukang di CariTukang</h1>
        </div>

        <div class="text-center my-3">
            <h4>Sosial Media Kami</h4>
            <div class="social-icons">
                <a href="#"><img src="<?php echo $this->config->item('url_ig'); ?>" alt="Instagram"></a>
                <a href="#"><img src="<?php echo $this->config->item('url_tiktok'); ?>" alt="TikTok"></a>
                <a href="#"><img src="<?php echo $this->config->item('url_linkedin'); ?>" alt="LinkedIn"></a>
            </div>
        </div>

        <div class="text-center">
            <h2>Condongcatur, Ring Road Utara, Kab. Sleman, Daerah Istimewa Yogyakarta</h2>
            <h5>© 2024 CariTukang. All rights reserved</h5>
        </div>
    </div>
</footer>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php if ($this->session->flashdata('pesan_sukses')) : ?>
    <script>
        swal("Sukses!", "<?php echo $this->session->flashdata('pesan_sukses'); ?>", "success");
    </script>

<?php endif ?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php if ($this->session->flashdata('pesan_gagal')) : ?>
    <script>
        swal("Gagal!", "<?php echo $this->session->flashdata('pesan_gagal'); ?>", "error");
    </script>

<?php endif ?>
</head>