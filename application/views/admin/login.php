
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="<?php echo base_url('assets/css/main.css')?>" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
    <span class="navbar-text">
      Navbar text with an inline element
    </span>
  </div>
</nav>
 
<div class="d-flex justify-content-center align-items-center container ">
  <div class="row" style="margin-top:150px;">
    <div class="card-header">
  <img src="<?php echo base_url('assets/images/temp_logo.png')?>"width=100 height="100">
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
    <input type="password" name="password" value=""class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 <a href="#"><h6 align="right">Forgot Password:</h6></a>
  <div class="form-group">
  <button type="submit" value="login"class="btn btn-primary btn-lg">Sign-In</button>
</div>

</form>
</div>
</div>
</div>   
</body>
</html>
