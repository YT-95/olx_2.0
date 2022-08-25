
<?php

	session_start();
	include("configuration.php");
	
	$email=$_POST["t_email"];
	$pass=$_POST["t_password"];
	$res=mysql_query("select email,password from users where email='$email'");
	if($row=mysql_fetch_array($res))
	{
		if($row["password"]!=$pass)
		{
			echo "<script> alert('password is wrong! Please try again.');window.location=('login.php');</script>";
		}
		else
		{
			$_SESSION['user-email']=$email;
			
			echo "<script>window.location=('index.php');</script>";
		}
	}
	
	else
	{
		echo "<script> alert('email is wrong! Please try again.');window.location=('login.php');</script>";
	}
	/*
	while($row=mysql_fetch_array($res))
	{
		if($row["password"]==$pass && $row["email"]==$email)
		{
			$_SESSION['user-email']=$email;
			
			echo "<script>window.location=('index.php');</script>";
		}
	}
	if($row["name"]!=$email)
	{
		echo "<script> alert('email is wrong! Please try again.');window.location=('login.php');</script>";
	}

	if($row["password"]!=$pass)
	{
		echo "<script> alert('password is wrong! Please try again.');window.location=('login.php');</script>";
	}
	*/
	
	/*include('connect.php');
	
	
	 if(isset($_POST["save"]))
	 {
		
		$nm=$_POST["uname"];
		 $pass=md5($_POST["pass"]);
		 
		 $qr="select *from users where username='$nm' and password='$pass' ";
			$re=mysql_query($qr,$con);
			if(mysql_fetch_row($re))

				{
					echo "<script> alert('password is wrong! Please try again.');window.location=('login.php');</script>";
				}
				else
				{
				

					//header('location:index.php');
					echo "hello wrong";
				}
			}
	 
	 
	 else
	 {
		 mysql_error();
		 
	 }*/

?>	
	
	
