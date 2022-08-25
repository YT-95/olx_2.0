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

										<!--ajax and php -->
							

							
	</head>
							


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
		echo "<br><br><br><br><br>";
		?>
		
		
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a Message</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form name="contact-form" action="contactus_qry.php" method="post" >
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="Fname" type="text" class="form-control" id="name" placeholder="Full Name" required="true">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail Address" required="true">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="mob" type="text" class="form-control" id="subject" placeholder="mobile" pattern="[0-9]{10}" maxlength="10" .required="true">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" 
                      required="true"></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" name="sendmsg" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <img src="images/Client-Picture.jpg" class="img-fluid" alt="">

            <h5 class="text-center" style="margin-top: 15px;">OLX 2.0</h5>
          </div>
        </div>
      </div>
    </div>

	<?php
        include('footer.php');

        ?>
