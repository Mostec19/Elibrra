<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content=", html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>elib | Online</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
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

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> elibzm@gmail.com</li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="https://www.facebook.com/102843118076663/posts/111576380536670/"  target=”_blank”><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>

                            </div>
                            <div class="header__top__right__language">                                
                            </div>
                            <div class="header__top__right__auth">
                                  <a href="<?php echo base_url().'users/Login/logout'?>"><i class="fa fa-user"></i> Logout</a>
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
                            <?php
                                if ($account_type == 1) {?>
                                     <li><a target="popup" onclick="myPopup ('<?php echo base_url().'systems/Dashboard/add_user/'.$school_id?>','popup',650, 670);">Add User</a></li>
                                     <li class="active"><a href="<?php echo base_url().'systems/Dashboard/userRecords/'?>">All Users</a></li>

                                <?php }; ?>
                            <li></li>
                             <li><a href="#">Journals</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="https://login.research4life.org/tacgw/login.cshtml" target="_blank">Research4life</a></li>
                                    <li> </li>
                                        </ul>
                                    </li>
                            <li class="active"><a href="./index.html">Help</a></li>
                            <li><a href="#">Books</a></li>
                            <li><a href="#">Categories</a>
                                 <ul class="header__menu__dropdown">
                                    <?php $health = 'Health';$business = "Business/economics";  ?>
                                    <li><a href="<?php echo base_url().'users/Books/getcategory/'.'Health'?>">Health</a></li>
                                    <li><a href="<?php echo base_url().'users/Books/getcategory/'.'Business economics'?>">Business/economics</a></li>
                                    <li><a href="<?php echo base_url().'users/Books/getcategory/'.'Art architecture'?>">Art/architecture</a></li>
                                    <li><a href="<?php echo base_url().'users/Books/getcategory/'.'Philosophy'?>">Philosophy</a></li>
                                    <li><a href="<?php echo base_url().'users/Books/getcategory/'.'Science'?>">Science</a></li>
                                    <li><a href="<?php echo base_url().'users/Books/getcategory/'.'Mathematics'?>">Mathematics</a></li>
                                    <li><a href="<?php echo base_url().'users/Books/getcategory/'.'Journals'?>">Journals</a></li>
                                    <li><a href="<?php echo base_url().'users/Books/getcategory/'.'Encyclopedia'?>">Encyclopedia</a></li>
                                    <li><a href="<?php echo base_url().'users/Books/getcategory/'.'Dictionary'?>">Dictionary</a></li>
                                    <li><a href="<?php echo base_url().'users/Books/getcategory/'.'Fiction'?>">Fiction</a></li>



                                </ul>
                            </li>
                            <!-- <li><a href="./contact.html">Contact</a></li> -->

                     <div class="section-title">
                        <h5>Use the login details below to access research4life journals: <br>username: ZmbR4L104 <br>password: mt348KWs</h5>
                     </div>

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
    <section class="featured spad" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                 <div class="hero__search">
                 <!-- <div class=" hero__search__form"> -->
                 <!-- Search form (start) -->
                 <form method='post' action="<?= base_url() ?>users/Books/loadRecord" >
                    <input type='text' name='search' value='<?= $search ?>' placeholder="Search of a book ...">
                    <input type='submit' name='submit' class="site-btn" value='Search'>
                    </form>
              <!-- </div> -->
                    </div>      
                    </div>      
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Nursing & Medical</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".tvs">Anatomy and Physiology</li>
                            <li data-filter=".fridge">Clinical anatomy</li>
                            <li data-filter=".washing">Medical Biochemistry</li>
                            <li data-filter=".toaster">Fundamentals-of-Nursing</li>
                            <li data-filter=".blender">Mental Health Nursing</li>
                            <li data-filter=".coffee">Medical-Microbiology</li>
                            <li data-filter=".microwave">Fundamentals of Nursing</li>
                            <li data-filter=".kettle">Essentials_of_Medical_Pharmacology</li>
                            <li data-filter=".cooker">Basic Medical Biochemistry A Clinical Approach</li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row home__filter">
                <?php
              foreach($result as $data){ 
                if ($data['book_image'] == Null) {
                    $cover = "https://elibrra.com/assets/images/cover.png";
                }else{
                    $cover =$data['book_image'];
                }
                    $url = $data['book_url'];
                    echo '<div class="col-lg-3 col-md-4 col-sm-6 mix kettle">
                    <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="'.$cover.'">                   
                    </div> 
                    <div class="new-product">
                                <span>New</span>
                            </div>'.
                        '<div class="featured__item__text">'.
                            '</h6>'."<h6><a href='".base_url()."users/Books/Open_book/$url'>".$data['book_title'].'</h6>
                        </div>
                        </div>
                    </div>';
                }
     if(count($result) == 0){
      echo "<td colspan='3'>No record found.</td>";
    }
    ?>                                               
    </div>
    <!-- Paginate -->
   <div style='margin-top: 10px; '>
   <?= $pagination; ?>
   </div>            
    </section>

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="<?php echo base_url('assets/back/img/logo-2.png')?>" alt=""></a>
                        </div>
                        <ul>
                            <li>Email: elibzm@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Research4Life</a></li>
                            <li><a href="#">About Our Books</a></li>


                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Contact</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <div class="footer__widget__social">
                            <a href="https://www.facebook.com/102843118076663/posts/111576380536670/"  target=”_blank”><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved Power By Mostech</i>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="<?php echo base_url('assets/back/js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/back/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/back/js/jquery.nice-select.min.js')?>"></script>
    <script src="<?php echo base_url('assets/back/js/jquery-ui.min.js')?>"></script>
    <script src="<?php echo base_url('assets/back/js/jquery.slicknav.js')?>"></script>
    <script src="<?php echo base_url('assets/back/js/mixitup.min.js')?>"></script>
    <script src="<?php echo base_url('assets/back/js/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('assets/back/js/main.js')?>"></script>



</body>

</html>
