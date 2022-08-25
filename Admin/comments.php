<?php
 session_start();
 
 if(!isset($_SESSION['email_id']))
 {
   echo "<script>window.location=('login.php');</script>";
   exit();
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> OLX 2.O - COMMENTS</title>

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
          <li class="breadcrumb-item active">Complaints</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Complaints list</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>User Name</th>
                    <th>User E-mail ID</th>
                    <th>Mobile No</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
    <?php
		include("configuration.php");

		$result=mysql_query("select * from contactus");
	    while($row = mysql_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row["name"];
			echo "<td>".$row["email"];
			echo "<td>".$row["mobile"];
			echo "<td>".$row["description"];
			if($row["message"]=="read")
			{
				echo "<td align='center'><a style='text-decoration:none;' href='msg-read.php?slid=".$row["cusid"]."'><input type='submit' value='Readed' disabled='true'/></a> | <a style='text-decoration:none;' href='msg-read.php?deletemid=".$row["cusid"]."'><button class='fa fa-trash'></button></a>";
			}
			else if($row["message"]=="unread")
			{
				echo "<td align='center'><a style='text-decoration:none;' href='msg-read.php?slid=".$row["cusid"]."'><input type='submit' value='New Messages' /></a>";
			}
			echo "<tr>";
		}
	?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
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
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
</body>
</html>