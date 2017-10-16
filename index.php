<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style/bootstrap.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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

    /* Full-width input fields */
input[type=text], input[type=password],.form>input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    height: 40px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
    background-color: white;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 5; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.7); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin:0px 15% 20px 15%; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 400px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 50%;
    }

    form {
        height: 100%;
        top: -30px;
        left: -25px;
        background-color: rgba(255,255,255,0.1);
    }

    form {
    height: 79%;
    top: 31px;
    left: -19px;
    background-color: rgba(255,255,255,0.1);
}
}

form{
  height: 100%;
  top:-30px;
  left: -70px;
  background-color: rgba(255,255,255,0.1)
}
       body{
        background: url('images/tables2.jpg') no-repeat;
        background-attachment: fixed;
      }

      .navbar{
        z-index:2;
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
      .carousel-inner {
        border-bottom: 2px solid aqua;
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

      .carousel-caption{
        background-color: rgba(0,0,0,0.5);
        border-radius: 10px;
        padding-bottom: 20px;
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
<div id="id01" class="modal" >
  <form class="modal-content animate" action="" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/avatar.png" alt="Avatar" style="width:100px" class="avatar">
    </div>

    <div class=" col-md-offset-4 col-md-4">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
      <span class="new" style="float: right;">forgot <a href="#" style="color:blue;font-weight:bolder;" >password?</a></span>
    </div>

    <div class=" col-md-offset-4 col-md-4">
     
    
    <hr style="border-bottom: 2px solid grey;" />
    </div>

       <div class=" col-md-offset-4 col-md-6">
      <div class="row">
      <div class="col-md-6">
         Don't have an Account? 
      </div> 
      <div class="col-md-6 navbar-right">
        <a href="#" onclick="document.getElementById('id02').style.display='block';
      document.getElementById('id01').style.display='none';" style="color:blue;font-weight:bolder;margin-left:-15px;" >Register</a>
      </div>
    </div>
    </div>
  </form>
</div>

<div id="id02" class="modal" style="z-index: 5555;height: 660px;margin-bottom: 20px;margin-top: -10px;">
  <form class="modal-content animate" action="" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="form col-md-offset-4 col-md-4">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Email</b></label>
      <input type="email" placeholder="Enter Emial" name="uname" required>

      <label><b>Phone Number</b></label>
      <input type="text" placeholder="Enter Phone" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="psw" required>
        
      <button type="submit">Register</button>
       <hr style="border-bottom: 2px solid grey;" />
    </div>

    <div class=" col-md-offset-4 col-md-6">
      <div class="row">
      <div class="col-md-6">
         Already have an Account? 
      </div> 
      <div class="col-md-6 navbar-right">
        <a href="#" onclick="document.getElementById('id01').style.display='block';
      document.getElementById('id02').style.display='none';" style="color:blue;font-weight:bolder;" >Login</a>
      </div>
    </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>
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
      <ul class="nav navbar-nav ness">
        <li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="menu.php">Menu</a></li>
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
       <ul class="nav navbar-nav navbar-right ness">
            <li><a href="#" onclick="document.getElementById('id01').style.display='block'">Login</a></li>
            <li><a href="#" onclick="document.getElementById('id02').style.display='block'">Register</a></li>
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
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">


    <div class="item active">
      <center>
      <img style="width:100%;height: 500px;" src="images/breakfast1.jpg" alt="food">
    </center>
      <div class="carousel-caption">
        <h1>Breakfast</h1>
        <p>Breakfast Description</p>
        <h3 style="color:white;margin-bottom: 10px;">Price : R30</h3>
      </div>
    </div>



     <div class="item ">
           <center>
      <img style="width:100%;height: 500px;" src="images/meal1.jpg" alt="food">
    </center>
      <div class="carousel-caption">
        <h1>Meal</h1>
        <p>Meal Description</p>
        <h3 style="color:white;margin-bottom: 10px;">Price : R90</h3>
      </div>
    </div>
     <div class="item ">      
      <center>
      <img style="width:100%;height: 500px;" src="images/food1.jpg" alt="food">
    </center>  
      <div class="carousel-caption">
        <h1>Desert</h1>
        <p>Desert Description</p>
        <h3 style="color:white;margin-bottom: 10px;">Price : R10</h3>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
    </span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true">
    </span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container slide" style="background-color: white; width: 100%; margin-top:20px; margin-bottom: 20px; border-radius: 2px;">
   <center> <h2>Our Values</h2></center>
  <div class="col-md-8" >
      <h3>MISSION</h3><h4> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>

      <br>

      <h3>VISION</h3> <h4>Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
  </div>
  <div class="col-md-4" style="padding: 30px;">
   <span> <img src="images/food1.jpg" class="img-rounded slide" alt="Cinque Terre" width="325" height="250"></span>
  </div>

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
                <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="30px" style="height: 29px;border-top-left-radius: 5px;border-bottom-left-radius: 5px;" id="mce-EMAIL-footer" >
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