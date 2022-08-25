<?php
 session_start();
 error_reporting("ALL ERRORs");
 if(!isset($_SESSION['email_id']))
 {
   echo "<script>window.location=('login.php');</script>";
   exit();
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>OLX 2.0</title>
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
	<?php include("menu.php"); ?>
    <div id="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Update Category</li>
        </ol>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header"><i class="fas fa-table"> Update Category</i></div>
          <div class="card-body">
            <div class="table-responsive">
              <?php
				include ("configuration.php");
				STATIC $check= 0;
			  $check=$_GET["updat"];
        
				$result=mysql_query("select *from catagory where c_id = '".$check."' ");
				$row = mysql_fetch_row($result);
			  ?>
<form action="category-update.php" method="POST" enctype="multipart/form-data">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"align="center">
<tr height="30" border="5px">
<th>CATEGORY ID</th>
<td>
	<label   class="form-control" style="width: 350px;" ><?php if(isset($row)){echo $row[0]; }?></label>
</td>
</tr>
<tr>
<th>CATEGORY NAME</th>
<td>
	<input type="text" name="txt_tname" value="<?php echo $row[1]; ?>" class="form-control" style="width: 350px;" required="true"/>
  <input type="hidden" name="id" value="<?php echo $row[0];?>"/>
</td>
</tr>

<tr>
<th>UPDATE -|- CANCEL</th>
<td>
	<input type="submit" name="btn_update" value="UPDATE" /> -|- <input type="submit" name="btn_cancel" value="CANCEL" />
</td>
</tr>
</table>
</form>
<?php

	if(isset($_POST["btn_update"]))
	{
		
    
    $tnameupd = $_POST["txt_tname"];
		
		  $pid = $_POST["id"];
			date_default_timezone_set('Asia/Kolkata');
					$date=date('M/d/Y h:i:s');
						$qry="update catagory set c_name='$tnameupd',updationtime='$date'  where c_id = '".$pid."' ";
						$result=mysql_query($qry,$con);

						if($result)
						{

							echo "<script>window.location=('category.php');</script>";
						}
						else
						{
							echo "<script>alert('Record not Update!');</script>";
						}
			
		
	}	
	if(isset($_POST["btn_cancel"]))
	{
		echo "<script>window.location=('category.php');</script>";
	}
?>
            </div>
          </div>
        </div>
      </div>
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