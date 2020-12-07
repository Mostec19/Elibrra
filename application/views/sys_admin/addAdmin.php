<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <link rel="stylesheet" href="<?php echo base_url('assets/back/css/bootstrap.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/back/css/font-awesome.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/back/css/elegant-icons.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/back/css/nice-select.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/back/css/jquery-ui.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/back/css/owl.carousel.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/back/css/slicknav.min.css')?>" type="text/css">
    <link href="<?php echo base_url('assets/back/css/style.css')?>" rel="stylesheet">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    <title>Admin Panel</title>
    <link href="css/dashboard.css" rel="stylesheet">
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

    <div class="container">       
      <div class="row">
        <div class="col-sm-12 col-sm-offset-3 col-md-10 col-md-offset-2 main"> 

          <h2 class="sub-header">Add User</h2>
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
           <form method="post" action="<?php echo base_url().'systems/Dashboard/addAdmin'?>" enctype="multipart/form-data">
              <div class="row">
              <div class="col-md-3">
              <div class="form-group">
                <label>First Name</label>
                  <input type="text" class="form-control border-input" name="firstname" value="<?php echo set_value('firstname'); ?>" placeholder="First Name" >
                  <span class="text-danger"><?php echo form_error("firstname");?></span>
                  </div>
                  </div>
                  <div class="col-md-3">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Last Name</label>
                  <input type="text" class="form-control border-input" name="lastname" value="<?php echo set_value('lastname'); ?>" placeholder="Last Name">
                  <span class="text-danger"><?php echo form_error("lastname"); ?> </span>
                  </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3">
                  <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control border-input" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email">
                  <span class="text-danger"><?php echo form_error("email"); ?> </span>
                  </div>
                  </div>

                  <div class="col-md-3">
                  <div class="form-group">
                  <label for="inputState">Permession Level</label>
                  <select name="access_level" class="form-control">
                    <option value=""></option>
                    <option>1</option>
                    <option>2</option>
                  </select>
                    <span class="text-danger"><?php echo form_error("access_level"); ?> </span>
                  </div>
                  </div>

                  </div>             
                  
                  <div class="row">
                    <div class="col-md-3">
                    <div class="form-group">
                    <label class="" for="date">Create Password</label><br>
                    <input class="form-control" type="password" name="password" id="" placeholder="password">
                    <span class="text-danger"><?php echo form_error("password"); ?> </span>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                    <label class="" for="date">Confirm Password</label><br>
                    <input class="form-control" type="password" name="confirm_password" id="date" placeholder="Confirm Password" >
                    <span class="text-danger"><?php echo form_error("confirm_password"); ?> </span>
                    </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                    <label for="inputState">Status</label>
                    <select name="status" class="form-control">
                    <option>Select</option>
                    <option value="1">Active</option>
                    <option value="0">Not Active</option>
                  </select>
                  </div>
                  </div>      
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Save</button>
                    </div>
                    <div class="clearfix"></div>
                    </form>

      <!-- <div class="col-lg-9"> 
      <table class="table table-striped" style="margin-top: 50px">
          <h2 class="sub-header">Admin User Infomation</h2>
          <?php 
          if($this->session->flashdata('true')){
           ?>
           <div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <?php  echo $this->session->flashdata('true'); ?>
          </span>&#124;</div>
          <?php    
          } else if($this->session->flashdata('error')){
          ?> 
          <div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
             <?php echo $this->session->flashdata('error'); ?>
           </span>&#124;</div>
          <?php }?>

              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Access_Level</th>
                  <th>Department</th>
                  <th>Change_Status</th>
                  <th>Status</th>
                  <th>Last_Login</th>
                </tr>
              </thead>
              <tbody>
            <?php 
             foreach($index as $re){
               
              echo 
                    '<tr>'
                    .'<td>'.$re->id.'</td>'
                   .'<td>'.$re->firstname.' '.$re->lastname.'</td>'
                    .'<td>'.$re->email.'</td>'
                    .'<td>'.$re->access_level.'</td>'
                    .'<td>'.$re->department.'</td>';
                    if ($re->status != 1){
                     echo "<td><a href='".base_url()."/admin/AddUser/change_status/$re->id/1'><button type='button' class='btn btn-success'>Activate</button></a>  </td>";
                    }else{
                     echo"<td><a href='".base_url()."/admin/AddUser/change_status/$re->id/0'><button type='button' class='btn btn-danger'>Deactivate</button></td>;";
                    }
                   if ($re->status == 1){
                     echo "<td>Active</td>";
                    }else{
                     echo'<td>Not Active</td>';
                    }
                                 
            }?>
                </tr>
               
                </tr>
              </tbody>
            </table>
          </div> -->

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
