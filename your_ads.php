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
							<link rel="stylesheet" href="css/image.css">




</head>
<?php

	// cheack login...
	error_reporting("ALL ERRORs");
	include("configuration.php");
	
		if( empty($_SESSION['user-email']) )
		{
			echo "<script> alert('Please login now!');window.location=('login.php');</script>";
		}
		
?>


  <body>

    
    <?php

        include('header.php');
		
				//fetch user details
        	$tmp = $_SESSION['user-email'];
			$result2= mysql_query("select * from users where email= '$tmp' "); 
			$row2 = mysql_fetch_row($result2);
			

			$ptmp_id = $row2[0];
			
			$sql="SELECT * FROM products WHERE u_id = '$ptmp_id'";
			$result = mysql_query($sql,$con);
			$row3 = mysql_fetch_row($result);
			
			
			
				
	?>
		

      <div class="container">
			<br><br><br><br>
          <div class="col-md-12">
          	<h3><b><i>--Your  - Ads --</i></b></h3>
      
				<div class="slider">
				  <span id="slide-1"></span>
				  <span id="slide-2"></span>
				  <span id="slide-3"></span>
				  <span id="slide-4"></span>
				  <div class="image-container">
				  <div class="slide">
						<a href="your_ads_fullimage.php?iid=<?php echo $row3[0];?>"><?php echo "<img src='Admin/product_images/".$row3[6]."' style='height:300px; width:500px;'>"; ?></a>
				</div>
				<div class="slide">
					<a href="your_ads_fullimage.php?iid=<?php echo $row3[0];?>"><?php echo "<img src='Admin/product_images/".$row3[7]."' style='height:300px; width:500px;'>"; ?></a>
				</div>
				<div class="slide">
					<a href="your_ads_fullimage.php?iid=<?php echo $row3[0];?>"><?php echo "<img src='Admin/product_images/".$row3[8]."' style='height:300px; width:500px;'>"; ?></a>
				</div>
				<div class="slide">
					<a href="your_ads_fullimage.php?iid=<?php echo $row3[0];?>"><?php echo "<img src='Admin/product_images/".$row3[9]."' style='height:300px; width:500px;'>"; ?></a>
				</div>
				  </div>
				  <div class="buttons">
					<a href="#slide-1"></a>
					<a href="#slide-2"></a>
					<a href="#slide-3"></a>
					<a href="#slide-4"></a>
				  </div>
				</div>
				<!--<?php 
            		$referer = filter_var($_SERVER['HTTP_REFERE'],FILTER_VALDATE_URL);
            		if(!empty($referer))
            		{
            			echo '<p><a href="'.$referer.'"title="return to the previous page">&laquo; GO BACK</a></p>';
            		}
            		else
            		{
            			echo '<p><a href="javascript:history.go(-1)"title="return to the previous page">&laquo;GO  BACK</a></p>';
            		}
            ?>-->
            </div><br><br>
           
            
            <div class="float-right col-md-6">
			<!-- user details -->
			<table class="table table-striped" style="border: 1px solid red;">
				<thead>
				<tbody>
				  <tr>
				  	<th>NAME :</th>
					<td><?php echo $row2[1]; ?></td>
				  </tr>
				  <tr>
					<th>MOBILE NO. :</th>
					<td><?php echo $row2[2]; ?></td>
				  </tr>
				  <tr>
					<th>STATE :</th>
					<td><?php echo $row2[3]; ?></td>
				  </tr>
				  <tr>
					<th>CITY :</th>
					<td><?php echo $row2[4]; ?></td>
				  </tr>
				  <tr>
					<th>EMAIL :</th>
					<td><?php echo $row2[5]; ?></td>
				  </tr>

				</tbody>
				</thead>
			  </table>
				
				</div>
			</div>
		</div>
	    </div>
          
          <div class="col-md-6">
            <!-- product details -->
			<div class="container">
				<table class="table table-striped " style="border: 1px solid black;">
				<thead>
				<tbody>
				  <tr>
					<th>COMPANY :</th>
					<td><?php echo $row3[2]; ?></td>
				  </tr>
				  <tr>
					<th>MODE/TITLE:</th>
					<td><?php echo $row3[3]; ?></td>
				  </tr>
				  <tr>
					<th>PRICE :</th>
					<td><?php echo $row3[5]; ?></td>
				  </tr>
				  <tr>
					<th>DETAILS :</th>
					<td><?php echo $row3[4]; ?></td>
				  </tr>
				  <tr>
					<th>ADD TIME :</th>
					<td><?php echo $row3[10]; ?></td>
				  </tr>
				  <tr>
					<th>REASON :</th>
					<td><?php echo $row3[12]; ?></td>
				  </tr>
				</tbody>
				</thead>
			  </table>
				</div></div></div>
			</div>
            </div>
          </div>
  </div>

<form method="POST" action="delete_your_ads.php?pid=<?php echo $row3[0];?>" >	
<div class="send-message" style="margin-top: -40px; ">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="contact-form">
				<div class="col-lg-6 float-right" >
					
                 <div class="col-lg-12 col-md-12 col-sm-12" >
                    <fieldset>
                    	<!-- Button trigger modal -->

                    	 
				<button class="btn btn-primary"><a class="btn btn-primary" href="logout.php" data-target="#logoutModal"
				 data-toggle="modal">Delete your Ad</a></button>
		
					

				  <!-- Logout Modal-->
				  <div class="modal fade" id="logoutModal" tabindex="-1">
				    <div class="modal-dialog">
				      <div class="modal-content">
				        <div class="modal-header" >
				          <h5 class="modal-title" id="exampleModalLabel">Are You sure Delete ad?</h5>
				        </div>
				        <div class="modal-footer">
				          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				          <a class="btn btn-primary" href="delete_your_ads.php?pid=<?php echo $row3[0]; ?>">Delete</a>
				        </div>
				      </div>
				    </div>
				  </div>
					       

					   
                    </fieldset>
                  </div>
				 <div  id="txtHint">
				</div>

                  </div>
                </div>
              
            </div>
          </div>
      </div>
  </div>
</form>


	<?php
					
        include('footer.php');

        ?>

