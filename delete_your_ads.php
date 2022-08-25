<?php
session_start();

include('configuration.php'); 

$dpid = $_GET['pid'];



			$sql ="select * from products where p_id= '$dpid'";
			$result = mysql_query($sql);
			$row3 = mysql_fetch_row($result);


$qry ="delete from products where p_id= '$dpid'";


unlink("Admin/product_images/$row3[6]");
unlink("Admin/product_images/$row3[7]");
unlink("Admin/product_images/$row3[8]");
unlink("Admin/product_images/$row3[9]");

	$qer3 = mysql_query("delete from notification where p_id= '$dpid'");
	$qry4 = mysql_query("delete from favorite where p_id='$dpid' ");


$res = mysql_query($qry);

	if(isset($res))
	{
		echo "<script> alert('your ads deleted. ');window.location=('sell.php');  </script>";//
	}
	else
	{
		echo "<script> alert('some thing is wrong ! please try again .'); window.location=('your_ads.php');</script>";//
	} 
echo $row3[6];
echo "ndvdv";
?>