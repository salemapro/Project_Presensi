<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                        <li class="breadcrumb-item"><a href="#">Input Data Rapat</a></li>
                        </ol>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <div class="content">
                <div class="container">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h6 class="card-title m-0">Data Rapat</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">  
                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fa fa-plus"></i> New Entry</button>     
                            </div>  
                            <table id="example1" class="table table-bordered table-hover text-sm">
                                <thead align="center">
                                <tr>
                                    <th>ID Rapat</th>
                                    <th>Judul</th>
                                    <th>Tempat</th>
                                    <th>Tanggal dan Waktu</th>
                                    <th>Status</th> 
                                    <th class="col-md-1" nowrap="">Action</th>
                                </tr>
                                </thead>
                                <tbody id="tbody">
                                    <?php
                                        foreach($presensi as $row)
                                        {
                                    ?>
                                            <tr>
                                                <td align="center"><?php echo $row->id ?></td>
                                                <td><?php echo $row->judulRapat ?></td>
                                                <td align="center"><?php echo $row->tempat ?></td>
                                                <td align="center"><?php echo $row->tanggal,"  ", $row->waktu ?></td>
                                                <td class="col-md-0" align="center">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                                    </div>
                                                    <!-- <input type="checkbox" class="" name="my-checkbox" role="switch" data-bootstrap-switch data-off-color="danger" data-on-color="success" unchecked onchange="getStatusChanged(this, $id);"> -->
                                                </td>
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
            <!-- <div id="staticBackdrop" class="modal fade" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <label id="title">TAMBAH DATA RAPAT</label>
                        </div>
                        <form role="form" action="#" method="post"> 
                            <input type="hidden" name="action" id="action">     
                            <input type="hidden" name="id_rapat" id="id_rapat">   
                            <div class="modal-body">
                                <div class="form-group row">
                                <label for="nip" class="col-sm-2">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" required="">
                                </div>
                                </div>
                                
                                <div class="form-group row">
                                <label for="nama_unit" class="col-sm-2">Tempat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat" required="">
                                </div>
                                </div>
                                <div class="form-group row">
                                <label for="nama_unit" class="col-sm-2">Tanggal dan Waktu</label>
                                <div class="col-sm-10">
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                    <input type="text" id="tanggal_rapat" name="tanggal_rapat" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="Tanggal Rapat" />
                                    </div>
                                </div>
                                </div>
                                <div class="form-group row">
                                <label for="nama_unit" class="col-sm-2">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control select" id="status" name="status" required="">
                                        <option value="9" selected="" disabled="">-- Pilih Status --</option>
                                        <option value="1">[1] Aktif</option>
                                        <option value="0">[0] Tidak Aktif</option>
                                    </select>
                                </div>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>&nbsp;&nbsp;&nbsp;
                                <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Save</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Rapat</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 row">
                            <label for="inputJudulRapat" class="col-sm-3 col-form-label">Judul Rapat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputJudulRapat">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputTempatRapat" class="col-sm-3 col-form-label">Tempat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputTempatRapat">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputTanggalRapat" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="inputTanggalRapat">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputWaktuRapat" class="col-sm-3 col-form-label">Waktu</label>
                            <div class="col-sm-9">
                                <input type="time" class="form-control" id="inputWaktuRapat">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputLinkZoom" class="col-sm-3 col-form-label">Link Zoom/Gmeet</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputLinkZoom">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputStatusRapat" class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected disabled>--Pilih Status--</option>
                                    <option value="1">[1] Aktif</option>
                                    <option value="0">[0] Non-Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                </div>
            </div>                                                                                  
        </div>
    </div>
</body>
</html>
