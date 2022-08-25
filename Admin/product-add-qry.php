<?php
	error_reporting("ALL ERRORs");
	include("configuration.php");
/***
Code for Insert products.
***/
if(isset($_POST["btn_product"]))
{
	//$check=$_POST["txt_name"];
	/*$cdmid = $_POST["subcategory"];
	$vtid = $_POST["category"];
	$sel=mysql_query("select CDM_ID,VT_ID from productmaster where CDM_ID='".$cdmid."' and VT_ID='".$vtid."'");
	$row=mysql_fetch_array($sel);
	
	if($row["CDM_ID"]!=$cdmid && $row["VT_ID"]!=$vtid)
	{*/
		$name = $_POST["txt_name"];
		$size = $_POST["txt_size"];
		$price = $_POST["txt_price"];
		$image = $_FILES['image']['name'];//image
		$target = "images/".basename($image);//image
		$quantity = $_POST["txt_quantity"];
		$detail = $_POST["txt_detail"];
		$features = $_POST["txt_feature"];
		$cdmid = $_POST["subcategory"];
		$vtid = $_POST["category"];
		
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target))//image
		{ 	
			//echo "Image uploaded successfully";
			date_default_timezone_set('Asia/Kolkata');
			$date=date('M/d/Y h:i:s');
			
			$qry="INSERT INTO productmaster(PM_name,PM_size,PM_price,PM_image,PM_quantity,PM_detail,PM_features,creationtime,CDM_ID,VT_ID)VALUES('$name','$size','$price','$image','$quantity','$detail','$features','$date','$cdmid','$vtid')";
			
			$result=mysql_query($qry,$con);
			
			if($result != 0)
			{
				echo "<script>window.location=('product-manage.php');</script>";
			}
			else
			{
				echo "<script>alert('Product not insert');
				window.location=('product-manage.php');</script>";
			}
		}
		else
		{ 	
			echo "<script>alert('File not upload!');
				window.location=('product-manage.php');</script>";
		}	
	/*}
	else
	{
		echo "<script>alert('Already Entered');window.location=('product-manage.php');</script>";
	}*/
}

/***
Code for Delete products.
***/
	if(isset($_GET['del']))
	{
		if(isset($_GET['del']))
		{
			$id=$_GET['del'];
			$result=mysql_query("select * from products where p_id= '$id'");
			if($row=mysql_fetch_array($result))
			{
				$temp=$row['p_b_name'];
				//$path="product_images/".$temp;//$tmp=$row['image'];//.$tmp;
				if($temp == null)
				{
					echo "<script>alert('File not Delete');window.location=('product-manage.php');</script>";
				}
				else
				{
					//echo "File deleted";
					$result=mysql_query("select * from products where p_id= '$id'");

					$row=mysql_fetch_row($result);
					unlink("product_images/$row[6]");
					unlink("product_images/$row[7]");
					unlink("product_images/$row[8]");
					unlink("product_images/$row[9]");
					$qry="DELETE FROM products WHERE p_id='".$id."'";
					
					
					$result=mysql_query($qry,$con);
					if($result)
					{
						echo "<script>window.location=('product-manage.php');</script>";
					}
				}
			}
		}
		else
		{
			echo "<script>alert('Product not delete!');window.location=('product-manage.php');</script>";
		}
	}
?>