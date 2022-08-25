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

<br><br><br><br><br><br>
	

	<table align="center" >
		<form action="login_db.php" method="post">
			<tr>
				<td colspan="6" align="center"><h1>Login</h1></td>
			</tr>
			<tr>
				<td colspan="6"><input class="in" type="email" name="t_email" placeholder="Your E-mail*"  required></td>
			</tr>
			<tr>
				<td colspan="6"><input class="in" type="password" name="t_password" placeholder="Your Password*" required></td>
			</tr>
			<tr>
				<td colspan="6" align="center"><button class="btn" name="save">Login</button></td>
			</tr>
			<tr>
				<td colspan="6" align="center"><a href="forgot-password.php"><h6>Forgot Password?</h6></a></td>
			</tr>
			<tr>
				<td colspan="2" align="center">Not Registered?</td>
				<td colspan="4" align="center"><a href="register.php">Sign up </a> | <a href="index.php"> Home</a></td>
			</tr>
		</form>
	</table>
</body>
<?php
include('footer.php');
?>



