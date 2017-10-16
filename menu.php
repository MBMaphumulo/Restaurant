<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style/bootstrap.css" type="text/css" />
     <link rel="stylesheet" href="style/font-awesome.min.css" type="text/css" />
   
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="style/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pop-up -->
<link href="style/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<link href="style/mislider.css" rel="stylesheet" type="text/css" />
<link href="style/mislider-custom.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href="style/font-awesmoe.css" rel="stylesheet"> 
<script type="text/javascript" src="script/modernizr-2.6.2.min.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />

<!--/web-fonts-->
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<!--//web-fonts-->
<!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
       body{
        background: url('images/tables2.jpg') no-repeat;
        background-attachment: fixed;
      }

      #overlay {
          position: fixed;
          width: 100%; 
          height: 100%; 
          top: 0; 
          left: 0;
          right: 0;
          bottom: 0;
          background-color: rgba(0,0,0,0.7);
          z-index: -1; 
          cursor: pointer; 
      }    

      .navbar li:hover{
        padding-top: -5px;
        border-bottom: 5px solid aqua;
          -webkit-transition: 0.5s;
          -moz-transition:0.5s;
          -o-transition:0.5s;
      }      

      .carousel-inner{
      }

      .active{
        border-bottom: 5px solid aqua;
      }

       h1{
        color:white;
      }

      .rowcards {
        margin-top: 20px;
        background-color: transparent;
        color:white;
        border-radius: 10px;
        padding:10px;
        border:2px solid aqua; 

      }
      .rowcards .card img{
        width:200px;
        height: 200px;
        border-radius: 50%;
        border:5px solid gold;
      }

      .foodlist li{
        list-style-type: none;
        margin-left: -50px;
      }

      .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  .slideImg{
    animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 2s;
      -webkit-animation-duration: 2s;
      visibility: visible;
  }
    @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }

    </style>
</head>
<body>
<div id="overlay"></div>
<div class="container">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Restaurant</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="menu.php">Menu</a></li>
        <li><a href="resv.php">Reservations</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Our Restaurants</a></li>
            <li><a href="#">Help</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Terms&Conditions</a></li>
          </ul>
        </li>
      </ul> 
       <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
          </ul>
        <div class="col-md-3 navbar-right" style="margin-top:10px;">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </span>
          </div><!-- /input-group -->
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>

<center><h1 class="slide">Menu</h1></center>
<div class="row rowcards text-center slide" >
  <div class="col-md-4 card"><img src="images/food1.jpg" alt="image" />
    <h2>Breakfast</h2>
    <ul class="foodlist">
      <li> > Bacon and eggs</li>
      <li> > Bacon and eggs</li>
      <li> > Bacon and eggs</li>
      <li> > Bacon and eggs</li>
      <li> > Bacon and eggs</li>
      <li> > Bacon and eggs</li>
      <li> > Bacon and eggs</li>
    </ul>
  </div>
  <div class="col-md-4 card"><img src="images/food2.jpg" alt="image" />
    <h2>Meal</h2> <ul class="foodlist">
      <li> > Bacon and eggs</li>
      <li> > Bacon and eggs</li>
      <li> > Bacon and eggs</li>
      <li> > Bacon and eggs</li>
      <li> > Bacon and eggs</li>
      <li> > Bacon and eggs</li>
      <li> > Bacon and eggs</li>
    </ul>
  </div>
  <div class="col-md-4 card"><img src="images/food5.jpg" alt="image" />
    <h2>Desert</h2> <ul class="foodlist">
      <li> > Bacon and eggs</li>
      <li> > Bacon and eggs</li>
      <li> > Bacon and eggs</li>
      <li> > Bacon and eggs</li>
      <li> > Bacon and eggs</li>
      <li> > Bacon and eggs</li>
      <li> > Bacon and eggs</li>
    </ul>
  </div>
</div>
</div>  



