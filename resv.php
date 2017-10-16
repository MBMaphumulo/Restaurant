<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style/font-awesome.min.css" type="text/css" />
    <link href="style/animate.css" rel="stylesheet" type="text/css">
    <link href="style/css-plugin-collections.css" rel="stylesheet"/>
    <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
    <link href="style/style-main.css" rel="stylesheet" type="text/css">
    <link href="style/colors/theme-skin-lemon.css" rel="stylesheet" type="text/css">
    <link href="style/preloader.css" rel="stylesheet" type="text/css">
    <link href="style/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <link href="style/responsive.css" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="style/font-awesome.min.css" type="text/css" />
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
      .carousel-inner{
        border-bottom: 2px solid aqua;
        height: 58px;

      }    

      .navbar{
        z-index:99999;
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

      .inputt{
        margin-bottom: 10px;
      }

      h1{
        color:white;
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
     <center> <a class="navbar-brand" href="#">Restaurant</a></center>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="menu.php">Menu</a></li>
        <li class="active "><a href="resv.php">Reservations</a></li>
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
        <div class="col-md-3 navbar-right" style="margin-top:5px;">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." style="height: 42px;border-top-left-radius: 5px;border-bottom-left-radius: 5px;  ">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </span>
          </div><!-- /input-group -->
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<center>
<h1 class="slide">Reservations</h1>
</center>
<div class="row slide">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  <form action="" method="POST">
    <div class="row inputt">
      <div class="col-md-12">
        <div class="input-group">
         <span class="input-group-addon">
          <i class="fa fa-user-circle-o" aria-hidden="true"></i>
         </span>
          <input type="text" name="name" class="form-control" aria-label="..." placeholder="Name">
        </div>
      </div>
    </div>
    <div class="row inputt">
      <div class="col-md-12">
        <div class="input-group">
         <span class="input-group-addon">
          <i class="fa fa-users" aria-hidden="true"></i>
         </span>
          <input type="text" name="partySize" class="form-control" aria-label="..." placeholder="Party Size">
        </div>
      </div>
    </div>
    <div class="row inputt">
      <div class="col-md-12">
        <div class="input-group">
         <span class="input-group-addon">
          <i class="fa fa-table" aria-hidden="true"></i>
         </span>
          <input type="date" name="date" class="form-control" aria-label="..." placeholder="Date">
        </div>
      </div>
    </div>
    <div class="row inputt">
      <div class="col-md-12">
        <div class="input-group">
         <span class="input-group-addon">
          <i class="fa fa-clock-o" aria-hidden="true"></i>
         </span>
          <input type="text" name="availableTime" class="form-control" aria-label="..." placeholder="Available Times">
        </div>
      </div>
    </div>
    <div class="row inputt">
      <div class="col-md-12">
        <div class="input-group">
         <span class="input-group-addon">
          <i class="fa fa-phone" aria-hidden="true"></i>
         </span>
          <input type="text" name="phone" class="form-control" aria-label="..." placeholder="Phone">
        </div>
      </div>
    </div>
    <div class="row inputt">
      <div class="col-md-12">
        <div class="input-group">
         <span class="input-group-addon">
          <i class="fa fa-envelope" aria-hidden="true"></i>
         </span>
          <input type="email" name="email" class="form-control" aria-label="..." placeholder="Email">
        </div>
      </div>
    </div>
    <div class="row inputt">
      <div class="col-md-12">
        <div class="input-group">
         <span class="input-group-addon">
          <i class="fa fa-comment" aria-hidden="true"></i>
         </span>
          <input type="text" name="specialRequest" class="form-control" aria-label="..." placeholder="Special requests">
        </div>
      </div>
    </div>
    <div class="row inputt">
      <div class="col-md-12">
        <div class="input-group">
         <span class="input-group-addon"></span>
         <b>
          <input type="submit" name="submit" class="form-control btn btn-success" aria-label="..." value="Book Now">
         </b>
         <span class="input-group-addon"></span>
        </div>
      </div>
    </div>
  </form>
  </div>
  <div class="col-md-4"></div>
</div>

 <!-- Footer -->
  <footer id="footer" class="footer divider parallax layer-overlay overlay-dark-9" data-bg-img="images/7.jpg" data-parallax-ratio="0.7">
    <div class="container pt-70 pb-40">
      <div class="row mt-30">
        <div class="col-md-5">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Subscribe Us</h5>
            <!-- Mailchimp Subscription Form Starts Here -->
            <form id="mailchimp-subscription-form-footer" class="newsletter-form">
              <div class="input-group">
                <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="30px" style="height: 29px;border-top-left-radius: 5px;border-bottom-left-radius: 5px;  " id="mce-EMAIL-footer" style="" >
                <span class="input-group-btn">
                  <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit">Subscribe</button>
                </span>
              </div>
            </form>
            <!-- Mailchimp Subscription Form Validation-->
            <script type="text/javascript">
              $('#mailchimp-subscription-form-footer').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
              });

              function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                      $response = '';
                  $mailchimpform.children(".alert").remove();
                  if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
              }
            </script>
            <!-- Mailchimp Subscription Form Ends Here -->
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Call Us Now</h5>
            <div class="text-gray">
              +61 3 1234 5678 <br>
              +12 3 1234 5678
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Connect With Us</h5>
            <ul class="styled-icons icon-dark icon-circled icon-sm">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2015 ThemeMascot. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right" style="margin-left: -50px;">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- end wrapper --> 

<!-- Footer Scripts --> 
</div>

    <script src="script/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="script/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>