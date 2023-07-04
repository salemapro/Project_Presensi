<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/adminlte.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/js/adminlte.min.js">
    <link rel="stylesheet" href="https://cat.bkn.go.id/presensi/plugins/fontawesome-free/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cat.bkn.go.id/presensi/dist/css/adminlte.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js')?>" ></script>
    <!-- <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>" ></script> -->
    <script type="text/javascript">
        $(document).ready(function () {
            // var list = [];
            // if(list.length == 0){
            // Swal.fire('Information','Saat ini tidak ada rapat yang tersedia', 'info');
            // }

            $('#divInput').hide();
            //$('#smoothed').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:75});
        });

        function openForm(){
            $('#divInput').show();
        }

    </script>
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
            
                <!-- LOGIN BUTTON -->
            
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <!-- <a class="dropdown-item" href="#" role="button">
                            <i class="fas fa-user"></i> Sign In
                        </a> -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formLogin">
                            <i class="fas fa-user"></i>
                            Sign In
                        </button>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <!-- <h1 class="m-0"> PRESENSI RAPAT <small>v1.0</small></h1> -->
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Presensi</a></li>
                        <li class="breadcrumb-item active">Input Presensi Rapat</li>
                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <div class="content">
                <div class="container">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0">Daftar Rapat</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Silakan pilih rapat yang Anda ikuti :</p>
                            <div class="form-group row">         
                            <select class="form-control select text-sm" id="jenis_rapat" name="jenis_rapat" required="" onchange="openForm()">
                                <option value="0" selected="" disabled="">-- Pilih Rapat --</option>
                                    <?php 
                                        foreach($presensi as $row):
                                            echo "<option value='$row->id'>$row->judulRapat | $row->tanggal, $row->waktu</option>";
                                        endforeach; 
                                    ?>
                            </select>
                            </div>
                        </div>  
                    </div>

                    <div id="divInput" class="card card-danger card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0">Lengkapi data berikut ini</h5>
                        </div>
                        <form id="formInput" role="form" action="#" method="post">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="nip" class="col-sm-2">NIP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nip" maxlength="20" name="nip" placeholder="NIP" required="" onkeypress="return isNumberKey(event)">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control-input-danger" id="no_nip" name="no_nip" onchange="onNIPChecked(this)">
                                    <label class="custom-control-label" for="no_nip"><i>Saya tidak memiliki NIP</i></label>
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nip" class="col-sm-2">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nip" class="col-sm-2">Jabatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nip" class="col-sm-2">Unit</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="unit" name="unit" placeholder="Unit" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nip" class="col-sm-2">Instansi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Instansi" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nip" class="col-sm-2">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required="">
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label for="nip" class="col-sm-2">Tanda tangan</label>
                                <div class="col-sm-10">
                                    <div class="sigPad" id="smoothed">
                                    <div class="sig sigWrapper">
                                        <div class="typed"></div>
                                        <canvas class="pad" width="300" height="100"></canvas>
                                        <input type="hidden" name="output" class="output" id="output">
                                        <li class="clearButton"><a href="#clear" class="link">Clear</a></li>
                                    </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="form-group row">
                                    &nbsp;<br/>
                                    &nbsp;  
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="hidden" id="id_rapat" name="id_rapat">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                                    &nbsp;&nbsp;&nbsp;
                                    <button type="reset" class="btn btn-outline-danger" onclick="closeForm()">Close</button>
                                </div>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>

        <!-- LOGIN FORM -->
        <?php if($this->session->flashdata('message_login_error')): ?>
            <div class="invalid-feedback">
                <?php $this->session->flashdata('message_login_error') ?>
            </div>
        <?php endif ?>
        <div class="modal fade" id="formLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formLoginLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <form action="<?php echo base_url('Auth/login'); ?>" method="post">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Login as Administrator</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        
                            <div class="modal-body">
                                <label for="recipient-name" class="col-form-label">Username :</label>
                                <div class="mb-3">
                                    <div class="input-group mb-3">
                                        <!-- <span class="input-group-text" id="basic-addon1">@</span> -->
                                        <input type="text" class="form-control <?php form_error('username') ? 'invalid' : '' ?>" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username" value="<?php set_value('username') ?>" required>
                                    </div>
                                </div>
                                <div class="invalid-feedback">
                                    <?php form_error('username') ?>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="inputPassword5" class="form-label">Password :</label>
                                    <input type="password" id="inputPassword5" class="form-control <?php form_error('password') ? 'invalid' : '' ?>" placeholder="Password" aria-labelledby="passwordHelpBlock" name="password" value="<?php set_value('password') ?>" required>
                                    <!-- <div id="passwordHelpBlock" class="form-text">
                                        Insert your password.
                                    </div> -->
                                </div>
                                <div class="invalid-feedback">
                                    <?php form_error('password') ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" value="Sign In">Sign In</button>
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>