<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js')?>" ></script>
</head>
<body class="layout-top-nav light-mode text-sm>
    <div class="wrapper">
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
                        <li class="breadcrumb-item"><a href="#">Input Presensi Rapat</a></li>
                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <div class="content">
                <div class="container">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0">Data Rapat</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Pilih Rapat :</p>
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

                    <div id="dataHadir" class="card card-primary card-outline">
                        <div class="card-header">
                            <h6 class="card-title m-0">Data Hadir</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fa fa-plus"></i> New Entry</button>          
                            </div>
                            <table id="example1" class="table table-bordered table-hover text-sm">
                                <thead>
                                    <tr>
                                        <th>NIP</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jabatan</th>
                                        <th>Unit</th>
                                        <th>Instansi</th>
                                        <th>Attendance</th> 
                                        <th class="col-md-1" nowrap="">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    <?php
                                        foreach($dHadir as $row)
                                        {
                                    ?>
                                            <tr>
                                                <td><?php echo $row->nip ?></td>
                                                <td><?php echo $row->namaLengkap ?></td>
                                                <td><?php echo $row->jabatan ?></td>
                                                <td><?php echo $row->unit ?></td>
                                                <td><?php echo $row->intansi ?></td>
                                                <td><?php echo $row->attendance ?></td>
                                                <!-- <td class="col-md-1">
                                                    <input type="checkbox" class="" name="my-checkbox" data-bootstrap-switch data-off-color="danger" data-on-color="success" unchecked onchange="getStatusChanged(this, $id);">
                                                </td> -->
                                                <td nowrap>
                                                    <button title="Update" onclick="getRapat($id)" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal"> 
                                                        <i class="fa fa-edit"></i> 
                                                    </button>
                                                    &nbsp; 
                                                    <button title="Delete" onclick="deleteConfirm($id)" class="btn btn-sm btn-danger"> 
                                                        <i class="fa fa-trash"></i> 
                                                    </button>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Hadir</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 row">
                            <label for="inputNIP" class="col-sm-3 col-form-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputNIP">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputNamaLengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputNama">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputJabatan" class="col-sm-3 col-form-label">Jabatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputJabatan">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputUnit" class="col-sm-3 col-form-label">Unit</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputUnit">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputInstansi" class="col-sm-3 col-form-label">Instansi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputInstansi">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="tombolSubmit">Submit</button>
                    </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>


    

    <!-- SCRIPT -->
    <script type="text/javascript">
        $(document).ready(function () {
            // var list = [];
            // if(list.length == 0){
            // Swal.fire('Information','Saat ini tidak ada rapat yang tersedia', 'info');
            // }

            $('#dataHadir').hide();
            //$('#smoothed').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:75});
        });

        function openForm(){
            $('#dataHadir').show();
        }

        $('#tombolSubmit').on('click', function () {
            var $nip = $('#inputNIP').val();
            var $nama = $('#inputNama').val();
            var $jabatan = $('#inputJabatan').val();
            var $unit = $('#inputUnit').val();
            var $instansi = $('#inputInstansi').val();
            var $email = $('#inputEmail').val();

            $.ajax({
                url: "<?php echo site_url("presensi/submit") ?>",
                type: "POST",
                success: function(hasil){
                    var $obj = $.parseJSON(hasil);
                    if($obj.sukses == false){
                        alert('Saya Gagal : ' + $obj.error());
                    } else {
                        alert('Saya Sukses');
                    }
                }
            })
        });
    </script>

</body>
</html>