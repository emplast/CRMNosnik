<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CRM Nośniki danych</title>
  <link rel="icon" href="<?= base_url('/bower_components/Ionicons/png/512/hdd.png')?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('/bower_components/bootstrap/dist/css/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('/bower_components/font-awesome/css/font-awesome.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('/bower_components/Ionicons/css/ionicons.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('/dist/css/AdminLTE.min.css')?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">-->
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
      <a href="#"><b>CRM</b>Nośnik</a>
  </div>
  <!-- User name -->
  <!--<div class="lockscreen-name">Piotr Majewski</div>-->

  <!-- START LOCK SCREEN ITEM -->
<!--  <div class="lockscreen-item">
     lockscreen image 
    <div class="lockscreen-image">
        <img src="<?= base_url('/bower_components/Ionicons/png/512/hdd.png')?>" alt="User Image">
    </div>
     /.lockscreen-image 
<?php echo form_open('index.php/Welcome/login',array('class'=>'lockscreen-credentials'));?>
     lockscreen credentials (contains the form) 
    <div class="input-group">
        <?= form_input(array('name'=>'part_0','type'=>'text','class'=>'form-control','placeholder'=>'Login'))?>
    
    
        
        <?php echo form_input(array('name'=>'part_1','type'=>'password','class'=>'form-control','placeholder'=>'Hasło'));?>
        <div class="input-group-btn">
          <button  type="submit" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    
     /.lockscreen credentials 
 <?php echo form_close();?>
  </div>-->
 
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
      <h3 class="text-muted">Poprawne wylogowanie z sescji</h3>
  </div>
  <div class="text-center">
      <a href="#">Żegnaj</a>
  </div>
  <div class="lockscreen-footer text-center">
      Copyright &copy; 2014-<?php echo date('Y')?> <b><a href="http://www.piotr-majewski.net.pl" class="text-black">emsoft.net.pl</a></b><br>
    Wszelkie prawa zastrzeżone
  </div>
</div>
<!-- /.center -->

<!-- jQuery 3 -->
<script src="<?= base_url('/bower_components/jquery/dist/jquery.min.js')?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
</body>
</html>
