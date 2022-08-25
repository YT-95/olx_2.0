<?php
session_start();

include("configuration.php");

if(isset($_POST["submit"]))
{
	$p_id = $_GET['pid'];
	$tmp = $_SESSION['user-email'];
	$qry = "select *from users where email = '$tmp'";
	$res = mysql_query($qry);
	$row = mysql_fetch_row($res);

	//insert product name
	$q = mysql_query("select *from products where p_id = '$p_id' ");
	$row2 = mysql_fetch_row($q);
	$pnm = $row2[2];


	$id = $row[0];
	$nm = $row[1];
	$email = $row[5];
	$mobile = $row[2];
	$msg = $_POST["msg"];
	$new = "unread";
	
	 date_default_timezone_set('Asia/Kolkata');
	  $date=date('d/M/y h:i:s');
	
	echo "<br><br><br><br><br>";
	$sql3="SELECT * FROM products WHERE p_id =$p_id";
	$result = mysql_query($sql3,$con);
	echo $pnm;
	$row3 = mysql_fetch_row($result);
	$u_id = $row3[12]; 
	$qry2="insert into notification(uid,name,email,mobile,message,time,p_u_id,p_id,p_name,noti) 
		values('$id','$nm','$email','$mobile','$msg','$date','$u_id','$p_id','$pnm','$new')";
	//$qry2 ="insert into notification(uid,name,email,mobile,message,time,noti) values('$id','$nm','$email','$mobile','$msg','$date','$new')";
	$res2 = mysql_query($qry2);
	if(isset($res2))
	{
		//echo "- - message send successefully - -  ";
		header("Location: product_detail.php?sid=$p_id");
		//echo "<script>alert('Message send successfully  !');window.location=('product_detail.php');</script>";
	}else
	{
		//echo "  - - message not send ! please try again - - ";
		//header("Location: product_detail.php?sid=$p_id");
		echo "<script>alert('some thing is wrong ! please try again !');window.location=('product_detail.php');</script>";
		
	}
	
}


?>