
<?php 

session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>OLX 2.0</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
     <link href="vendor/jquery/jquery.min.js" rel="stylesheet">
    <link href="vendor/bootstrap/js/bootstrap.min.js" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
   <!-- <link rel="stylesheet" href="assets/css/search.css">
    <link rel="stylesheet" href="css/style-select-box.css">-->
  
<?php

  //print_r($_SESSION);
  error_reporting("ALL ERRORs");
  include("configuration.php");
  
    if( empty($_SESSION['user-email']) )
    {
      echo "<script> alert('Please login now!');window.location=('login.php');</script>";
    }
    
    //$sqry="select * from users where email='".$_SESSION['user-email']."'";
    //$result=mysql_query($sqry);

    
?>
  </head>

   <?php
      include('header.php');
     
    ?>
 

  <body>

    
    <!-- Header -->
    
    <!-- Page Content -->

    <h1>About us</h1>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About us</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="images/olxabout.jpeg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Our first goal is user's satisfaction..</h4>
              <p>We are here for give sevice to user for buy and sell any products. And user can use our service 24/7.
                <h3>Who are OLX2.0 Group?</h3>
                <br><br>We are the world’s fastest-growing network of trading platforms, operating in 30+ countries around the world.
                We help people buy and sell cars, find housing, get jobs, buy and sell household goods, and much more. With more than 20 well-loved local brands including Avito, OLX, Otomoto, and Property24, our solutions are built to be safe, smart, and convenient for our customers. 
                </p>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>What do we do?</h2>
            </div>

            <p>We love to unlock value for our customers. Every single month, 300 million people use our platforms to easily, safely, and conveniently find their perfect home, buy or sell a car, find a great job, sell things they no longer need, or strike a great deal on something they need. And we help thousands of entrepreneurs and businesses find their customers too.
            <br><br>We also unlock value within our company. We invest in ourselves and each other to reach our full potential. We avoid bureaucracy and empower our teams to innovate. Our commitment to inclusion ensures we listen to a diverse range of voices when making decisions. And, we combine the spirit and agility of a startup with our global scale and the backing of Prosus, one of the largest consumer internet groups in the world.</p>

            <p>Last but not least, we unlock value for our stakeholders. We are proud of the positive contribution we make to our planet, by enabling more conscious consumption and helping the world make the most of its limited resources through more efficient trade. <br><br> We are committed to our cause: shaping the future of trade to unlock the hidden value in everything.<br><br> We are OLX2.0 group..</p>
          </div>
        </div>
      </div>
    </div>

    <?php
    include ('footer.php');
    ?>

