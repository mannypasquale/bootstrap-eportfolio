<?php
  session_start();
?>
<?php
include 'db/db_connect.php';
include 'db/db_functions.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">mannypasquale.com</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
            </li>
	          <li class="nav-item mx-0 mx-lg-1">
		          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="login.php">Login</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
		          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="register.php">Register</a>
	          </li>
          </ul>
        </div>
      </div>
    </nav>
    


    
    <?php 
      if (oldUser($conn, $_POST["email-reg"]) == true){ ?>
        <div class="container pt-5 mt-5">
          <h1 class="row">Email Already in use</h1>
          <a class="row" href="register.php">Register with different email?</a>
          <a class="row" href="login.php">login with existing email?</a>
        </div>
      <?php } else { ?>
        <?php  newUser($conn, $_POST["email-reg"],$_POST["pass-reg"],$_POST["firstName-reg"],$_POST["lastName-reg"]); ?>

        <div class="container pt-5 mt-5">
        <h1 class="row">Thanks for registering</h1>
        <a class="row" href="login.php">Login?</a>
      </div>
      <?php } ?>


</body>
</html> 