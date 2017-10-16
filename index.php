<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style/bootstrap.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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

      .carousel-caption{
        background-color: rgba(0,0,0,0.5);
        border-radius: 10px;
        padding-bottom: 20px;
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
        <h2>Price : R30</h2>
      </div>
    </div>



     <div class="item ">
           <center>
      <img style="width:100%;height: 500px;" src="images/meal1.jpg" alt="food">
    </center>
      <div class="carousel-caption">
        <h1>Meal</h1>
        <p>Meal Description</p>
        <h2>Price : R90</h2>
      </div>
    </div>
     <div class="item ">      
      <center>
      <img style="width:100%;height: 500px;" src="images/food1.jpg" alt="food">
    </center>  
      <div class="carousel-caption">
        <h1>Desert</h1>
        <p>Desert Description</p>
        <h2>Price : R10</h2>
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