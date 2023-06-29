<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
    <?php if($this->session->flashdata('message_login_error')): ?>
        <div class="invalid-feedback">
                <?php $this->session->flashdata('message_login_error') ?>
        </div>
    <?php endif ?>
    <div id="id01" style="z-index: 3000;" position: fixed; class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="CloseModal">&times;</span>

    <!-- the login modal content -->

        <form class="modal-content animated" action="<?php echo base_url('auth/login'); ?>">
            <div class="box-title">
                <h2><b>Login as Administrator</b></h2>
            </div>
            <div class="box">
                <label for="uname"> <b>Username</b></label>
                <input type="text" class="<?php form_error('username') ? 'invalid' : '' ?>" placeholder="Enter Username" name="uname" value="<?php set_value('username') ?>" required>

                <label for="psw"> <b>Password</b></label>
                <input type="password" class="<?php form_error('password') ? 'invalid' : '' ?>" placeholder="Enter Password" name="psw" value="<?php set_value('password') ?>" required>

                <div class="invalid-feedback">
                    <?php form_error('password') ?>
                </div>

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