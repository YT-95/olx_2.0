
<?php
 session_start();
 
 if(!isset($_SESSION['email_id']))
 {
   echo "<script>window.location=('login.php');</script>";
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>olx_2.0</title>

    


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
        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fa fa-comments"></i>
                </div>
                <div class="mr-5"><?php
					include("configuration.php");
					$msg="unread";
					$result=mysql_query("select * from contactus where message='".$msg."'");
					$num2=mysql_num_rows($result);
					if($num2!=0){
						echo $num2." New Messages!";
					}else{  echo "0"; }
				?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="comments.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">
				<?php
					$msg="new";
					$result=mysql_query("select * from users where status='".$msg."'");
					$num1=mysql_num_rows($result);
					if($num1!=0){
						echo $num1." New Users!";
					}else{  echo "0"; }
				?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="new-users.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div> <!-- /.container-fluid -->
    </div> <!-- /.content-wrapper -->
  </div> <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  
  <?php include("logoutmodal.php"); ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
</body>
</html>