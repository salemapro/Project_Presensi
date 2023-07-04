<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/adminlte.min.css')?>">
    <!-- <link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/js/adminlte.min.js">
    <link rel="stylesheet" href="https://cat.bkn.go.id/presensi/plugins/fontawesome-free/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cat.bkn.go.id/presensi/dist/css/adminlte.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js')?>" ></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>" ></script> -->
</head>
<body class="layout-top-nav light-mode text-sm>
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="width: 100%;">
            <div class="container">
                <a href="#" class="navbar-brand">
                <!-- <img src="<?php echo base_url('image/miLogo.png') ?>" alt="A" class="brand-image "
                    style="opacity: .8;margin: 30px 0 0 0 0; width:27px;height:27px"> -->
                <span class="brand-text">SS</span>
                <span class="brand-text font-weight-light">Presensi Rapat</span>
                </a>

                <!-- SEARCH FORM -->
                <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    </div>
                </div>
                </form>

                <ul class="navbar-nav ml-auto">
                <!-- <ul class="navbar-nav"> -->
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="<?php echo base_url().'index.php/Presensi/daftarHadir'?>" class="nav-link">Daftar Hadir</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="<?php echo base_url().'index.php/Presensi/daftarRapat'?>" class="nav-link">Daftar Rapat</a>
                    </li>
                    <li class="nav-item">

                    </li>
                </ul>

                <!-- LOGOUT BUTTON -->
            
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class=" btn btn-primary" href="<?php echo base_url('Auth/logout'); ?>" role="button">
                            <i class="fas fa-sign-out-alt"></i>
                            Sign Out
                        </a>
                        <!-- <i class="fas fa-user"></i> Sign In -->
                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formLogin">
                            <i class="fas fa-user"></i>
                            Sign Out
                        </button> -->
                    </li>
                </ul>
            </div>
        </nav>
    </div> 
</body>
</html>