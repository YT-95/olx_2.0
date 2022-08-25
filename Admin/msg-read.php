<?php
	include("configuration.php");
	error_reporting("ALL ERROR");
	/***
		#  code for new comments(queries) to update old comments(message readed) OR delete message start.
	***/
	$mid=$_GET["slid"];
	if($mid != null )
	{
		$read="read";
		$qry="update contactus set message='$read' where cusid='$mid'";
		$result=mysql_query($qry,$con);

		if($result)
		{
			echo "<script>window.location=('comments.php');</script>";
		}
		else
		{
			echo "<script>alert('error convert new-message to readed.');window.location=('comments.php');</script>";
		}
	}
	
	
	$mdid=$_GET["deletemid"];
	if($mdid!=null)
	{
		$dqry="delete from contactus where cusid='$mdid'";
		$result=mysql_query($dqry);
		if($result)
		{
			echo "<script>alert('Message delete successfully.');window.location=('comments.php');</script>";
		}
		else 
		{
			echo "<script>alert('Message not delete!.');window.location=('comments.php')</script>";
		}
	}

	/***
		#  code for new comments(queries) to update old comments(message readed) OR delete message end.
	***/


	
	/***
		#  code for new Users update to old Users OR remove(delete) Users start.
	***/
	$uid=$_GET["sluid"];
	if($uid != null )//$_POST["cat_vtid"]!=null)
	{
		$msg="old";
		$qry="update users set status='$msg' where uid='$uid'";
		$result=mysql_query($qry,$con);

		if($result)
		{
			echo "<script>window.location=('new-users.php');</script>";
		}
		else
		{
			echo "<script>alert('Record not Update!');window.location=('new-users.php');</script>";
		}
	}
	
	$udid=$_GET["deleteuid"];
	if($udid!=null)
	{
		$dqry="delete from users where uid='$udid'";
		$result=mysql_query($dqry);
		if($result)
		{
			echo "<script>alert('Message delete successfully.');window.location=('comments.php');</script>";
		}
		else 
		{
			echo "<script>alert('Message not delete!.');window.location=('comments.php')</script>";
		}
	}
	/***
		#  code for new Users update to old Users OR remove(delete) Users start.
	***/
?>