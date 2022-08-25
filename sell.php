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
							
				<script>
				//catagory
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
							xmlhttp.open("GET","catagory_qry.php?q="+str,true);
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
		echo "<br><br><br><br><br>";
		include('configuration.php');
      	//select categorys
			
			$result= mysql_query("select * from catagory",$con); 
			$temp=($_SESSION['user-email']);
			$result2= mysql_query("select * from users where email='$temp'",$con); 
			
					$row2 = mysql_fetch_row($result2);
				
	?>
		
	<div class="container">
	<form>
		<div class="form-group">
		  <label for="sel1">   Category</label>
		  <select class="form-control"  name="users"   onchange="showUser(this.value)">
		  <option value="" required="true">---Select - Category---</option>
		    <?php
			while($row = mysql_fetch_row($result)) {
			?>
				<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
			<?php
			}
			?>
			
		  </select>
		</div>
		
	</form>
<div class="col-lg-12">

<form method="POST" action="sell_qry.php" enctype="multipart/form-data"><br><br>
 

		<input type="file" name="file[]" multiple><br>
		<br>select images <small>(select  <strong> 4 </strong>images(only 4) ,first image is show in home page)</small><hr size="5px"> 	
  
  
<!--<div id="uploadimage"></div>-->
</div>
<div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Fill Product Details</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
                <div class="row">
				  <div class="col-lg-12 col-md-6 col-sm-6">
                    <fieldset>YOUR SELECTED CATAGORY:
                      <label  class="form-control" id="txtHint">first select catagory </label>
                    </fieldset>
				</div><br>
				<div class="col-lg-6 col-md-12 col-sm-12">
                    <fieldset>Brand/Compny Name:
                      <input name="brand" type="text" class="form-control" id="subject" placeholder="Brand/Compny" required="true">
                    </fieldset>
				</div><br>
				<div class="col-lg-6 ">
                    <fieldset>Title/Model : 
                      <input name="title" type="text" class="form-control" id="subject" placeholder="Title/Model " required="true">
                    </fieldset>
				</div><br>
				<div class="col-lg-6 ">
					<fieldset>Details :
                      <textarea name="description" rows="6" class="form-control" id="message" placeholder="Include  product details" required="true"></textarea>
                    </fieldset>	
                 </div><br>
				 <div class="col-lg-6 col-md-6 col-sm-6">
                    <fieldset>Price :
                      <input name="price" type="text" class="form-control" id="email" placeholder="Price" required="true">
                    </fieldset>
                  </div>
				 <div class="col-lg-6 col-md-6 col-sm-6">
                    <fieldset>Why you sell It(reason) :
                      <input name="why" type="text" class="form-control" id="email" placeholder="Why you sell It" required="true">
                    </fieldset>
                  </div>
				  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
					   <button type="reset" id="form-submit"  class="button">RESET </button>
					   </fieldset>
				</div>
				
				<div class="col-lg-12" > <p><br> </p>
				</div>
				  <div class="section-heading col-lg-12 ">
				<h3> Your - Details</h3>
				</div>
				
				
				<div class="col-lg-12 col-md-12 col-sm-12">
				<fieldset>
                     <label   class="form-control" id="name" value="hii">NAME :<?php echo $row2[1]; ?></label></fieldset>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                      <label   class="form-control" id="name" >E-mail :<?php echo $_SESSION['user-email']; ?></label>
                  </div>
                 
				  <div class="col-lg-6 col-md-6 col-sm-6">
                   <label   class="form-control" id="name" >Mobile :<?php echo $row2[2]; ?></label>
                  </div>
				  <div class="col-lg-6 col-md-6 col-sm-6">
					<label   class="form-control" id="name" >State :<?php echo $row2[3]; ?> </label>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
					<label   class="form-control" id="name" >city :<?php echo $row2[4]; ?></label>
					</div>
					
					
					</fieldset>
					</fieldset>
                 <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
					   <button class="button" ><a href='update_user.php'>update user detail</a></button>
					   <button type="submit" id="form-submit" name="submit" class="filled-button">SELL NOW</button>
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
