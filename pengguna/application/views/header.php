<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-tlaVCg6RLlYdjQ4q"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>   -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            /* background-color: #f8f9fa; */
            margin: 0;
            padding: 0;
        }

        /* NAVBAR */
        /* Hover effect: underline animation from left to right */
        .navbar-nav .nav-link {
            position: relative;
            display: inline-block;
            text-decoration: none;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            display: block;
            background: blue;
            transition: width 0.3s ease;
            left: 0;
            bottom: 0;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Style for the orange button */
        a.btn-orange {
            background-color: orange;
            color: white;
        }

        a.btn-orange:hover {
            background-color: darkorange;
            /* Ubah warna sesuai preferensi */
            color: white;
            /* Pastikan teks tetap terlihat */
            text-decoration: none;
            /* Opsional: jika ingin menghilangkan garis bawah */
        }

        /* Adjust margin for fixed navbar */
        .mt-navbar {
            margin-top: 80px;
        }


        /* HERO */
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #0056b3;
            color: white;
            padding: 50px;
            position: relative;
        }


        .hero .text {
            font-size: 2rem;
            font-weight: bold;
            max-width: 50%;
            /* Limits the width of the text */
        }

        .hero img {
            max-width: 80%;
            /* Limits the width of the image */
            height: auto;
        }

        .hero button {
            background-color: #ff6a00;
            color: white;
            padding: 15px 30px;
            border: none;
            cursor: pointer;
            font-size: 1.2rem;
            margin-top: 20px;
            display: inline-block;
        }

        .hero_mitra button {
            background-color: #ff6a00;
            color: white;
            padding: 15px 30px;
            border: none;
            cursor: pointer;
            font-size: 1.2rem;
            margin-top: 20px;
            display: inline-block;
        }

        .fade {
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        /* LAYANAN */
        .carousel-slider>image-container img {
            max-width: 100%;
            height: auto;
        }


        /* PENCAPAIAN */
        .achievement-section {
            background-color: #0052CC;
            color: white;
        }

        .circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            font-size: 36px;
        }

        .achievement-section h2 {
            font-size: 28px;
        }

        .achievement-section p {
            font-size: 18px;
        }

        .achievement-item h3 {
            margin: 0;
        }


        /* TESTIMONI */
        @media (max-width: 576px) {
            .carousel-item .col-md-4 {
                display: none;
            }

            .carousel-item .col-md-4:first-child {
                display: block;
                width: 100%;
            }

            .hero {
                margin-top: 50px;
            }
        }


        /* ALUR BOOKING */
        .alur-booking {
            background-image: url(<?php echo $this->config->item('url_bgalur'); ?>);
            /* Sesuaikan dengan gambar latar belakang Anda */
            background-size: cover;
            background-position: center;
            color: white;
        }

        .alur-booking .alur-card {
            background: rgba(0, 0, 0, 0.3);
            /* Transparan gelap */
            backdrop-filter: blur(2px);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            color: white;
        }

        .alur-booking .alur-number {
            width: 50px;
            height: 50px;
            background: #1a73e8;
            /* Warna biru */
            color: white;
            font-size: 20px;
            font-weight: bold;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
        }

        .alur-booking h5 {
            margin-bottom: 10px;
        }

        .alur-booking p {
            font-size: 14px;
            color: #d1d1d1;
        }


        /* FOOTER */
        .footer-logo {
            max-width: 150px;
            /* Adjust logo size */
        }

        .footer-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 20px;
        }

        .social-icons img {
            width: 30px;
            margin: 0 10px;
            transition: transform 0.3s ease;
        }

        .social-icons img:hover {
            transform: scale(1.1);
            /* Hover effect for social icons */
        }

        .text-white {
            color: white;
        }

        .container {
            padding-top: 20px;
            padding-bottom: 20px;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="nav navbar navbar-expand-lg navbar-white bg-light sticky-top shadow-sm">
        <div class="container py-1">
            <a class="navbar-brand mx-5 " href="<?php echo base_url('beranda'); ?>">
                <img src="<?php echo $this->config->item('url_logoblack'); ?>" style="height: 40px;">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse custom-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link me-1" href="<?php echo base_url('artikel'); ?>">Artikel</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link me-1" href="#">Pencapaian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-1" href="#">Testimoni</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link me-1" href="<?php echo base_url('aboutus'); ?> ">About Us</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="<?php echo base_url('beranda/faq'); ?>">FAQ</a>
                    </li>
                    <!-- <li class="nav-item d-lg-none">
                        <a class="btn btn-orange nav-link me-2 mb-2" href="#">Daftar Mitra</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="btn btn-primary nav-link" href="#">Booking</a>
                    </li> -->
                    <?php if (!$this->session->userdata('id_customer')) : ?>
                        <li class="nav-item d-none d-lg-flex">
                            <a class="btn btn-orange  me-2 mx-5" href="<?php echo base_url('mitra'); ?>">Daftar Mitra</a>
                        </li>
                        <li class="nav-item d-none d-lg-flex">
                            <a class="btn btn-primary " href="<?php echo base_url('welcome'); ?>">Booking</a>
                        </li>
                </ul>
            <?php endif ?>

            <?php if ($this->session->userdata('id_customer')) : ?>
                <li class="nav-item d-none d-lg-flex me-5">
                    <a class="btn btn-primary " style="background-color: #024CAA" href="<?php echo base_url('profil'); ?>">Profil</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url("logout") ?>" class="nav-link">Logout</a>
                </li>
            <?php endif ?>
            </div>
        </div>
    </nav>


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