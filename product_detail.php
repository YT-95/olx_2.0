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




            <script>
        //pass message for product user
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
              xmlhttp.open("GET","product_msg_u2u.php?uiq="+str,true);
              xmlhttp.send();
              }
            }
            
          
        </script>

</head>
<?php

	// cheack login...
	error_reporting("ALL ERRORs");
	include("configuration.php");
	
		if( empty($_SESSION['user-email']) )
		{
			echo "<script> alert('Please login now!'); window.location=('login.php');</script>";
		}
		
?>


  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <!--<div></div>
            <div></div>-->
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->

    <?php

        include('header.php');
		
			$select_id = $_GET['sid'];
			
			$sql="SELECT * FROM products WHERE p_id = '$select_id'";
			$result = mysql_query($sql,$con);
			$row3 = mysql_fetch_row($result);
				//fetch user details
			$result2= mysql_query("select * from users where uid='$row3[12]'",$con); 
			$row2 = mysql_fetch_row($result2);
			
			
			
				
	?>
			<br><br><br><br>
			<div   class="float-center"   >
				<div style="margin-right: 10%;margin-left: 80%;">
			<a  class="btn btn-primary btn-block"  href="favorite_qry.php?fid=<?php echo $select_id; ?>">Add - Favorite</a>
		</div>
	</div>


      <div class="container">
			
		
          <div class="col-md-12">
      
				<div class="slider">
				  <span id="slide-1"></span>
				  <span id="slide-2"></span>
				  <span id="slide-3"></span>
				  <span id="slide-4"></span>
				  <div class="image-container">
				  <div class="slide">
						<a href="product_detail_fullimage.php?iid=<?php echo $row3[0];?>"><?php echo "<img src='Admin/product_images/".$row3[6]."' style='height:300px; width:500px;'>"; ?></a>
				</div>
				<div class="slide">
					<a href="product_detail_fullimage.php?iid=<?php echo $row3[0];?>"><?php echo "<img src='Admin/product_images/".$row3[7]."' style='height:300px; width:500px;'>"; ?></a>
				</div>
				<div class="slide">
					<a href="product_detail_fullimage.php?iid=<?php echo $row3[0];?>"><?php echo "<img src='Admin/product_images/".$row3[8]."' style='height:300px; width:500px;'>"; ?></a>
				</div>
				<div class="slide">
					<a href="product_detail_fullimage.php?iid=<?php echo $row3[0];?>"><?php echo "<img src='Admin/product_images/".$row3[9]."' style='height:300px; width:500px;'>"; ?></a>
				</div>
				  </div>
				  <div class="buttons">
					<a href="#slide-1"></a>
					<a href="#slide-2"></a>
					<a href="#slide-3"></a>
					<a href="#slide-4"></a>
				  </div>
				</div>
				<a href="index.php">&laquo; GO BACK</a>
				<?php

				/*

            		$referer = filter_var($_SERVER['HTTP_REFERE'],FILTER_VALDATE_URL);
            		if(!empty($referer))
            		{
            			echo '<p><a href="'.$referer.'"title="return to the previous page">&laquo; GO BACK</a></p>';
            		}
            		else
            		{
            			echo '<p><a href="javascript:history.go(-1)"title="return to the previous page">&laquo;GO  BACK</a></p>';
            		}*/
            ?>
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
					<td><?php echo $row3[11]; ?></td>
				  </tr>
				</tbody>
				</thead>
			  </table>
				</div></div></div>
			</div>
            </div>
          </div>
  </div>

<form method="POST" action="product_msg_u2u.php?pid=<?php echo $row3[0];?>" >	
<div class="send-message" style="margin-top: -40px; ">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="contact-form">
				
            		<div class="col-lg-6 float-left" >
            			<!-- Button trigger modal -->
					<button type="button"  style="margin-top: 15%; width: 70%;"class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
					 Tips For Safe Deal
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h3 class="modal-title " id="exampleModalLongTitle"><b>Tips For Safe Deal</b></h3>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	<ul><big>
					        <li class="fa fa-flag"> <b> Do not enter UPI pin while receiving money</b></li><br>
					        <li class="fa fa-flag"> <b> Never give money or product in advance</b></li><br>
					        <li class="fa fa-hand-o-right"> <b> Do not send your credit card number via email</b></li><br>
					        <li class="fa fa-bell"> <b>  Report suspicious users to OLX 2.0</b></li>
					    </big>
					</ul>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
					      </div>
					    </div>
					  </div>
					</div>
            			
            		<!-- Button trigger modal end -->
            		</div>
				<div class="col-lg-6 float-right" >
					<fieldset><h5></h5>
                      <textarea name="msg" rows="6" class="form-control " id="message" 
                      placeholder=" send-message to product owner" required="true"></textarea>
                    </fieldset>	
                 
                 <div class="col-lg-12 col-md-12 col-sm-12" >
                    <fieldset>

					   <button type="submit" id="form-submit" name="submit" style="width: 50%" 
					    class="filled-button" onchange="showUser(this.value)">send</button>
                    </fieldset>
                  </div>
           
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

