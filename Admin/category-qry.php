<?php
	include('configuration.php');
	error_reporting("ALL ERROR");

// 
//  code for insert Category
//
if($_POST["btn_cat"]!=null)
{
	$categoryname=$_POST["txt_tname"];
	$sel=mysql_query("select c_name from catagory where c_name='$categoryname' ");
	$arr=mysql_fetch_array($sel);
	if($arr['c_name']!=$categoryname)
	{
		//$catid = $_POST["getcid"];  //echo "GETCID: "+$catid;
		//$image = $_FILES['image']['name'];//image
		//$target = "images/modelimg/".basename($image);//image
		
		
		//if (move_uploaded_file($_FILES['image']['tmp_name'], $target))//image
		//{ 	
			//echo "Image uploaded successfully";
			date_default_timezone_set('Asia/Kolkata');
			$date=date('M/d/Y h:i:s');

			$qry="INSERT INTO catagory(c_name,creationtime)VALUES('$categoryname','$date')";
			$res=mysql_query($qry,$con);
			if($res)
			{
				echo "<script>window.location=('category.php');</script>";
			}
			else
			{
				echo "<script>alert('category not insert');window.location=('category.php');</script>";
			}
		/*}
		else
		{ 	
			echo "<script>alert('File not upload!');window.location=('category.php');</script>";
		}*/
	}
	else
	{
		echo "<script>alert('Already Entered');</script>";
		echo "<script>window.location=('category.php');</script>";
	}
}

// 
//  code for delete Category
//

	if(isset($_REQUEST["del"]))
	{
		$categoryid=$_REQUEST["del"];
		$sel=mysql_query("select *from products where mc_id='".$categoryid."' ");
		$arr=mysql_fetch_array($sel);
		if( $arr["mc_id"] != $categoryid )
		{
			$id=$_REQUEST['del'];
			$qry2="DELETE FROM catagory WHERE c_id='".$id."'";
			$result2=mysql_query($qry2);

			if($result2)
			{
				echo "<script>window.location=('category.php');</script>";
			}
		}
		else
		{
			echo "<script>alert('First delete,Sub-Category then try again');window.location=('category.php');</script>";
		}
	}
	else
	{
		echo "<script>alert('category not deleted');window.location=('category.php');</script>";
	}
?>