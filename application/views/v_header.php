<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/w3/w3.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap.min.css">
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js')?>" ></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>" ></script> -->
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }
        form.example{
            margin-top: 8px;
        }
        /* Style the search field */
        form.example input[type=text] {
            padding: 6px;
            font-size: 12px;
            border: 0.5px solid grey;
            float: left;
            width: 15%;
            background: #f1f1f1;
        }

        /* Style the submit button */
        form.example button {
            float: left;
            width: 2.5%;
            padding: 6px;
            background: #2196F3;
            color: white;
            font-size: 12px;
            border: 1px solid grey;
            border-left: none; /* Prevent double borders */
            cursor: pointer;
        }

        form.example button:hover {
            background: #0b7dda;
        }

        /* Clear floats */
        form.example::after {
            content: "";
            clear: both;
            display: table;
        }
        .form{
            border: 3px solid #f1f1f1;
        }
        input[type=text], input[type=password]{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: ipx solid #ccc;
            box-sizing: border-box;
        }
        .button-form{
            background-color: #04aa6d;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        .button-form:hover{
            opacity: 0.8;
        }
        /* .cancelbtn{
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        } */
        .box{
            margin-top: 0;
            padding: 16px;
        }
        .box-title{
            text-align: center;
            padding: 16px;
        }
        span.psw{
            float: right;
            padding-top: 16px;
        }
        /* @media screen and (max-widthx: 300px){
            span.psw{
             display: block;
                float: none;
            }
            .cancelbtn{
                width: 100%;
            }
        } */
        .modal{
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }
        .modal-content{
            background-color: #fefefe;
            margin: 5px auto;
            border: 1px solid #888;
            width: 400px;
        }
        .close{
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }
        .close:hover, .close:focus{
            color: red;
            cursor: pointer;
        }
        .animated{
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s;
        }
        @-webkit-keyframes animatezoom{
            from {-webkit-transform: scale(0)} to {-webkit-transform: scale(1)}
        }
        @keyframes animatezoom{
            from {transform: scale(0)}
            to {transform: scale(1)}
        }
    </style>
</head>
<body>
    <div class="w3-top w3-bar w3-white w3-wide w3-padding w3-card">
        <div class="w3-col m12">
            <a href="#home" class="w3-bar-item w3-button"><b>SS</b> Presensi</a>
            <!-- <form class="example" action="action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form> -->
    
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="<?php echo base_url().'index.php/Presensi/daftarRapat'?>" class="w3-bar-item w3-button"> Daftar </a>
                <a href="<?php echo base_url().'index.php/Presensi/daftarHadir'?>" class="w3-bar-item w3-button"> Hadir </a>
                <!-- <a href="#" class="w3-bar-item w3-button"> Login </a> -->
                <button class="w3-button w3-white" onclick="document.getElementById('id01').style.display='block'"> Login </button>
                <!-- <a href="#" class="w3-bar-item w3-button" onclick="document.getElementById('id01').style.display='block'"> Login </a> -->
            </div>
        </div>
    </div>
    <div id="id01" style="z-index: 3000;" position: fixed; class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="CloseModal">&times;</span>

        <!-- the login modal content -->

        <form class="modal-content animated" action="#">
            <div class="box-title">
                <h2><b>Login as Administrator</b></h2>
            </div>
            <div class="box">
                <label for="uname"> <b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"> <b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>

                <button  class="button-form" type="submit" value="Login">Login</button>
                <button  class="button-form" type="button" style="background-color: #f44336;" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"> Cancel </button>
            </div>
            <!-- <div class="box" style="background-color: #f1f1f1;">
            <span class="psw"> Forgot <a href="#">password?</a></span>
            </div> -->
        </form>
    </div>
</body>
</html>