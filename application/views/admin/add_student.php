<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <title>BLOCKS - Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link href="<?php echo base_url('assets/css/main.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-style.css')?>" rel="stylesheet">

    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

  <link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
  </head>

  <body>
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url().'/admin/dashboard'?>">DashBoard</a></div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Help</a></li>
            <li><a href="../www/logout.php">log-out</a></li>

          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
  <div class="row">
<div class="col-sm-12 col-sm-offset-6 col-md-8 col-md-offset-2 main">
  <h2 class="sub-header">Add Student Information</h2>
  <div class="table-responsive">
     <?php 
          if($this->session->flashdata('true')){
           ?>
           <div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <?php  echo $this->session->flashdata('true'); ?>
          </span>&#124;</div>
          <?php    
          } else if($this->session->flashdata('error')){
          ?> 
          <div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close"data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
             <?php echo $this->session->flashdata('error'); ?>
           </span>&#124;</div>
          <?php }?>

           <form method="post" action="<?php echo base_url().'/admin/AddStudent/addstudent/'.$school_id?>" enctype="multipart/form-data">
             <div class="row">
              <div class="col-md-3">
              <div class="form-group">
                <input type="text" name="school_id" value="<?php echo $school_id ?>" hidden>
                <label>FirstName</label>
                  <input type="text" class="form-control border-input" name="firstname" value="<?php echo set_value('firstname'); ?>" placeholder="First Name" >
                  <span class="text-danger"><?php echo form_error("firstname"); ?> </span>
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                  <label for="exampleInputEmail1">LastName</label>
                  <input type="text" class="form-control border-input" name="lastname" value="<?php echo set_value('lastname'); ?>" placeholder="Last Name">
                  <span class="text-danger"><?php echo form_error("lastname"); ?> </span>
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                  <label>Email</label>
                  <input type="text"class="form-control border-input" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email">
                  <span class="text-danger"><?php echo form_error("email"); ?> </span>
                  </div>
                  </div>
                </div>
                  <div class="row">
                  <div class="col-md-3">
                  <div class="form-group">
                  <label>Student Number</label>
                  <input type="text" name="school_id" value="<?php echo $school_id ?>" hidden>
                  <input type="text" class="form-control border-input" name="student_number" value="<?php echo set_value('student_number');?>" placeholder="Student number">
                  <span class="text-danger"><?php echo form_error("student_number"); ?> </span>
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                  <label>Nrc/Passport/Drivers Licence</label>
                  <input type="text" class="form-control border-input" name="nrc" value="<?php echo set_value('nrc');?>" placeholder="Nrc Passport/Drivers Licence">
                  <span class="text-danger"><?php echo form_error("nrc"); ?> </span>
                  </div>
                  </div>
                   <div class="col-md-3">
                  <div class="form-group">
                  <label>Attach Files</label>
                  <input type="file" class="form-control border-input" name="files" value="<?php echo set_value('files');?>" placeholder="Attachments">
                  <span class="text-danger"><?php echo form_error("files"); ?> </span>
                  </div>
                  </div>
                  </div>

                  <div class="row"> 
                   <div class="col-md-3">
                  <div class="form-group">
                  <label>Phone number</label>
                  <input type="phonenumber" class="form-control border-input" name="phone_number" value="<?php echo set_value('phone_number');?>" placeholder="phone number">
                  <span class="text-danger"><?php echo form_error("phone_number"); ?> </span>
                  </div>
                  </div>      
                  <div class="col-md-3">
                  <div class="form-group">
                  <label for="inputState">Program</label>
                  <input type="phonenumber" class="form-control border-input" name="program" value="<?php echo set_value('program');?>" placeholder="Program">
                  <span class="text-danger"><?php echo form_error("program"); ?> </span>
                  </div>
                  </div>      
                 <div class="col-md-4">
                 <div class="form-group">
                 <label for="inputState">Gender</label>
                  <select name="gender" class="form-control">
                  <option value="" required>Select</option>
                  <option value="Male" required>Male</option>
                  <option value="Female" required>Female</option>
                  </select>
                  <span class="text-danger"><?php echo form_error("gender"); ?> </span>
                  </div>
                  </div>
              </div> 
              
              <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                  <label for="inputState">Year of Study</label>
                  <input type="text" class="form-control border-input" name="year_of_study" value="<?php echo set_value('year_of_study');?>" placeholder="Date of Entry">
                  <span class="text-danger"><?php echo form_error("year_of_study"); ?> </span>
                  </div>
                  </div>  
                  <div class="col-md-3">
                  <div class="form-group">
                  <label for="inputState">Date of Entry</label>
                  <input type="Date" class="form-control border-input" name="date_of_Entry" value="<?php echo set_value('date_of_Entry');?>" placeholder="Date of Entry">
                  <span class="text-danger"><?php echo form_error("date_of_Entry"); ?> </span>
                  </div>
                  </div>  
                  <div class="col-md-4">
                  <div class="form-group">
                  <label for="inputState">Expected Year of Graduation</label>
                  <select name="expected_year_of_graduation" class="form-control">
                      <option value="" required>Select</option>
                      <option value="" required>2020</option>
                      <option value="" required>2021</option>
                      </select>
                      <span class="text-danger"><?php echo form_error("expected_year_of_graduation"); ?> </span>
                  </div>
                  </div>
                </div>
                  <div class="row">           
                  <div class="col-md-3">
                  <div class="form-group">
                  <label for="inputState">Status</label>
                  <select name="status" class="form-control">
                    <option value="">Select</option>
                    <option value="0">Not Active</option>
                    <option value="1">Active</option>
                  </select>
                    <span class="text-danger"><?php echo form_error("status"); ?> </span>

                  </div>
                  </div>
                   <div class="col-md-3">
                  <div class="form-group">
                  <label>Residential Address</label>
                  <input type="phonenumber" class="form-control border-input" name="residential_address" value="<?php echo set_value('residential_address');?>" placeholder="Residential Address">
                  <span class="text-danger"><?php echo form_error("residential_address"); ?> </span>
                  </div>
                  </div>      
                  <div class="col-md-3">
                  <div class="form-group">
                  <label for="inputState">Program</label>
                  <input type="phonenumber" class="form-control border-input" name="program" value="<?php echo set_value('program');?>" placeholder="Program">
                  <span class="text-danger"><?php echo form_error("program"); ?> </span>
                  </div>
                  </div>      
                  </div>             
             <div class="row">       
             <div class="form-group">
              <CENTER><button type="submit" name="submit" class="btn btn-primary btn-lg">Add</button></CENTER>
             </div>
             </div>
          </form>
          </div>
        </div>
      </div>
    </div>

    
  </body>
  <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</html>
