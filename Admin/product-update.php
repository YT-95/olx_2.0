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
  <title>SB Admin - Category</title>

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
          <li class="breadcrumb-item">Category</li>
        </ol>
        <!-- Page Content -->
      </div>
      <!-- /.container-fluid -->
	  
<!-- Record     Update    Start    here   -->
<?php
	include ("configuration.php");
	
	$upid = $_GET["updat"];

	$res = mysql_query("select * from products where p_id='".$upid."'");
	$row = mysql_fetch_array($res);

?>
<form action="product-update.php" method="POST" enctype="multipart/form-data" >
<table class="table table-bordered" id="dataTable" cellspacing="0">
<tr>
<th>P ID</th>
<td>
	<label><b><?php if(isset($row)){echo $row['p_id'];}?></b></label>
</td>
</tr>
<tr><?php
	$res2=mysql_query("select *from catagory where c_id=' ".$row['mc_id']."'");
	$row2=mysql_fetch_row($res2);
		?>
<th>CATAGORY NAME</th>
<td>
	<label><b><?php if(isset($row2)){echo $row2[1];}?></b></label><!--<input type="text" name="txt_pmid" value="" class="form-control" style="width: 350px;"/>-->
</td>
</tr>
<tr>
<th>PRODUCT NAME</th>
<td>
	<b><label><?php if(isset($row)){echo $row['p_b_name'];}?></label> </b><!--<type="text" name="txt_name" value="" 
	class="form-control" style="width: 350px;"/>-->
</td>
</tr>
<tr>
<th>PRODUCT TITLE/MODEL</th>
<td>
	<label><b><?php if(isset($row)){echo $row['p_title'];}?>
</td>
</tr>
<tr>
<th>PRODUCT PRICE</th>
<td>
	<label><b><?php if(isset($row)){echo $row['p_price'];}?></b></label>
</td>
</tr>
<tr>
<th>PRODUCT IMAGE</th>
<td><?php
echo"<img src='product_images/".$row['p_image1']."' style='height:150px;width:150px;'>";
echo"<img src='product_images/".$row['p_image2']."' style='height:150px;width:150px;margin-left:5%;'>";
 echo"<img src='product_images/".$row['p_image3']."' style='height:150px;width:150px;margin-left:5%;'>";
  echo"<img src='product_images/".$row['p_image4']."' style='height:150px;width:150px;margin-left:5%;'>";
  ?>
	<!--<input type="file" name="image" />-->
</td>
</tr>

<tr>
<th>PRODUCT DETAIL</th>
<td>
	<label><b><?php if(isset($row)){echo $row['p_description'];}?></b></label>
</td>
</tr>

<tr>
<th> REASON</th>
<td>
	<label><b><?php if(isset($row)){echo $row['p_why_selling'];}?></b></label>
</td>
</tr>

<tr>
<th>USER ID</th>
<td>
	<label><b><?php if(isset($row)){echo $row['u_id'];}?></b></label>
</td>
</tr>
<tr>
<th>ADD TIME</th>
<td>
	<label><b><?php if(isset($row)){echo $row['p_creationtime'];}?></b></label>
</td>
</tr>
<tr>
<th ><!--UPDATE |--> BACK</th>
<td>
	<!--<input type="submit" name="btn-update2" value="UPDATE"/>--|--<input type="submit" name="btn-cancel2" value="CANCEL" />-->
	<?php 
            		$referer = filter_var($_SERVER['HTTP_REFERE'],FILTER_VALDATE_URL);
            		if(!empty($referer))
            		{
            			echo '<b><p><a style="color:#005;" href="'.$referer.'"title="return to the previous page"> GO BACK</a></p></b>';
            		}
            		else
            		{
            			echo '<b><p><a style="color:#005;" href="javascript:history.go(-1)"title="return to the previous page">GO  BACK</a></p></b>';
            		}
            ?>	
</td>
</tr>
</table>
</form>
<?php
	if(isset($_REQUEST["btn-cancel2"]))
	{
		echo "<script>window.location=('product-manage.php');</script>";
	}
	/*if(isset($_REQUEST["btn-update2"]))
	{
		$pmid=$_POST["txt_pmid"];
		$name=$_POST["txt_name"];
		$size=$_POST["txt_size"];
		$price=$_POST["txt_price"];
		$image = $_FILES['image']['name'];//image
		$target = "images/".basename($image);//image
		$quantity=$_POST["txt_quantity"];
		$detail=$_POST["txt_detail"];
		$features=$_POST["txt_features"];
		$cdmid=$_POST["txt_cdmid"];
		$vtid=$_POST["txt_vtid"];
		
		date_default_timezone_set('Asia/Kolkata');
		$date=date('M/d/Y h:i:s');
		
		if($image!=null)
		{
			$result=mysql_query("select * from productmaster where PM_ID='$pmid'");
			if($row=mysql_fetch_array($result))
			{
				$path="images/".$row['PM_image'];//$tmp=$row['image'];//.$tmp;
				if(!@unlink($path))
				{
					echo "<script>alert('File not delete!');window.location=('product-manage.php');</script>";
					break;
				}
				else
				{
					//echo "File delete successfully.";
					if(move_uploaded_file($_FILES['image']['tmp_name'], $target))//image
					{ 	
						//echo "Image uploaded successfully";
						$qry="update productmaster set PM_name='$name',PM_size='$size',PM_price='$price',PM_image='$image',PM_quantity='$quantity',PM_detail='$detail',PM_features='$features',updationtime='$date' where PM_ID='$pmid'";
						$result=mysql_query($qry,$con);
					}
					else
					{ 	
						echo "<script>alert('image not upload!');window.location=('product-manage.php');</script>";
					}
				}
			}
		}
		else if($image==null)
		{
			$qry="update productmaster set PM_name='$name',PM_size='$size',PM_price='$price',PM_quantity='$quantity',PM_detail='$detail',PM_features='$features',updationtime='$date' where PM_ID='$pmid'";
			$result=mysql_query($qry,$con);
		}
		if($result)
		{
			echo "<script>window.location=('product-manage.php');</script>";
		}
		else
		{
			echo "<script>alert('Record not Update!');window.location=('product-manage.php');</script>";
		}
	}*/
	
?>
	  <!-- Record     Update    End    here   -->
	  
	  
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

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>
</body>
</html>