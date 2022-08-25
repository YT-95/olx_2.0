<?php
	include("configuration.php");
	error_reporting("ALL ERROR");
	// delete and update message for notification
	$mid=$_GET["slid"];
	if($mid != null )
	{
		$read="read";
		$qry="update notification set noti='$read' where id='$mid'";
		$result=mysql_query($qry,$con);

		if($result)
		{
			echo "<script>window.location=('notification.php');</script>";
		}
		else
		{
			echo "<script>alert('error convert new-message to readed.');window.location=('notification.php');</script>";
		}
	}
	

	
	
	$mdid=$_GET["deletemid"];
	if($mdid!=null)
	{
		$dqry="delete from notification where id='$mdid'";
		$result=mysql_query($dqry);
		if($result)
		{
			echo "<script>alert('Message delete successfully.');window.location=('notification.php');</script>";
		}
		else 
		{
			echo "<script>alert('Message not delete!.');window.location=('notification.php')</script>";
		}
	}

	
?>