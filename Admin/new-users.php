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
  <title>OLX2.O - NEW USERS</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

   <link href="assets/css/fontawesome.css" type="text/css" rel="stylesheet">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>
<!--
<script>
	function getVal(id)
	{
		//alert(val);
		$.ajax({
			type:"POST",
			url:"msg-read.php",
			data:{ cat_vtid: id }, // {} = object kevay, { key:value, key1:value1,key2:val2 }
			
			//success: function(data){
			//	$("#subcategory-list").html(data);
			//}
		});
	}
	function refreshPage()
	{
		location.new-users.php;
	}	
	<td align="center"> <button value="submit" id="<php echo $row["uid"]; ?>" onClick="getVal(this.id); refreshPage();">New User</button> </td>
</script> -->

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
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Complaints</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            User list</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>User Name</th>
                    <th>User E-mail ID</th>
                    <th>Mobile No</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
    <?php
		include("configuration.php");

		$result=mysql_query("select * from users");
	    while($row = mysql_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row["username"];
			echo "<td>".$row["email"];
			echo "<td>".$row["mobile"];
			if($row["status"]=="old")
			{
				echo "<td align='center'><a style='text-decoration:none;' href='user_delete.php?sluid=".$row["uid"]."'><input type='submit' value='Old User' disabled='true'/></a> | <a style='text-decoration:none;' href='user_delete.php?deleteuid=".$row["uid"]."'><button class='fa fa-trash'></button></a>";
				
			}
			else if($row["status"]=="new")
			{
				echo "<td align='center'><a style='text-decoration:none;' href='user_delete.php?sluid=".$row["uid"]."'><input type='submit' value='New User' /></a>";
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
      </div><!-- /.container-fluid -->
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