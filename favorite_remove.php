<?php

session_start();

include("configuration.php");



$rfid = $_GET["frid"];

//echo "<br>$rfid";
$uemail = $_SESSION["user-email"];
//echo $uemail;

$qry2 = "select *from users where email='$uemail'";
$res2 = mysql_query($qry2);
$row = mysql_fetch_row($res2);
$uid = $row[0];
		

$qry ="delete from favorite where p_id= '$rfid' and u_id='$uid'";
$res = mysql_query($qry);
		
		if(isset($res))
		{
			header("location:favorite.php");
		}
		else
			{
				echo "<script>alert ('some thing is wrong please try again !  '); window.location=('favorite.php');</script>";
			}

?>