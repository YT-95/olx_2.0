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
  </head>
  <body>
		
  	<?php if(empty($_SESSION["user-email"]))
		{
			echo "<script >alert('Please login first !'); window.location=('login.php');</script>";
		}
 
        include('header.php');
      echo "  <br><br><br><br>";
        
//show favotite products for current user-->
$uemail = $_SESSION["user-email"];
$qry ="select *from users where email='$uemail'";
$res = mysql_query($qry);
$row3 = mysql_fetch_row($res);
$uid = $row3[0];
//echo $uemail;

$qry2 ="select *from favorite where u_id= '$uid'";
$res2 = mysql_query($qry2);

$row4 = mysql_num_rows($res2);
if(empty($row4))
{ ?>
 <h2 class="" style="text-align: center; color: red; margin-top: 10%;margin-bottom:10%;"> <i><b> - - - - - - -  Oops your favorite list is empty - - - - -</b></i> </h2>
  <?php

}
else
{
    //add p_id in array
    ?>
          <div class="container">  
            <div class="row">
              <div class="col-md-12">
              </div>
              <?php while($row2 = mysql_fetch_row($res2))
    {
    			$qry3= "select *from products where p_id= '$row2[2]'";
    			$res3 = mysql_query($qry3);
    			$row = mysql_fetch_row($res3);
    			//show product -- -- -- ---
    			?>
    				<div class="col-md-3">
    				<div class="product-item">
    				  <a href="product_detail.php?sid=<?php echo $row[0];?>" class="justify-content-center "><?php echo
    				   "<img src='Admin/product_images/".$row[6]."'style='height:300px; width:250px;'>" ?> </a> <!-- image -->
    				  <div class="down-content"><!-- image colmmn 1-->
    					<a href="product_detail.php?sid=<?php echo $row[0];?>"><h4><?php echo "<small>".$row[2]."</small>";echo "<br><strong>".$row[3]."</strong>"; ?></h4></a><!-- product brand name -->
    					<h6 class="fa fa-inr"><i><b><?php echo " ".$row[5]."/-";?></b></i></h6><!-- price-->
    					<p class=""><?php //echo $row[4]; ?></h4></p><br><!-- product description -->
    					
    					<!-- fetch place to user -->
    					<?php $res3= mysql_query("select * from users where uid=$row[12]",$con); 
    					$row2=mysql_fetch_row($res3);?>
    					<span class="fa fa-map-marker display-4" > <strong><?php echo $row2[3].", ".$row2[4]; ?></strong><!-- place-->
    			        </span>
    				  </div>
              <!-- remove to favorite list-->
              <form action="favorite_remove.php?frid=<?php echo $row[0]; ?>" method="post">
              <input type="submit" value="Remove" name="Remove" class="btn btn-primary btn-block"/>
            </form>
    				</div>
    				</div>
    				<?php
    			} }
    			?>
    		 
            </div>
          </div>
        </div>

        <?php

        include('footer.php');

        ?>
  