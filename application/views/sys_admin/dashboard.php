<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  

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
                                <li><i class="fa fa-tachometer"></i><a href="<?php echo base_url().'systems/DashBoard'?>">DashBoard</a></li>
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
                        <ul>
                            <li class="active"><a href="./index.html">Help</a></li>
                            <li>
                              <a target="popup" onclick="myPopup ('<?php echo base_url().'systems/Dashboard/add_book'?>','popup',1070, 650);">Add Book</a></li>
                            <li>
                              <a target="popup" onclick="myPopup ('<?php echo base_url().'systems/Dashboard/add_admin'?>','popup',650, 670);">Add Admin</a></li>
                            <li><a target="popup" onclick="myPopup ('<?php echo base_url().'systems/Dashboard/add_user'?>','popup',650, 670);">Add User</a></li>

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
         <form method='post' action="<?= base_url() ?>systems/Dashboard/loadRecord" >
            <input type='text' name='search' value='<?= $search ?>' placeholder="Search of a book ...">
            <input type='submit' name='submit' class="site-btn" value='Search'>
            </form>
      <!-- </div> -->
            </div>      
            </div>      
        <div class="col-sm-12"> 
          <h4 class="">All Books</h4>
          <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th>S.no</th>
                <th>Book_isbn</th>
                <th>Book_Title</th>
                <th>Book_Author</th>
                <th>Book Description</th>
                <th>Book_category</th>
                <th>Publisher_Id</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
    <?php            
    $sno = $row+1;
    foreach($result as $data){ 
      $content = substr($data['book_descr'],0, 180)." ...";
      $isbn = $data['book_isbn'];
      $url = $data['book_url'];
      echo "<tr>";
      echo "<td>".$sno."</td>";
      echo "<td>".$data['book_isbn']."</td>";
      echo "<td><a href='".base_url()."users/Books/Open_book/$url'>".$data['book_title']."</a></td>";
      echo "<td>".$data['book_author']."</td>";
      echo "<td>".$data['book_descr']."</td>";
      echo "<td>".$data['book_category']."</td>";
      echo "<td>".$data['publisherid']."</td>";
      echo "<td><a href='".base_url()."/systems/Dashboard/book_details/$isbn'>edit</a> | <a href='".base_url()."/systems/DashBoard/delete_book/$isbn'>delete</a></td>";
      echo "</tr>";
      $sno++;
       }
    if(count($result) == 0){
      echo "<tr>";
      echo "<td colspan='3'>No record found.</td>";
      echo "</tr>";
    }
    ?>                                                
          </tbody>
        </table>

   <!-- Paginate -->
   <div style='margin-top: 10px;'>
   <?= $pagination; ?>
   </div>
 </div>
</div>
</div>


<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
           <form method="post" action="<?php echo base_url().'/systems/dashboard/addbook/'?>" enctype="multipart/form-data">
              <div class="row">
              <div class="col-md-4">
              <div class="form-group">
                <label>Book Isbn</label>
                  <input type="text" class="form-control border-input" name="book_isbn" value="<?php echo set_value('book_isbn');?>" placeholder="Book Isbn">
                  <span class="text-danger"><?php echo form_error("book_isbn"); ?> </span>
                  </div>
                  </div>
              <div class="col-md-4">
              <div class="form-group">
                <label>Book Title</label>
                  <input type="text" class="form-control border-input" name="book_title" value="<?php echo set_value('book_title');?>" placeholder="Book Title">
                    <span class="text-danger"><?php echo form_error("book_title"); ?> </span>
                  </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Book Author</label>
                  <input type="text" class="form-control border-input" name="book_author" value="<?php echo set_value('book_author');?>" placeholder="Book Author">
                    <span class="text-danger"><?php echo form_error("book_author"); ?> </span>

                  </div>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-4">
                  <div class="form-group">
                  <label>Book Category</label>
                  <input type="number" class="form-control border-input" name="book_category" value="<?php echo set_value('book_category');?>" placeholder="Book Category">
                  <span class="text-danger"><?php echo form_error("book_category"); ?> </span>
                  </div>
                  </div> 
                   <div class="col-md-4">
                            <div class="form-group">
                            <label>Book Cover</label>
                            <input type="file" class="form-control border-input" name="book_image" value="<?php echo set_value('book_image');?>" placeholder="Book Cover">
                            <span class="text-danger"><?php echo form_error("book_image"); ?></span>
                            </div>
                    </div>
                    <div class="col-md-4">
                            <div class="form-group">
                            <label>Book</label>
                            <input type="file" class="form-control border-input" name="book_image" value="<?php echo set_value('book');?>" placeholder="book">
                            <span class="text-danger"><?php echo form_error("book"); ?></span>
                            </div>
                    </div>          
                     <div class="col-md-4">
                            <div class="form-group">
                            <label>publisher Id</label>
                            <input type="text" class="form-control border-input" name="book_image" value="<?php echo set_value('publisher_id');?>" placeholder="publisher Id">
                            <span class="text-danger"><?php echo form_error("publisher_id"); ?></span>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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
