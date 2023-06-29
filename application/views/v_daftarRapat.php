<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/w3/w3.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap.min.css">
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js')?>" ></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>" ></script>
    <title>Document</title>
</head>
<body>
    <div class="w3-container w3-content" style="max-width: 1200px;margin-top:100px">
        <div class="w3-col m12">
            <div class="w3-row-padding">
                <div class="w3-col m12">
                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <h5>Daftar Rapat</h5>
                            <hr>
                            <div class="daftarRapat">
                                <button type="button" class="w3-button w3-theme-d1 w3-border w3-margin-bottom" data-toggle="modal" data-target="#dataRapat">+ New Entry</button>
                            </div>
                            <div class="modal fade" tabindex="-1" id="dataRapat" role="dialog">
                                <div class="modal-dialog">
                
                                <!-- Modal content-->
                                <div class="modal-content  modal-lg">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Tambah Data Rapat</h4>
                                
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group row">
                                                <label for="inputJudul" class="col-sm-3 col-form-label">Judul Rapat</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="inputJudul" placeholder="Judul">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputTempat" class="col-sm-3 col-form-label">Tempat</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="inputTempat" placeholder="Tempat">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputTanggal" class="col-sm-3 col-form-label">Tanggal</label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control" id="inputTanggal" placeholder="Tanggal">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputWaktu" class="col-sm-3 col-form-label">Waktu</label>
                                                <div class="col-sm-9">
                                                    <input type="time" class="form-control" id="inputWaktu" placeholder="Waktu">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputStatus" class="col-sm-3 col-form-label">Status</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="inputStatus" placeholder="Status">
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
                                        <th>id Rapat</th>
                                        <th>Judul Rapat</th>
                                        <th>Tempat</th>
                                        <th>Tanggal dan Waktu</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                        foreach($presensi as $row)
                                        {
                                    ?>
                                            <tr>
                                                <td><?php echo $row->id ?></td>
                                                <td><?php echo $row->judulRapat ?></td>
                                                <td><?php echo $row->tempat ?></td>
                                                <td><?php echo $row->tanggal ?></td>
                                                <td><?php echo $row->status ?></td>
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
            </div>
        </div>
    </div>
</body>
</html>