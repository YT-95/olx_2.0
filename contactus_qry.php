<?php
session_start();
error_reporting("ALL ERROR");
include("configuration.php");

if(isset($_POST["sendmsg"]))
{
	$fullname=$_POST['Fname'];
	$email=$_POST['email'];
	$mobile=$_POST['mob'];
	$message=$_POST['message'];
	$msgshow="unread";
	
	$sessionid=$_SESSION['user-email'];
	$sqry="select email from users where email='".$sessionid."'";
	
	$res=mysql_query($sqry);
	if($row=mysql_fetch_array($res))
	{
		$qry="INSERT INTO contactus(name,email,mobile,description,message)  VALUES('$fullname','$email','$mobile','$message','$msgshow')";
		$result=mysql_query($qry,$con);
		if($result)
		{
			echo "<script> alert('Message Sucessfully Send');window.location=('contactus.php');</script>";
		}
		else
		{
			echo "<script> alert('Message not  Send');window.location=('contactus.php');</script>";
		}
	}
	else
	{
		echo "<script> alert('please login now!');window.location=('login.php');</script>";
	}
}
?>