<?php
 session_start();
 
 if(!isset($_SESSION['email_id']))
 {
   header('Location:login.php');
   exit();
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ceat Tyre - Category</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

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
          <li class="breadcrumb-item active">Complaints</li>
        </ol>

        <!-- DataTables Example -->
		<div class="card card-login mx-auto mt-5 mb-3">
		 <div class="card-header" align="center" >Add Category</div>
		  <div class="card-body">
			<form action="category-qry.php" method="POST">
			  <div class="form-group">
				<div>
				  <input type="text" id="txt_cat" name="txt_vtname" class="form-control"  placeholder="Vehicle type name" required="true">
				</div>
			  </div>
			 <input type="submit" class="btn btn-primary btn-block"  name="btn_cat"  value="Add Catagory">
			</form>
		  </div>
        </div>
		
		<div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Category List</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Category ID</th>
                    <th>Category NAME</th>
                    <th>CreationTime</th>
                    <th>UpdationTime</th>
					<th>EDIT</th>
                    <th>DELETE</th>
                  </tr>
                </thead>
                
                <tbody>
				<?php 
				$result=mysql_query("select * from vehicletype");
			    while($row = mysql_fetch_array($result))
				{
					echo "<tr><td>".$row["VT_ID"];
					echo "<td>".$row["VT_name"];
					echo "<td>".$row["creationtime"];
					echo "<td>".$row["updationtime"];
					echo "<td><a href='category-update.php?updat=".$row["VT_ID"]."'><button class='fa fa-edit'></button></a>";
					echo "<td><a href='category-qry.php?del=".$row["VT_name"]."'><button class='fa fa-trash'></button></a>";
					echo "</tr>";
				}
				?>
				
                </tbody>
              </table>
            </div>
          </div>
        <!--  <div class="card-footer small text-muted"> -->
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
