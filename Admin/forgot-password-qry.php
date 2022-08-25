<?php 
include("configuration.php");
error_reporting("ALL_ERROR");
	
if($_POST['forgot-btn']!=null)
{
	$email=$_POST["inputEmail"];
		
	$res=mysql_query("select email_id from admin where email_id='".$email."'");
	if($row=mysql_fetch_array($res))
	{
		ini_set("SMTP","mail.YourDomain.com");
		ini_set("smtp_port","25");
		ini_set('sendmail_from', 'ValidEmailAccount@YourDomain.com');
		ini_set("SMTP","mail.example.com"); 
			
		$email = $_POST['inputEmail'];
		$resetlink = 'http://localhost:/ceatyre/MainAdmin/reset-password.php?token='.base64_encode( $email ); // base64_decode();
		$to =  $email;
		$from = '';
		$subject = 'Reset Password Link';
			
		$txt = 'Your reset password link : click to reset password <br/>'.$resetlink.'';
		die( 'Click to set your new password : <a href="'.$resetlink.'" > '.$resetlink.'</a>');
		// $to = "somebody@example.com";
		// $subject = "My subject";
		// $txt = "Hello world!";
		$headers = "From: ronakvirpara888@gmail.com" . "\r\n";// .
		//"CC: somebodyelse@example.com";

		$d = mail($to,$subject,$txt,$headers);
		die($d);
	}
	else
	{
		echo "<script>window.location=('index.php');</script>";
	}
}
?>