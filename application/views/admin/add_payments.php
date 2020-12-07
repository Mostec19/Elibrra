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
  <h2 class="sub-header">Add Student Payment Information</h2>
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
           <form method="post" action="<?php echo base_url().'/admin/dashboard/addpayment/'.$school_id?>" enctype="multipart/form-data">
              <div class="row">
              <div class="col-md-4">
              <div class="form-group">
                <label>Student Number</label>
                  <input type="text" class="form-control border-input" name="student_number" value="<?php echo set_value('student_number');?>" placeholder="Student Number">
                  <span class="text-danger"><?php echo form_error("student_number"); ?> </span>
                  </div>
                  </div>
              <div class="col-md-4">
              <div class="form-group">
                <label>First Name</label>
                  <input type="text" class="form-control border-input" name="first_name" value="<?php echo set_value('first_name');?>" placeholder="First Name">
                    <span class="text-danger"><?php echo form_error("first_name"); ?> </span>
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input type="text" class="form-control border-input" name="last_name" value="<?php echo set_value('last_name');?>" placeholder="Last Name">
                    <span class="text-danger"><?php echo form_error("last_name"); ?> </span>

                  </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-4">
                  <div class="form-group">
                  <label>Expected Amount</label>
                  <input type="number" class="form-control border-input" name="expected_amount" value="<?php echo set_value('expected_amount');?>" placeholder="expected Amount">
                  <span class="text-danger"><?php echo form_error("expected_amount"); ?> </span>
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                  <label for="inputState">Pecentage Paid</label>
                  <select name="pecentage" class="form-control" value="<?php echo set_value('pecentage');?>" >
                    <option></option>
                    <option>50%</option>
                     <option>75%</option>
                     <option>100%</option>
                  </select>
                  <span class="text-danger"><?php echo form_error("pecentage"); ?> </span>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                  <label>Date</label>
                  <input type="date" class="form-control border-input" name="date" value="<?php echo set_value('date');?>Date">
                  <span class="text-danger"><?php echo form_error("date"); ?> </span>
                  </div>
                  </div>
                  </div>

                  <div class="row"> 
                  <div class="col-md-4">
                  <div class="form-group">
                  <label>Amount Paid</label>
                  <input type="number" class="form-control border-input" name="amount_paid" value="<?php echo set_value('amount_paid');?>" placeholder="Amount Paid">
                  <span class="text-danger"><?php echo form_error("amount_paid"); ?></span>
                  </div>
                  </div>      
                  <div class="col-md-4">
                  <div class="form-group">
                  <label for="inputState">Type Of Payment</label>
                  <select name="type_of_payment" class="form-control" value="<?php echo set_value('type_of_payment');?>">
                    <option></option>
                    <option>Tution Fee</option>
                     <option>User Fee</option>
                     <option>Exam Fee</option>
                  </select>
                  <span class="text-danger"><?php echo form_error("type_of_payment"); ?></span>
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Bank Slip Refrence nunber</label>
                  <input type="text" class="form-control border-input" name="refrence_number" value="<?php echo set_value('refrence_number');?>" placeholder="Refrence number">
                    <span class="text-danger"><?php echo form_error("refrence_number"); ?> </span>

                  </div>
                  </div>
                </div>
                  <div class="row">  
                   <div class="col-md-4">
                            <div class="form-group">
                            <label>Attach Bank Slip</label>
                            <input type="file" class="form-control border-input" name="bank_slip" value="<?php echo set_value('bank_slip');?>" placeholder="Attach Bank Slip">
                            <span class="text-danger"><?php echo form_error("bank_slip"); ?></span>
                            </div>
                    </div>     
                   <div class="col-md-4">
                   <div class="form-group">
                   <label for="inputState">Year And semester/Term</label>
                    <select name="year_and_semester" class="form-control">
                    <option value="<?php echo set_value('year_and_semester');?>"></option>
                    <ption>First Year First Term</option>
                    <option>First Year Second Term</option>
                    <option>First Year Third Term</option>
                    <option>Second Year First Term</option>
                    <option>Second Year Second Term </option>
                    <option>Second Year Third Term</option>
                    <option>Third Year First Term</option>
                    <option>Third Year Second Term </option>
                    <option>Third Year Third Term</option>
                    <option>fourth Year First Term</option>
                    <option>fourth Year Second Term </option>
                    <option>fourth Year Third Term</option>
                    <option>First Year First semester</option>
                    <option>First Year First semester</option>
                    <option>First Year Second semester</option>
                    <option>Second Year First semester</option>
                    <option>Second Year Second semester </option>
                    <option>Third Year First semester</option>
                    <option>Third Year Second semester </option>
                    <option>fourth Year First semester</option>
                    <option >fourth Year Second semester </option>
                    </select>
                    <span class="text-danger"><?php echo form_error("year_and_semester"); ?></span>
                    </div>
                    </div>
                    <div class="col-md-4">
                   <div class="form-group">
                   <label for="exampleFormControlTextarea1">Decription</label>
                      <textarea class="form-control" value="<?php echo set_value('description');?>" id="exampleFormControlTextarea1" placeholder="Type Here" name="description"  rows="4"></textarea>
                      <span class="text-danger"><?php echo form_error("description"); ?></span>
                   </div>
                   </div>
                  </div>

                 <div class="row">       
                 <div class="col-md-4">
                 <div class="form-group">
                  <button type="submit" name="submit" class="btn btn-primary btn-lg">Add</button>
                </div>
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