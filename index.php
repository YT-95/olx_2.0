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
    <!--<link rel="stylesheet" href="assets/css/search.css">
    <link rel="stylesheet" href="css/style-select-box.css">-->
	<link rel="stylesheet" href="css/image.css">
			
			<script>
				//select catagory 
						function showUser(str) {
						  if (str == "") {
							document.getElementById("txtHint").innerHTML = "";
							return;
						  } else {
							var xmlhttp = new XMLHttpRequest();
							xmlhttp.onreadystatechange = function() {
							  if (this.readyState == 4 && this.status == 200) {
								document.getElementById("txtHint").innerHTML = this.responseText;
							  }
							};
							xmlhttp.open("GET","show_selected_products.php?q="+str,true);
							xmlhttp.send();
						  }
						}
					
					
					
				</script>


  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->

    <?php

        include('header.php');
        include('banner.php');
        include('main.php');
        include('footer.php');

        ?>
		<!--<li class="nav-item active"></li>-->