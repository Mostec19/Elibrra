
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BLOCKS - Bootstrap Dashboard </title>
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

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="images/logo30.png" alt=""> BLOCKS Dashboard</a>
        </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.html"><i class="icon-home icon-white"></i> Home</a></li>
              <li><a href="tables.html"><i class="icon-th icon-white"></i> Tables</a></li>
              <li><a href="login.html"><i class="icon-lock icon-white"></i> Login</a></li>
              <li><a href="user.html"><i class="icon-user icon-white"></i> User</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="dashboard.php">Admin Panel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Messages(+0)</a></li>
            <li><a href="<?php echo base_url().'/admin/AddUser/index/'.$school_id?>">Add User</a></li>            <li><a href="passwordchange.php">Change Password</a></li>
            <li><a href="<?php echo base_url().'/admin/Login/logout'?>">logout</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>


    <div class="container">

	  <!-- FIRST ROW OF BLOCKS -->
      <div class="row">

      <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3">
          <a href="<?php echo base_url().'/admin/AddStudent/index/'.$school_id?>">
            <div class="dash-unit" style="background-color: #fc6203">
	      		<dtitle>Add Student</dtitle>
	      		<hr>
				<div class="thumbnail">
					<span aria-hidden="true" class="li_user fs1"></span>
				</div><!-- /thumbnail -->
				<h2>Add Student Infomation</h2>
				<br>
				</div>
      </a>
        </div>

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
          <a href="onlinReg.php">
      		<div class="dash-unit" style="background-color: #d203fc">
            <dtitle>Online Applications</dtitle>
            <hr>
            <div class="thumbnail">
          <span aria-hidden="true" class="li_pen fs1"></span>
        </div><!-- /thumbnail -->
	        	<h2>Online Applications</h2>
			</div>
        </a>
      </div>

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit" style="background-color: #03befc">
            <a href="searchStudent.php">
		  		<dtitle>Search Stundet</dtitle>
		  		<hr>
          <div class="thumbnail">
          <span aria-hidden="true" class="li_search fs1"></span>
        </div><!-- /thumbnail -->
	        	<h2>Search Student</h2>
			</div>
    </a>
        </div>

        <div class="col-sm-3 col-lg-3">
      		<a href="StudentPaymentInfo.php">
            <div class="dash-unit" style="background-color: #b2c831">
		  		<dtitle>Student Payment Infomation</dtitle>
		  		<hr>
          <div class="thumbnail">
          <span aria-hidden="true" class="li_banknote fs1"></span>
          </div><!-- /thumbnail -->
	        	<h2>Student Payment Infomation</h2>
			</div>
        </div></a>
      </div><!-- /row -->


	  <!-- SECOND ROW OF BLOCKS -->
      <div class="row">
        <div class="col-sm-3 col-lg-3">
       <!-- MAIL BLOCK -->
       <a href="addnotices.php">
      		<div class="dash-unit" style="background-color: #fc9003">
      		<dtitle>Add News And Notices</dtitle>
      		<hr>
          <div class="thumbnail">
          <span aria-hidden="true" class="li_megaphone fs1"></span>
          </div><!-- /thumbnail -->
            <h2>Add News And Notices</h2>
      		
		    </div>
       </a><!-- /dash-unit -->
    </div><!-- /span3 -->

        <div class="col-sm-3 col-lg-3">
          <a href="Result_search.php">
      		<div class="dash-unit" style="background-color: #3903fc">
      		<dtitle>Add Student Results</dtitle>
      		<hr>
			    <div class="thumbnail">
          <span aria-hidden="true" class="li_news fs1"></span>
          </div><!-- /thumbnail -->
            <h2>Add Student Results</h2>
			</div></a>
        </div>

	  <!-- LAST MONTH REVENUE -->
        <div class="col-sm-3 col-lg-3">
          <a href="http://localhost/moodle2"  target="_blank">
          <div class="dash-unit" style="background-color: #03befc">
      		<dtitle>Moodle</dtitle>
          <hr>
          <div class="thumbnail">
          <span aria-hidden="true" class="li_note fs1"></span>
          </div><!-- /thumbnail -->
            <h2>E-Learning</h2>
			</div></a>
        </div>

	  <!-- 30 DAYS STATS - CAROUSEL FLEXSLIDER -->
        <div class="col-sm-3 col-lg-3">
        <a href="examreg.php">
      		<div class="dash-unit" style="background-color: #fc033d">
	      		<dtitle>Exam Registrations</dtitle>
				 <div class="thumbnail">
          <span aria-hidden="true" class="li_data fs1"></span>
          </div><!-- /thumbnail -->
            <h2>Exam Registrations</h2>
        </div>
      </div></a>

	</div> 
  <!-- SECOND ROW OF BLOCKS -->
      <div class="row">
        <div class="col-sm-3 col-lg-3">
       <!-- MAIL BLOCK -->
       <a href="addcourses.php">
          <div class="dash-unit" style="background-color: #03fc84">
          <dtitle>Add Courses</dtitle>
          <hr>
          <div class="thumbnail">
          <span aria-hidden="true" class="li_note fs1"></span>
          </div><!-- /thumbnail -->
            <h2>Add Courses</h2>
          
        </div>
       </a><!-- /dash-unit -->
    </div><!-- /span3 -->

        

    <!-- LAST MONTH REVENUE -->
        <div class="col-sm-3 col-lg-3">
          <a href="addPayment.php">
          <div class="dash-unit" style="background-color: #b2c831">
          <dtitle>Add Student Payment</dtitle>
          <hr>
          <div class="thumbnail">
          <span aria-hidden="true" class="li_banknote fs1"></span>
          </div><!-- /thumbnail -->
            <h2>Add Student Payment</h2>
      </div></a>
        </div>

    <!-- 30 DAYS STATS - CAROUSEL FLEXSLIDER -->
        <div class="col-sm-3 col-lg-3">
          <a href="addProgram.php">
          <div class="dash-unit" style="background-color: #03fc84">
            <dtitle>Add Program</dtitle>
         <div class="thumbnail">
          <span aria-hidden="true" class="li_note fs1"></span>
          </div></thumbnail>
            <h2>Add Program</h2>
        </div></a>
      </div><!-- /row -->

  </div> 
  <!-- /footer -->
	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p><img src="images/logo.png" alt=""></p>
      			<p>Blocks Dashboard - Crafted With Love - Copyright 2019</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->
	</div><!-- /footerwrap -->

</body>
</html>
