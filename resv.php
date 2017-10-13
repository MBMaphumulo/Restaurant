<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style/font-awesome.min.css" type="text/css" />

    <style>
      body{
        background: url('images/tables2.jpg') no-repeat;
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
      .navbar {
        border-bottom: 2px solid aqua;
        height: 58px;
      }    
      .navbar li:hover{
        padding-top: -5px;
        border-bottom: 5px solid aqua;
          -webkit-transition: 0.5s;
          -moz-transition:0.5s;
          -o-transition:0.5s;
      }      

      .carousel-inner{
        margin-top: -20px;
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
        <li ><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="menu.php">Menu</a></li>
        <li class="active"><a href="resv.php">Reservations</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Our Restaurants</a></li>
            <li><a href="#">New Features</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Terms&Conditions</a></li>
          </ul>
        </li>
      </ul>
      <h5 class="navbar-right" style="color:aqua;font-weight: bolder;">Call : (031) 000 0000</h5>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<h1>Reservations</h1>
<div class="row">
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


</div>

    <script src="script/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="script/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript">
      $('nav li').click(function(){
         $('nav li').removeClass('active');
         $(this).addClass('active');
      });
    </script>
  </body>
</html>