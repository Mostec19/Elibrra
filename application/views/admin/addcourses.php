<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <script>
         function myPopup(myURL, title, myWidth, myHeight) {
            var left = (screen.width - myWidth) / 2;
            var top = (screen.height - myHeight) / 4;
            var myWindow = window.open(myURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + myWidth + ', height=' + myHeight + ', top=' + top + ', left=' + left);
         }
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link href="<?php echo base_url('assets/css/main.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-style.css')?>" rel="stylesheet">

    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>
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
            <li><a href="../www/logout.php">Logout</a></li>

          </ul>
        </div>
      </div>
    </nav>


<div class="container-fluid">
<div class="row">      
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2 class="sub-header">Add Course</h2>
 <?php 
          if($this->session->flashdata('true')){
           ?>
           <div class="alert alert-success"> 
          <?php  echo $this->session->flashdata('true'); ?>
          </div>
          <?php    
          } else if($this->session->flashdata('error')){
          ?> 
           <div class = "alert alert-danger">
             <?php echo $this->session->flashdata('error'); ?>
           </div>
          <?php }?>
        <div class="table-responsive">
           <form method="post" action="<?php echo base_url().'/admin/Dashboard/addcourse/'.$school_id?>" enctype="multipart/form-data">
              <div class="row">
                  <div class="col-md-4">
                  <div class="form-group">
                  <label for="inputState">Year And semester</label>
                  <select name="year_and_semester" class="form-control">
                  <!-- <input type="text" name="school_id" value="<?php echo $school_id ?>" hidden> -->
                    <option value=""></option>
                    <option value="First Year First semester">First Year First semester</option>
                    <option disabled="disabled" value="First Year First semester">First Year First semester</option>
                    <option value="First Year Second semester">First Year Second semester</option>
                    <option value="Second Year First semester">Second Year First semester</option>
                    <option value="Second Year Second semester">Second Year Second semester </option>
                    <option value="Third Year First semester">Third Year First semester</option>
                    <option value="Third Year Second semester">Third Year Second semester </option>
                    <option value="fourth Year First semester">fourth Year First semester</option>
                    <option value="fourth Year Second semester">fourth Year Second semester </option>
                  </select>
                   <span class="text-danger"><?php echo form_error("year_and_semester"); ?> </span>
                  </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                    <label class="" for="date">Enter Course Code</label><br>
                    <input class="form-control" type="text" name="course_code" id="" value="<?php echo set_value('course_code'); ?>" placeholder="Course Code">
                     <span class="text-danger"><?php echo form_error("course_code"); ?> </span>
                    </div>
                    </div>
                  </div>

                  <div class="row">       
                 <div class="col-md-4">
                  <div class="form-group">
                  <label for="inputState">Select program</label>
                  <select name="program" class="form-control">
                    <option value=""></option>
                    <option value="program one">program one</option>
                    <option value="program two">program two</option>
                    <option value="program three">program three</option>
                  </select>
                  <span class="text-danger"><?php echo form_error("program"); ?> </span>
                  </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                    <label for="inputState">Enter Course Name</label>
                    <input class="form-control" type="text" name="course_name" id="" value="<?php echo set_value('course_name'); ?>" placeholder="Course Name">
                    <span class="text-danger"><?php echo form_error("course_name"); ?> </span>

                    </div>
                    </div>
        
                    </div>
                    <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Save</button>
                    </div>
                    <div class="clearfix"></div>
                    </form>
                    </div>
                <div style="clear:both"></div>
                <br>
                <div class="col-md-8">
                 <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon">Search</span>
                      <input type="text" name="search_text" id="search_text" placeholder="Search for Course" class="form-control" />
                    </div>
                  </div>
                </div>
                  
                <div id="result"></div>
                
                    </div>
                  </div>
                </div>

    
  </body>
  <script>
$(document).ready(function(){
  load_data();
  function load_data(query)
  {
    $.ajax({
      url:"../getters/searchcourse.php",
      method:"post",
      data:{query:query},
      success:function(data)
      {
        $('#result').html(data);
      }
    });
  }
  
  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
      load_data(search);
    }
    else
    {
      load_data();      
    }
  });
});
</script>
  <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</html>
