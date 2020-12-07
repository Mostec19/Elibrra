<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="pdf.js">
        <meta name="viewport" content="width=device-width">
        <meta name="author" content="Dhash">

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>

        <!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

      <!-- Css Styles -->
        <link rel="stylesheet" href="<?php echo base_url('assets/back/css/bootstrap.min.css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/back/css/font-awesome.min.css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/back/css/elegant-icons.css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/back/css/nice-select.css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/back/css/jquery-ui.min.css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/back/css/owl.carousel.min.css')?>" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/back/css/slicknav.min.css')?>" type="text/css">
        <link rel="stylesheet"href="<?php echo base_url('assets/back/css/style.css')?>" rel="stylesheet">
        <link rel="stylesheet"href="<?php echo base_url('assets/back/css/styles.css')?>" rel="stylesheet">
        <script src="https://kit.fontawesome.com/988c78316c.js" crossorigin="anonymous"></script>

    </head>
    <body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
      <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                            <li><i class="fa fa-book"></i>elib</li>
                            <li class="active"><a href="./index.html">Help</a></li>
                            <li><a href="<?php echo base_url().'users/Books/books'?>">All Books</a></li>
                            <!-- <li><a href="./contact.html">Contact</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="header__top__right__language">                                
                            </div>
                            <div class="header__top__right__auth">
                                  <a href="<?php echo base_url().'users/Login'?>"><i class="fa fa-user"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- Header Section End -->

<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-light justify-content-center">
  <div class="container">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
  <ul class="navbar-nav mx-auto text-center">
   <div class="top-bar" id="navbar" >
      <button class="btn"id="prev"><i class=" fas fa-arrow-circle-up"></i> Previous</button>
      <button class="btn" id="next">Next <i class=" fas fa-arrow-circle-down"></i></button>
      <button class="btn" id="zoominbutton" type="button"><i class="fas fa-search-plus"></i> zoom in</button>
      <button class="btn" id="zoomoutbutton" type="button"><i class="fas fa-search-minus"></i> zoom out</button>
      <span>Page: <span id="page_num"></span> / <span id="page_count"></span></span>
    </button>
    <input  class="input" type="text"  placeholder="type page number" id="myInput" minlength="50">
    <button class="btn" type="button" Onclick="goToPage();">go to page</button>
    </div>
  </ul>
</div>
  <div class="collapse navbar-collapse" id="main_nav">
  <ul class="navbar-nav">
  </ul>
  <ul class="navbar-nav ml-auto">
    
  </ul>
  </div> <!-- navbar-collapse.// -->
</div><!-- container //  -->
</nav>

    <script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>
    <div class="container">
    <div class="page-cover">
        <div class="container">
           <div id="loading-overlay">
            <div class="overlay-loader">
                <span class="fas fa-3x fa-spin"><img src="<?php echo base_url('assets/back/img/logo-2.png')?>"></span>
                <!-- <span></span> -->
            </div>
              </div>
        <div class="row">   
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                   <canvas id="the-canvas" >
                     <!-- Page Preloder -->
                   </canvas> 
                </div>
            </div>
        </div>
    </div>
  </div>
    <script type="text/javascript">
       
        var url = '<?php echo base_url('assets/books').'/'.$index['id']?>';
        var pdfjsLib = window['pdfjs-dist/build/pdf'];
        var mynum = 0
        console.log(mynum);
        // The workerSrc property shall be specified.
        pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.js';
        
        var pdfDoc = null,
            pageNum = 1,
            pageRendering = false,
            pageNumPending = null,
            scale = 1.0,
            canvas = document.getElementById('the-canvas'),
            ctx = canvas.getContext('2d');

             var loadingTask = pdfjsLib.getDocument(url);

        //get progress data
        loadingTask.onProgress = function(data){
           console.log( "loaded : " + data.loaded);
           console.log( "total : " + data.total );
        }

      //use document
      loadingTask.promise.then(function(pdfjsLib){
         //do anything with pdf
         console.log('ready');
         myFunction()
      })
        /**
         * Get page info from document, resize canvas accordingly, and render page.
         * @param num Page number.
         */
        function renderPage(num) {
          pageRendering = true;
          // Using promise to fetch the page
          pdfDoc.getPage(num).then(function(page) {
            var viewport = page.getViewport({scale: scale});
            canvas.height = viewport.height;
            canvas.width = viewport.width;
            ctx.width= document.documentElement.clientWidth * 1;
        // Render PDF page into canvas context
            var renderContext = {
              canvasContext: ctx,
              viewport: viewport
            };
            var renderTask = page.render(renderContext);

            // Wait for rendering to finish
            renderTask.promise.then(function() {
              pageRendering = false;
              if (pageNumPending !== null) {
                // New page rendering is pending
                renderPage(pageNumPending);
                pageNumPending = null;
              }
            });
          });

          // Update page counters
          document.getElementById('page_num').textContent = num;
        }



        /**
         * If another page rendering in progress, waits until the rendering is
         * finised. Otherwise, executes rendering immediately.
         */
        function queueRenderPage(num) {
          if (pageRendering) {
            pageNumPending = num;
          } else {
            renderPage(num);
          }
        }


        // Displays previous page.
         function onPrevPage() {
          if (pageNum <= 1) {
            return;
          }
          pageNum--;
          queueRenderPage(pageNum);
        }
        document.getElementById('prev').addEventListener('click', onPrevPage);
        window.addEventListener("render",renderPage);

        /**
         * Displays next page.
         */
        function onNextPage() {
          if (pageNum >= pdfDoc.numPages) {
            return;
          }
          pageNum++;
          queueRenderPage(pageNum);

        }
        document.getElementById('next').addEventListener('click', onNextPage);



        function goToPage(desiredPage){
          var desiredPage 
          desiredPage = Number(document.getElementById("myInput").value);
        if(desiredPage >= pdfDoc.numPages){
            return;      
        } 
       desiredPage;
        queueRenderPage(desiredPage);
    }


document.getElementById('page_num').addEventListener('change', myFunction);
      var x = document.getElementById("loading-overlay");
      x.style.display = "block";
      function myFunction() {
      var x = document.getElementById("loading-overlay");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
            console.log('loaded');

      }

}

         var zoominbutton = document.getElementById("zoominbutton");
         zoominbutton.onclick = function() {
            scale = scale + 0.25;
            queueRenderPage(pageNum);
         }

         var zoomoutbutton = document.getElementById("zoomoutbutton");
         zoomoutbutton.onclick = function() {
            if (scale <= 0.25) {
               return;
            }
            scale = scale - 0.25;
            queueRenderPage(pageNum);
         }


        /**
         * Asynchronously downloads PDF.
         */
        pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
          pdfDoc = pdfDoc_;
          document.getElementById('page_count').textContent = pdfDoc.numPages;

          // Initial/first page rendering
          renderPage(pageNum);
        });

</script>
</div>
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
 