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
  <title>olx 2.0</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>
<script src="jquery-3.4.1.min.js" type="text/javascript" ></script>
<script>
	function getCategory(val)
	{
		//alert(val);
		$.ajax({
			type:"POST",
			url:"getsub-category.php",
			data:{ cat_vtid: val }, // {} = object kevay, { key:value, key1:value1,key2:val2 }
			success: function(data){
				$("#subcategory-list").html(data);
			}
		});
	}
	
	function getsubCategory(val)
	{
		//alert(val);
		$.ajax({
			type:"POST",
			url:"getsub-category.php",
			data:{ pro_vcid: val }, // {} = object kevay, { key:value, key1:value1,key2:val2 }
			success: function(data){
				$("#product-list").html(data);
			}
		});
	}
</script>
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
          <li class="breadcrumb-item">Add Products</li>
        </ol>
        <!-- Area Chart Example-->
       <div class="card mb-3">
          <div class="card-header"><i class="fas fa-table"></i>	Add Products.</div>
          <div class="card-body">
            <div class="table-responsive">
			  <div class="form-group" align="center" >
				<form action="product-add-qry.php" method="POST" enctype="multipart/form-data" >			
					<select name="category" id="category-list" onChange="getCategory(this.value);" class="form-control" style="height: 37px;width: 357px;"  >
						<option selected="" disabled="">Category</option>
						<?php
							include("configuration.php");
							$query ="SELECT * FROM vehicletype";
							$res_vt = mysql_query($query,$con);
							
							while($row=mysql_fetch_array($res_vt)){
							?>
							<option value="<?php echo $row["VT_name"]; ?>"><?php echo $row["VT_name"]; ?></option>
							<?php
							}
						?>
					</select>
					<select name="subcategory" id="subcategory-list" onChange="getsubCategory(this.value);" class="form-control" style="height: 37px;width: 357px;margin-top:2%;" >
						<option selected="" disabled="" value="">Sub Category</option>
					</select>
				<!--	<div>
					<select name="getproduct" id="product-list" class="form-control"  style="height: 37px;width: 357px;margin-top:2%;" >
						<option disabled="" selected="" value="" >Add Product</option>
					</select>
				  </div> -->
				<div class="form-group" >
				  <div>
					<input type="text" name="txt_name" class="form-control" style="margin-top:2%;height: 37px;width: 357px;"  placeholder="Product Name*" required>
				  </div>
				  <div>
					<input type="text" name="txt_size" class="form-control"  placeholder="Product Size*" required="true" style="height: 37px;width: 357px;margin-top:2%; ">
				  </div>
				  <div>
					<input type="text" name="txt_price" class="form-control"  placeholder="Product Price*" required="true" style="height: 37px;width: 357px;margin-top:2%; ">
				  </div>
				  <div> 
					<input type="file" name="image" style="margin-top:2%;" required>
				  </div>
				  <div>
				  <script  type="text/javascript" >
					function mask(textbox, e)
					{
						var charCode = (e.which) ? e.which : e.keyCode;
						if(charCode == 46 || charCode > 31&& (charCode < 48 || charCode > 57))
						{
							alert("Only Numbers Allowed");
							return false;
						}
						else
						{
							return true;
						}
					}
				  </script>
					<input type="text" name="txt_quantity" onkeypress="return mask(this,event);" class="form-control"  placeholder="Product Quantity*" required="true" style="height: 37px;width: 357px;margin-top:2%; ">
				  </div>
				  <div>
					<input type="text" name="txt_detail" class="form-control"  placeholder="Product Detail*" required="true" style="height: 37px;width: 357px;margin-top:2%; ">
				  </div>
				  <div>
					<input type="text" name="txt_feature" class="form-control"  placeholder="Product Feature*" required="true" style="height: 37px;width: 357px;margin-top:2%; ">
				  </div>
					<input type="submit" name="btn_product"  class="btn btn-primary btn-block"  value="Add Product" style="height: 37px;width: 357px;margin-top:2%; " >
				</div>
				</form>
			  </div>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>
        <!-- DataTables Example -->
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