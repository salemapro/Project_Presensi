<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/w3/w3.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap.min.css">
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js')?>" ></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>" ></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <title>Document</title>
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
<body>
<div class="w3-container w3-content" style="max-width: 1200px;margin-top:100px">
        <div class="w3-col m12">
            <div class="w3-row-padding">
                <div class="w3-col m12">
                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <h5>Data Rapat</h5>
                            <hr>
                            <form name="" method="post" action="#">
                                <p> Pilih Rapat :</p>
                                <div class="form-group">
                                    <select class="form-control" id="data_hadir" onchange="openForm()" >
                                        <option value="0" selected disabled>--Pilih Rapat--</option>
                                        <?php 
                                            foreach($presensi as $row):
                                                echo "<option value='$row->id'>$row->judulRapat | $row->tanggal, $row->waktu</option>";
                                            endforeach; 
                                        ?>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="w3-container w3-card w3-white w3-round w3-margin" id="divInput"><br>
                <h5>Daftar Hadir</h5>
                <hr>
                <div class="daftarHadir">
                    <button type="button" class="w3-button w3-theme-d1 w3-border w3-margin-bottom" data-toggle="modal" data-target="#myModal">+ New Entry</button>
                </div>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
    
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Data Presensi</h4>
                            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group row">
                                    <label for="inputNip" class="col-sm-3 col-form-label">NIP</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputNip" placeholder="NIP">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputNama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputNama" placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputJabatan" class="col-sm-3 col-form-label">Jabatan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputJabatan" placeholder="Jabatan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputUnit" class="col-sm-3 col-form-label">Unit</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputUnit" placeholder="Unit">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputInstansi" class="col-sm-3 col-form-label">Instansi</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputInstansi" placeholder="Instansi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                            <hr>
                                <div class="form-group row">
                                    <div class="col-sm-8">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>id</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Unit</th>
                            <th>Instanti</th>
                            <th>Email</th>
                            <th>Attendance</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            foreach($dHadir as $row)
                            {
                        ?>
                        <tr>
                            <td><?php echo $row->id ?></td>
                            <td><?php echo $row->nip ?></td>
                            <td><?php echo $row->namaLengkap ?></td>
                            <td><?php echo $row->jabatan ?></td>
                            <td><?php echo $row->unit ?></td>
                            <td><?php echo $row->intansi ?></td>
                            <td><?php echo $row->email ?></td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <?php
                        }
                        ?>
                        <!-- <tr>
                                <td>1</td>
                                <td>dummy</td>
                                <td>Zoom Meetings</td>
                                <td>18 Juli 2023 14.00</td>
                                <td>1</td>
                                <td>-</td>
                            </tr> -->
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>