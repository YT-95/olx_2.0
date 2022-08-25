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

										<!--ajax and php -->
							
				
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
		echo "<br><br><br><br>";
		include('configuration.php');
			
			$temp=($_SESSION['user-email']);
			$result2= mysql_query("select * from users where email='$temp'",$con); 
		$row2 = mysql_fetch_row($result2);
					
			
	?>
		
	   <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="contact-form">
              <form name="contact-form" action="update_user_qry.php" method="post" >
                <div class="row">
				  <div class="col-lg-12 col-md-6 col-sm-6">
                    <h3>Fill - Your - Update - Details</h3><hr><br>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12">
                    Full Name:
                     <input  name="name" type="text" class="form-control" value="<?php echo $row2[1];?>" required="true">
                    
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                    <fieldset>E-Mail :
                      <input name="email" type="text" class="form-control" value="<?php echo $row2[5];?>" required="true">
                    </fieldset>
                  </div>
                 
				  <div class="col-lg-6 col-md-6 col-sm-6">
                    <fieldset>Mobile :
					<input name="mobile" type="text" class="form-control" value="<?php echo $row2[2];?>" pattern="[0-9]{10}" maxlength="10" .required="true">
                    </fieldset>
                  </div>
				  
				  <div class="col-lg-6 col-md-6 col-sm-6">
                    <fieldset>State :
					<input name="state" type="text" class="form-control" value="<?php echo $row2[3];?>" required="true">
                    </fieldset>
                  </div>
				  
				  <div class="col-lg-6 col-md-6 col-sm-6">
                    <fieldset>City :
					<input name="city" type="text" class="form-control" value="<?php echo $row2[4];?>" required="true">
                    </fieldset>
                  </div>
				  <div class="col-lg-6 col-md-6 col-sm-6">
                    <fieldset>Old password :
					<input name="opass" type="password" class="form-control" placeholder="old password" required="true">
                    </fieldset>
                  </div>
				  <div class="col-lg-6 col-md-6 col-sm-6">
				  </div>
				  <div class="col-lg-6 col-md-6 col-sm-6">
                    <fieldset>New password :
					<input name="np" type="password" class="form-control" placeholder="new password" >
                    </fieldset>
                  </div>
				  <div class="col-lg-6 col-md-6 col-sm-6">
                    <fieldset>RE-Enter new password :
					<input name="cp" type="password" class="form-control" placeholder="new pass retype" >
                    </fieldset>
                  </div>
				  
				   <div class="col-lg-6 col-md-6 col-sm-6">
                    
                  </div>
	
                 <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
					   <button type="reset" id="form-submit"  class="button">RESET NOW</button>
					   <button type="submit" id="form-submit" name="update" class="filled-button">UPDATE NOW</button>
                    </fieldset>
                  </div>
				  
				 
                  </div>
                </div>
              </form>
            </div>
          </div>
     

	<?php
        include('footer.php');

        ?>
