<?php
 session_start();
 error_reporting("ALL ERROR");
 if(!isset($_SESSION['email_id']))
 {
   header('Location:login.php');
   exit();
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> Admin - profile</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

   <link href="assets/css/fontawesome.css" type="text/css" rel="stylesheet">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php include("header.php"); ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('menu.php') ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Profile update</li>
        </ol>

        <!-- DataTables Example -->
		<div class="form-group" >
		<?php
			include ('configuration.php');
			$email=$_SESSION["email_id"];
			$result=mysql_query("select * from admin where email_id='".$email."'");
			$row = mysql_fetch_array($result);
		?>
			<form action="profile_qry.php" method="POST" enctype="multipart/form-data" >
			<div class="form-group ml-5">
					
					<?php echo"<img src='images/admin/".$row['image']."' style='height:100px;width:100px;border-radius: 40%;
   font-family: FontAwesome;'>"; ?>
				
					<input type="text" name="txt_name" value="<?php if(isset($row)){echo $row["name"];}?>" style="width:350px;margin-top:2%;" class="form-control" required>
				
					<input type="email" name="txt_email" value="<?php if(isset($row)){echo $row["email_id"];}?>" style="width:350px;margin-top:2%;" class="form-control" required>
					
					<input type="text" name="txt_mob" value="<?php if(isset($row)){echo $row["mobile"];}?>" style="width:350px;margin-top:2%;" class="form-control" required="true" pattern="[0-9]{10}">
					
					<input type="file" name="image" style="margin-top:2%;" />
					
					<input type="password" name="opass" style="width:350px;margin-top:2%;" class="form-control" placeholder="Enter old password"  required="true">
					
					<input type="password" name="npass" style="width:350px;margin-top:2%;" class="form-control" placeholder="Enter new password">
					
					<input type="password" name="rpass" style="width:350px;margin-top:2%;" class="form-control"  placeholder="Re-type new password">
				
					
					<input type="submit" name="btn_update"  class="btn btn-primary btn-block"  value="uPdAtE Profile" style="height: 37px;width: 357px;margin-top:2%; " >
					
					
			</div>
			</form>
		</div>
      </div>
	  
	  
<!-- 
         Profile update code.
-->
 
	  
	  
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  
  <?php include("logoutmodal.php"); ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  

</body>

</html>
