<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

   <link rel="stylesheet" href="<?php echo base_url('assets/back/css/bootstrap.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/back/css/font-awesome.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/back/css/elegant-icons.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/back/css/nice-select.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/back/css/jquery-ui.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/back/css/owl.carousel.min.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/back/css/slicknav.min.css')?>" type="text/css">
    <link href="<?php echo base_url('assets/back/css/style.css')?>" rel="stylesheet">
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
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><a href="<?php echo base_url().'users/Books/'?>"><i class="fa fa-tachometer"></i>DashBoard</li></a>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <!-- <a href="https://www.facebook.com/102843118076663/posts/111576380536670/"  target=”_blank”><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
 -->
                            </div>
                            <div class="header__top__right__language">                                
                            </div>
                            <div class="header__top__right__auth">
                                  <a href="<?php echo base_url().'systems/Login/logout'?>"><i class="fa fa-user"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="<?php echo base_url('assets/back/img/logo-2.png')?>"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                <nav class="header__menu">
                        <!-- <ul>
                            <li class="active"><a href="./index.html">Help</a></li>
                            <li>
                              <a target="popup" onclick="myPopup ('<?php echo base_url().'systems/Dashboard/add_book'?>','popup',1070, 650);">Add Book</a></li>
                            <li>
                              <a target="popup" onclick="myPopup ('<?php echo base_url().'systems/Dashboard/add_admin'?>','popup',650, 670);">Add Admin</a></li>
                            <li><a target="popup" onclick="myPopup ('<?php echo base_url().'systems/Dashboard/add_user'?>','popup',650, 670);">Add User</a></li> -->

                            <!-- <li><a href="./contact.html">Contact</a></li> -->
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="humberger__open">

                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <div class="container">       
      <div class="row">
        <div class="col-lg-9">
         <div class="hero__search">
         <!-- <div class=" hero__search__form"> -->
         <!-- Search form (start) -->
         <form method='post' action="<?= base_url()?>systems/Dashboard/userRecords" >
            <input type='text' name='search' value='' placeholder="Search of a user ...">
            <input type='submit' name='submit' class="site-btn" value='Search'>
            </form>
      <!-- </div> -->
            </div>      
            </div>      
        <div class="col-sm-12"> 
          <h4 class="">All Users</h4>
          <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th>S.no</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Account Type</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

    <tbody>
            <?php            
            $sno = $row+1;
            foreach($result as $data){ 
              // $content = substr($data['book_descr'],0, 180)." ...";
              // $isbn = $data['book_isbn'];
              if ($school_id == $data['school_id']) {
    
              if ($data['status'] == 1) 
                $status = "Active";
              else
                $status = "Blocked";

               if ($data['account_type'] == 1) 
                $account_type = "Admin";
              else
                $account_type = "Student";
              
              $id = $data['id'];
              echo "<tr>".
               "<td>".$sno."</td>".
               "<td>".$data['first_name']."</a></td>".
               "<td>".$data['last_name']."</td>".
               "<td>".$data['email']."</td>".
               "<td>".$account_type."</td>".
               "<td>".$status."</td>".
               "<td><a href='".base_url()."/systems/Dashboard/book_details/$id'>edit</a> | <a href='".base_url()."/systems/DashBoard/delete_book/$id'>delete</a></td>".
               "</tr>";
              $sno++;
               
            if(count($result) == 0){
              echo "<tr>";
              echo "<td colspan='3'>No record found.</td>";
              echo "</tr>";
            }
          }
        }
            ?>                                                
          </tbody>
        </table>

   <!-- Paginate -->
   <div style='margin-top: 10px;'>
   <?= $pagination; ?>
   </div>     
          </tbody>
        </table>
 </div>
</div>
</div>

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
