<?php
	include("configuration.php");
	
	
	
	if($_POST["register"]!=null)
	{
		$uname=$_POST["uname"];
	$mobile=$_POST["mobile"];
	$state=$_POST["state"];
	$city=$_POST["city"];
	$email=$_POST["email"];
	$password=$_POST['password'];
	$cpass=$_POST['cpassword'];
		
		if($password == $cpass)
		{
			$sel=mysql_query("select email from users where email='$email' ");
			$arr=mysql_fetch_array($sel);
			if($arr['email']!=$email)
			{
				$msg="new";
				//$uname=$_POST['uname'];
				//$email=$_POST['email'];
				//$mobile=$_POST['mobile'];
				//$password=md5($_POST['password']);
				$qry="INSERT INTO users (username,mobile,state,city,email,password,status)VALUES('$uname','$mobile','$state','$city','$email','$password','$msg')";

				$result=mysql_query($qry,$con);

				if($result)//mysql_affected_rows()>0)
				{
					echo "<script>window.location=('login.php');</script>";
				}
				else
				{
					echo "<script> alert('Ragistration failed!');window.location=('register.php');</script>";
				}
			}
			else 
			{
				echo "<script> alert('user already exists');window.location=('register.php');</script>";
			}
		}
		else
		{
			echo "<script> alert('Passwords does not match!,Please check password and confirmPassword.');window.location=('register.php');</script>";
		}
	}
?>