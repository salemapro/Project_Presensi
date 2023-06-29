<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/w3/w3.css">
    <title>Document</title>
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js')?>" ></script>
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


        // function optionClicked() {
        //     var form = document.getElementById("divInput");
        //     var dropdown = document.getElementById("jenis_rapat").click;
        //         form.style.display = "block"
        // }

        // optionClicked()
        // function optionClicked() {
        // // Get the checkbox
        // // var dropdown = document.getElementById("jenis_rapat");
        // // Get the output text
        // var text = document.getElementById("openForm");
        // var dropdown = document.getElementById("jenis_rapat").value;
            
            // text.style.display = "block";

        // if (dropdown.click == true){
        //     text.style.display = "block";
        // } else {
        //     text.style.display = "none";
        // }

        // If the checkbox is checked, display the output text
        // if (checkBox.checked == true){
        //     text.style.display = "block";
        // } else {
        //     text.style.display = "none";
        // }
        // }
    </script>
    <style>
        * {
            box-sizing: border-box;
        }
        input[type=text], select, textarea{
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical;
         }

         /* Style the label to display next to the inputs */
        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        /* Style the submit button */
        input[type=submit] {
            background-color: black;
            color: white;
            cursor: pointer;
            /* padding: 12px 20px;
            border: none;
            border-radius: 4px;
            float: right; */
        }

        /* Style the container */
        .container {
            border-radius: 5px;
            background-color: #ffffff;
            padding: 1px;
        }

        /* Floating column for labels: 25% width */
        .col-25 {
            float: left;
            width: 20%;
            margin-top: 6px;
            margin-bottom: 1px;
        }

        /* Floating column for inputs: 75% width */
        .col-75 {
            float: left;
            width: 80%;
            margin-top: 6px;
            margin-bottom: 1px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
        clear: both;
            }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Page Container -->
    <div class="w3-container w3-content" style="max-width:1200px;margin-top:100px">    
        <div class="w3-col m12">
            <div class="w3-row-padding">
                <div class="w3-col m12">
                    <div class="w3-card w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <h6 class="">Daftar Rapat </h6>
                            <hr>
                            <p> Silahkan pilih rapat yang Anda ikuti:</p>
                            <form name="" method="post" action="#">
                                <select class="form-select w3-border w3-padding w3-col m12" id="jenis_rapat" onchange="openForm()">
                                    <option value="0" selected disabled>--Pilih Rapat--</option>
                                    <?php 
                                    foreach($presensi as $row):
                                        echo "<option value='$row->id'>$row->judulRapat | $row->tanggal, $row->waktu</option>";
                                    endforeach; 
                                    ?>
                                </select>
                            </form>
                            <!-- <p contenteditable="false" class="w3-border w3-padding">Status: Feeling Blue</p> -->
                            <!-- <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button>  -->
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="w3-container w3-card w3-white w3-round w3-margin" id="divInput"><br>
                <h6>Lengkapi data berikut ini :</h6>
                <hr>
                <div class="container">
                    <form action="#" id="formInput">
                        <div class="row">
                            <div class="col-25">
                                <label for="nip">NIP</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="nip" name="nip" placeholder="NIP">
                                <label>
                                    <div class="form-check">
                                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:6px">
                                        <i>Saya tidak memiliki NIP</i>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Nama Lengkap</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="fullname" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Jabatan</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="jbt" name="jabatan" placeholder="Jabatan">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Unit</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="unit" name="unit" placeholder="Unit">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Instansi</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="ints" name="instansi" placeholder="Instansi">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Email</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="email" name="email" placeholder="Email">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-25">
                                <input type="submit" class="w3-button w3-theme-d1 w3-margin-bottom" value="Close">
                                <input type="submit" class="w3-button w3-theme-d1 w3-margin-bottom" value="Submit">
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>