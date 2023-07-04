<body class="layout-top-nav light-mode text-sm>
    <div class=" wrapper">
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
                            <select class="form-control select text-sm" id="jenis_rapat" name="jenis_rapat" required="" onchange="cariPresensi()">
                                <option value="0" selected="" disabled="">-- Pilih Rapat --</option>
                                <?php
                                foreach ($presensi as $row) :
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
                                    <th>ID</th>
                                    <th>NIP</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jabatan</th>
                                    <th>Unit</th>
                                    <th>Instansi</th>
                                    <th>Email</th>
                                    <th>Attendance</th>
                                    <th class="col-md-1" nowrap="">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">

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
        $(document).ready(function() {
            // var list = [];
            // if(list.length == 0){
            // Swal.fire('Information','Saat ini tidak ada rapat yang tersedia', 'info');
            // }

            $('#dataHadir').hide();
            //$('#smoothed').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:75});
        });

        function openForm() {
            $('#dataHadir').show();
        }

        function cariPresensi() {
            var id_rapat = $("#jenis_rapat").val();
            var base_url = "<?php echo base_url(); ?>";
            //$("#loading").html('<img src="' + base_url + 'dist/img/loading.gif" width="80">');
            $('#example1').DataTable().destroy();
            $.ajax({
                type: "post",
                url: "../presensi/get_presensi",
                data: {
                    id_rapat: id_rapat
                },
                async: true,
                success: function(dt, status, xhr) {
                    if (dt !== "" && dt !== null && dt !== undefined && dt !== '["ERR"]') {
                        var data = JSON.parse(dt);
                        try {
                            $('table tbody').empty();

                            $.each(data, function(index, item) {
                                var row = create_data_table_row(index + 1, item);
                                $('table tbody').append(row);
                            });
                            $('#filter').focus();
                            $('#example1').DataTable({
                                "paging": true,
                                "lengthChange": false

                            });
                        } catch (e) {
                            //toastr.warning('Error with message: ' + e.message);
                        }

                    } else {
                        $('#example1').DataTable().destroy();
                        $('table tbody').empty();
                        $('#example1').DataTable({
                            "paging": true,
                            "lengthChange": false
                        });
                    }

                }
            });
            $("#loading").html('');
            $('#dataHadir').show();
        }

        function create_data_table_row(index, item) {
            var row = $('<tr><td>' + item.id + '</td> ' +
                '<td>' + item.nip + '</td> ' +
                '<td>' + item.namaLengkap + '</td> ' +
                '<td>' + item.jabatan + '</td> ' +
                '<td>' + item.unit + '</td> ' +
                '<td>' + item.intansi + '</td> ' +
                '<td>' + item.email + '</td> ' +
                '<td>' + item.attendance + '</td> ' +
                '<td nowrap><button title="Update" onclick="getRapat(' + item.id + ' )" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal"> <i class="fa fa-edit"></i> </button> &nbsp; <button title="Delete" onclick="deleteConfirm(' + item.id + ')" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>' +
                '</td></tr>');

            return row;
        }

        $('#tombolSubmit').on('click', function() {
            var $nip = $('#inputNIP').val();
            var $nama = $('#inputNama').val();
            var $jabatan = $('#inputJabatan').val();
            var $unit = $('#inputUnit').val();
            var $instansi = $('#inputInstansi').val();
            var $email = $('#inputEmail').val();

            $.ajax({
                url: "<?php echo site_url("presensi/submit") ?>",
                type: "POST",
                success: function(hasil) {
                    var $obj = $.parseJSON(hasil);
                    if ($obj.sukses == false) {
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