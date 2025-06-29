<style>
    .body {
        background-color: #E6EDF7;
    }

    /* NAVBAR */
    .navbar {
        background-color: #024CAA;
    }

    /* Hover effect: underline animation from left to right */
    .navbar-nav .nav-link {
        position: relative;
        display: inline-block;
        text-decoration: none;
    }

    .navbar-nav .nav-link::after {
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

    .navbar-nav .nav-link:hover::after {
        width: 100%;
    }

    /* Style for the orange button */
    .btn-orange {
        background-color: orange;
        color: white;
    }

    .btn-orange:hover {
        background-color: darkorange;
    }

    /* Adjust margin for fixed navbar */
    .mt-navbar {
        margin-top: 80px;
    }

    .sidebar {
        background-color: #f8f9fa;
        height: 100vh;
        padding-top: 20px;
        position: fixed;
        top: 60px;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        overflow-y: hidden;
        transition: width 0.3s ease;
    }

    .rounded-circle {
        border-radius: 50%;
        width: 100px;
        /* Sesuaikan ukuran */
        height: 100px;
        /* Sesuaikan ukuran */
        object-fit: cover;
        /* Agar gambar sesuai dengan bentuk lingkaran */
    }


    .sidebar-button {
        display: flex;
        align-items: center;
        justify-content: start;
        /* Posisi ikon dan teks dimulai dari kiri */
        width: 100%;
        /* Membuat tombol menggunakan lebar penuh dalam padding */
        background-color: white;
        border: 1px solid #ddd;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        padding: 10px;
    
        /* Memberikan ruang dalam tombol */
    }

    .sidebar-button img {
        width: 20px;
        /* Ukuran ikon/logo */
        height: 20px;
        margin-right: 10px;
        /* Jarak antara ikon dan teks tombol */
        margin-left: 2px;
        /* Jarak antara ikon dan teks tombol */
    }

    .sidebar-button span {
        margin-right: 100px;
    }


    .sidebar-button:hover {
        background-color: #024CAA;
        color: white;
        border-color: #024CAA;
    }

    .sidebar-button:active {
        background-color: #003E85;
        color: white;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    }

    .dashboard-content {
        margin-left: 270px;
        padding: 40px;
    }

    .card {
        background-color: #024CAA;
        color: white;
        border: none;
        border-radius: 10px;
    }

    .btn-orange {
        background-color: #ff9900;
        color: white;
        border: none;
        border-radius: 5px;
    }

    .btn-orange:hover {
        background-color: #cc7a00;
    }

    .profile-section {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .profile-image {
        width: 60px;
        height: 60px;
    }

    .sidebar-button {
        width: 100%;
        margin: 5px 0;
        margin-right: 100px;
    }

    .card-review {
        display: flex;
        align-items: center;
    }

    .card-review span {
        font-size: 1.2rem;
        margin-right: 10px;
    }

    /* Responsive Design */
    @media (min-width: 0px) and (max-width: 400px) {
        .sidebar {
            width: 100px;
            padding: 10px 0;
        }

        .dashboard-content {
            margin-left: 110px;
            padding: 20px;
        }

        .sidebar .profile-section h5 {
            font-size: 0.9rem;
        }

        .sidebar .profile-image {
            width: 40px;
            height: 40px;
        }

        .card-review {
            flex-direction: column;
            align-items: flex-start;
        }

        .card-review span {
            margin-right: 0;
            margin-bottom: 5px;
        }
    }

    @media (min-width: 401px) and (max-width: 768px) {
        .sidebar {
            width: 170px;
        }

        .dashboard-content {
            margin-left: 170px;
        }

        .profile-section .profile-image {
            width: 50px;
            height: 50px;
        }
    }

    @media (min-width: 769px) and (max-width: 1990px) {
        .sidebar {
            width: 350px;
        }

        .dashboard-content {
            margin-left: 350px;
        }
    }

    @media (min-width: 1991px) {

        /* You can set styles here for screens wider than 1991px if needed */
        .sidebar {
            width: 350px;
            /* Example, adjust as needed */
        }

        .dashboard-content {
            margin-left: 400px;
            /* Example, adjust as needed */
        }
    }
</style>

<div class="d-flex ">
    <div class="sidebar d-flex flex-column align-items-center text-center">
        <div class="profile-section text-center mb-4 pt-4">
            <img
                src="<?php echo $this->config->item('url_fotouser'); ?>"
                alt="Profile Image"
                style="background-image: none;"
                class="rounded-circle profile-image" />

            <h5 class="mt-2"><?php echo $this->session->userdata("nama_customer") ?></h5>
            <!-- <button class="btn btn-warning btn-sm mt-2">Edit</button> -->
        </div>
        <div class="button-sidebar">
            <a href="<?php echo base_url('profil') ?>" class="btn btn-light sidebar-button">
                <i class="bi bi-house-fill mx-2"> Dashboard</i>
            </a>

            <a href="<?php echo base_url('notifikasi') ?>" class="btn btn-light sidebar-button">
                <i class="bi bi-bell-fill  mx-2"></i> Notifikasi</i>
            <a href="<?php echo base_url('setting') ?>" class="btn btn-light sidebar-button">
                <i class="bi bi-gear-fill mx-2"> Settings</i> 
            </a>
        </div>
    </div>