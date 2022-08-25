<?php 
	include("configuration.php");
$email = base64_decode($_POST['token']); 
$password = $_POST['password'];
$cpassword = $_POST['confirm_password'];
if(isset($_POST["reset-btn"]))
{
	if($password==$cpassword)
	{
		$resetqry="update admin set password='".md5($password)."' where email_id='$email'";
		$result=mysql_query($resetqry,$con);
		if($result)
		{
			echo "<script>window.location=('login.php');</script>";
		}
		else
		{
			echo "<script>alert('Password does not Update!');window.location=('login.php');</script>";
		}
	}
}
// set here new password 

// message : password set successfully 
?>