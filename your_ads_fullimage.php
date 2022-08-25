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
											<!--

						TemplateMo 546 Sixteen Clothing

						https://templatemo.com/tm-546-sixteen-clothing

						-->

							<!-- Additional CSS Files -->
							<link rel="stylesheet" href="assets/css/fontawesome.css">
							<link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
							<link rel="stylesheet" href="assets/css/owl.css">
							<link rel="stylesheet" href="assets/css/search.css">
							<link rel="stylesheet" href="css/style-select-box.css">
							<link rel="stylesheet" href="css/image2.css">
							
							
							

</head>
<?php

	// cheack login...
	error_reporting("ALL ERRORs");
	include("configuration.php");
	
		if( empty($_SESSION['user-email']) )
		{
			echo "<script> alert('Please login now!');window.location=('login.php');</script>";
		}
		
		
		
		include('header.php');
		
			$temp = $_GET['iid'];
			$qry ="SELECT * FROM products WHERE p_id = '$temp' ";
			$res = mysql_query($qry,$con);
			$row = mysql_fetch_row($res);
	
?>


    <div class="container">
			<br><br>
          <div class="col-md-12">
            
              <h2>Product Details</h2><br>
				<div class="slider">
				  <span id="slide-1"></span>
				  <span id="slide-2"></span>
				  <span id="slide-3"></span>
				  <span id="slide-4"></span>
				  <div class="image-container">
				  <div class="slide">
						<?php echo "<img src='Admin/product_images/".$row[6]."' style='height:550px; width:1100px;'>"; ?>
				</div>
				<div class="slide">
					<?php echo "<img src='Admin/product_images/".$row[7]."' style='height:550px; width:1100px;'>"; ?>
				</div>
				<div class="slide">
					<?php echo "<img src='Admin/product_images/".$row[8]."' style='height:550px; width:1100px;'>"; ?>
				</div>
				<div class="slide">
					<?php echo "<img src='Admin/product_images/".$row[9]."' style='height:550px; width:1100px;'>"; ?>
				</div>
				  </div>
				  <div class="buttons">
					<a href="#slide-1"></a>
					<a href="#slide-2"></a>
					<a href="#slide-3"></a>
					<a href="#slide-4"></a>
				  </div>
				</div><br>
				<a class="nave-link" href="your_ads.php">&laquo; GO BACK</a>
				 
            </div><br><br>
        </div>

          
<?php
	include('footer.php');

?>
