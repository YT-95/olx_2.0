<?php

	session_start();
	include("configuration.php");
	
	if(isset($_POST["login"]))
	{
			$email=$_POST["t_email"];
			$pass=$_POST["t_pass"];
			$qry="select password from admin where email_id='$email' ";
			$res=mysql_query($qry,$con);
			
			if($row=mysql_fetch_array($res))
			{
				if($row["password"] != $pass)
				{
					echo "<script> alert('password is wrong! Please try again.');window.location=('login.php');</script>";
				}
				else
				{
					$_SESSION['email_id']=$email;
					
					echo "<script>window.location=('index.php');</script>";
				}
			}
			
			else
			{
				echo "<script> alert('email is wrong! Please try again.');window.location=('login.php');</script>";
			}
	}
	else
	{
		echo mysql_query();
	}
?>