<div class="clients-section slide" style="background-color: white;padding-top: 20px;">
      <div class="title-agileits">
           <center> <h3 class="w3l-agile"><h2><b>Our Customers <span style="color:rgba(24,14,20,0.5); ">Says</span></b></h2></h3> </center>
      </div>
      <div class="mis-stage"> 
        <!-- The element to select and apply miSlider to - the class is optional -->
        <ol class="mis-slider">
          <!-- The slider element - the class is optional -->
          <li class="mis-slide"> 
          <!-- A slide element - the class is optional --> 
            <a href="#" class="mis-container"> 
            <!-- A slide container - this element is optional, if absent the plugin adds it automatically -->
            <figure> 
            <!-- Slide content - whatever you want --> 
            <img src="images/t1.jpg" alt=" " class="img-responsive" />
            <figcaption>Carl Lii<span>Sed maximus eros quis leo congue ipsum sagittis.</span></figcaption>
            </figure>
            </a> </li>
          <li class="mis-slide"> <a href="#" class="mis-container">
            <figure> <img src="images/t2.jpg" alt=" " class="img-responsive" />
            <figcaption>Michael Paul<span>Sed maximus eros quis leo congue ipsum sagittis.</span></figcaption>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            </figure>
            </a> </li>
          <li class="mis-slide"> <a href="link" class="mis-container">
            <figure> <img src="images/t3.jpg" alt=" " class="img-responsive" />
            <figcaption>Henry Doe<span>Sed maximus eros quis leo congue ipsum sagittis.</span></figcaption>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            </figure>
            </a> </li>
          <li class="mis-slide"> <a href="#" class="mis-container">
            <figure> <img src="images/t4.jpg" alt=" " class="img-responsive" />
            <figcaption>Laura James<span>Sed maximus eros quis leo congue ipsum sagittis.</span></figcaption>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            </figure>
            </a> </li>
          <li class="mis-slide"> <a href="#" class="mis-container">
            <figure> <img src="images/t1.jpg" alt=" " class="img-responsive" />
            <figcaption>Thomas Carl<span>Sed maximus eros quis leo congue ipsum sagittis.</span></figcaption>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            </figure>
            </a> </li>
          <li class="mis-slide"> <a href="#" class="mis-container">
            <figure> <img src="images/t5.jpg" alt=" " class="img-responsive" />
            <figcaption>Rosy Crisp<span>Sed maximus eros quis leo congue ipsum sagittis.</span></figcaption>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            </figure>
            </a> </li>
        </ol>

      </div>
</div>


    <script src="script/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="script/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript">
      $('nav li').click(function(){
         $('nav li').removeClass('active');
         $(this).addClass('active');
      });
    </script>
        <script type="text/javascript" src="script/jquery-2.1.4.min.js"></script>


    <script type="text/javascript" src="script/jquery.zoomslider.min.js"></script>
    <!-- search-jQuery -->
    <script src="script/main.js"></script>
    <!-- pop-up-box -->  
    <script src="script/jquery.magnific-popup.js" type="text/javascript"></script>
    <!--//pop-up-box -->
    <script src="script/responsiveslides.min.js"></script>
              <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                  // Slideshow 4
                  $("#slider3").responsiveSlides({
                  auto: true,
                  pager:false,
                  nav:true,
                  speed: 500,
                  namespace: "callbacks",
                  before: function () {
                    $('.events').append("<li>before event fired.</li>");
                  },
                  after: function () {
                    $('.events').append("<li>after event fired.</li>");
                  }
                  });
              
                });
               </script>
      <script src="script/mislider.js" type="text/javascript"></script>
      <script type="text/javascript">
        jQuery(function ($) {
          var slider = $('.mis-stage').miSlider({
            //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
            stageHeight: 380,
            //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
            slidesOnStage: false,
            //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
            slidePosition: 'center',
            //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
            slideStart: 'mid',
            //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
            slideScaling: 150,
            //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
            offsetV: -5,
            //  Center slide contents vertically - Boolean. Default: false
            centerV: true,
            //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
            navButtonsOpacity: 1,
          });
        });
      </script>
  </body>
</html>