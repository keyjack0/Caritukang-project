<!-- div ini jangan di ubah -->
<div class="main">
    <nav class="navbar nav navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a href="" class="navbar-brand">Dashboard</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-fill text-dark"></i>
                        <span>Admin</span>
                    </a>

                    <ul class="dropdown-menu mt-2">
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-gear-fill me-1"></i>
                                <span>Setting</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">
                                <i class="bi bi-arrow-return-left me-1"></i>
                                <span>Logout</span>
                                <li class="nav-item">
                            <a href="<?php echo base_url("logout") ?>" class="nav-link text-dark">Logout</a>
                        </li>   
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>