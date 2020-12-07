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
  
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link href="<?php echo base_url('assets/css/main.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/font-style.css')?>" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Panel</title>

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
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
          </ul>
          <ul class="nav nav-sidebar">
          </ul>
        </div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1 class="page-header">Dashboard</h1>

    </div>
    </div>
    </div>

<div class="container-fluid">
<div class="row">
<!-- Post Content Column -->
<div class="col-sm-5 col-sm-offset-3 col-md-6 col-md-offset-2 main">
<table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Notice</th>
                  <th>Atteched_file</th>
                  <th>Added_time</th>
                  <th>Added_By</th>
                </tr>
              </thead>
              <tbody>


                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                  </a></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
       
                </tr>
              </tbody>
            </table>
      
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
        <h2 class="sub-header">Add Notice Body Here</h2>
         <form method="post" action="<?php echo base_url().'/admin/dashboard/addnews/'.$school_id?>" enctype="multipart/form-data">
              <div class="row">
              <div class="col-lg-8">
              <div class="form-group">
                <label>Title</label>
                  <input type="text" class="form-control border-input" name="title" value="<?php echo set_value('title');?>" placeholder="Title" >
                    <span class="text-danger"><?php echo form_error("title"); ?> </span>
                  </div>
                  </div>
                  </div>
                  <div class="row">
                   <div class="col-md-8">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Type Here</label>
                    <textarea name="body" value="<?php echo set_value('body');?>" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    <span class="text-danger"><?php echo form_error("body"); ?> </span>

                  </div>
                  </div>
                  </div>

                  <div class="row">
                  <div class="col-md-8">
                  <div class="form-group">
                  <label class="" for="date">Choose File</label><br>
                  <input class="form-control" type="file" name="file" id="">
                  </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-8">
                   <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Save</button>
                    </div>
                  </div>
                  </div>
                    
                    <div class="clearfix"></div>
                    </form>


      </div>

    </div>
    <!-- /.row -->

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
