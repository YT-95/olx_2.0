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
  <title> Manage Product</title>
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
          <li class="breadcrumb-item active">Manage Product</li>
        </ol>
        <!-- Page Content -->
        <!-- DataTables Example -->
        <div class="card mb-3">
       <div class="card-header"><i class="fas fa-table"> Product's List.</i></div>
          <div class="card-body">
            <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>P ID</th>
                    <th><small><b>CATA GORY</b></small></th>
                    <th>NAME</th>
                    <th>TITLE/ MODEL </th>
                    <th>PRICE</th>
                    <th>IMAGE</th>
                    <th>IMAGE</th>
                    <th>IMAGE</th>
					<th>IMAGE</th>
					<th>TIME</th>
					<th><p class="fa fa-eye"></th>
                    <th><p  class="fa fa-trash"></p></th>
                  </tr>
                </thead>
                <tbody>
<?php
  include("configuration.php");
  $result=mysql_query("select * from products");
  if(mysql_num_rows($result))
  {
    while($row = mysql_fetch_array($result))
    {
      echo "<tr><td>".$row["p_id"];
      echo "<td>".$row["mc_id"];
      echo "<td>".$row["p_b_name"];
      echo "<td>".$row["p_title"];
      echo "<td>".$row["p_price"];
      echo "<td><img src='product_images/".$row['p_image1']."' style='height:50px; width:80px;' >";
      echo "<td><img src='product_images/".$row['p_image2']."' style='height:50px; width:80px;' >";
      echo "<td><img src='product_images/".$row['p_image3']."' style='height:50px; width:80px;' >";
      echo "<td><img src='product_images/".$row['p_image4']."' style='height:50px; width:80px;' >";
      echo "<td>".$row["p_creationtime"];
      echo "<td><a href='product-update.php?updat=".$row["p_id"]."'><button class='fa fa-eye'></button></a>";
      echo "<td><a href='product-add-qry.php?del=".$row["p_id"]."'><button class='fa fa-trash'></button></a>";
      echo "</tr>";
    }
  }
?>
                </tbody>
              </table>
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
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>
  <script src="js/demo/datatables-demo.js"></script>
</body>
</html>