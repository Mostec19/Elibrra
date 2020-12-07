
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/back/css/bootstrap.min.css')?>" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('assets/back/css/font-awesome.min.css')?>" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('assets/back/css/elegant-icons.css')?>" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('assets/back/css/nice-select.css')?>" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('assets/back/css/jquery-ui.min.css')?>" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('assets/back/css/owl.carousel.min.css')?>" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('assets/back/css/slicknav.min.css')?>" type="text/css">
  <link rel="stylesheet"href="<?php echo base_url('assets/back/css/style.css')?>" rel="stylesheet">
  <link rel="stylesheet"href="<?php echo base_url('assets/back/css/styles.css')?>" rel="stylesheet">

  <script src="https://kit.fontawesome.com/988c78316c.js" crossorigin="anonymous"></script>
  <link href="<?php echo base_url('assets/css/main.css')?>" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <a class="navbar-brand" href="#">elib</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
       <a href="<?php echo base_url().'Pages'?>"><i class="fa fa-home"></i> Home</a>
      </li>
    </ul>
    <span class="navbar-text">
    <li><i class="fa fa-envelope"></i> elibzm@gmail.com</li>
    </span>
  </div>
</nav>
 
<div class="d-flex justify-content-center align-items-center container ">
  <div class="row" style="margin-top:150px;">
    <div class="card-header">
  <img src="<?php echo base_url('assets/back/img/logo-2.png')?>">
  </div>
  <div class="card text-center" style="padding: 30px;">
  <?php 
   if($this->session->flashdata('true')){
 ?>
   <div class="alert alert-success"> 
     <?php  echo $this->session->flashdata('true'); ?>
<?php    
} else if($this->session->flashdata('error')){
?>
 <div class = "alert alert-danger">
   <?php echo $this->session->flashdata('error'); ?>
 </div>
<?php } ?>
  <form method="POST" action="<?php base_url()?>Login/login">
  <div class="form-group">
    <input type="email" class="form-control" name="email" 
    value="" id="exampleInputEmail1" placeholder="Enter Email">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <input type="password" name="password" value="" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 <a href="#"><p align="right">Forgot Password:</p></a>
  <div class="form-group">
  <button type="submit" value="login"class="btn btn-primary btn-lg">Log-In</button>
</div>

</form>
</div>
</div>
</div>   
</body>
</html>
