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
/*
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!--<link rel="stylesheet" href="assets/css/search.css">
    <link rel="stylesheet" href="css/style-select-box.css">-->
  <link rel="stylesheet" href="css/image.css">
      
      <link href="assets/css/style-l-r-form.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/png" sizes="56x56" href="image/icon.png">


  </head>

    <?php

        include('header.php');
        ?>


  <body class="bimage">

    <!-- Header -->

<br><br><br><br>
	<table align="center" >
		<form action="regi_db.php" method="post">
		<tr><td align="center"><h1> Registration</h1></td></tr>
		<tr><td>
			<input type="text" placeholder="User Name" name="uname" class="in" required /> 
			<input type="text" placeholder="Mobile" name="mobile"  class="in" pattern="[0-9]{10}" maxlength="10"  required="true" />
			<input type="text" placeholder="State" name="state" class="in" required />
			<input type="text" placeholder="City" name="city" class="in" required />
			<input type="email" placeholder="Email" name="email" class="in" required />
			<input type="password" placeholder="Password" name="password" class="in" required />
			<input type="password" placeholder="Confirm Password" name="cpassword" class="in" required />
			<input type="submit" name="register" value="Register" class="btn">
		</td></tr>
		<tr><td align="center">
			<h3> Already Registered? <a href="login.php">Login</a> | <a href="index.php">Home</a></h3>
		</td></tr>
		</form>
	</table>
</body>

<?php
include('footer.php');
?>
