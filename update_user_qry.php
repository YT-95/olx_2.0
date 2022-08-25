<?php
session_start();
include("configuration.php");



if(isset($_POST['update']))
	
{
	$nm=$_POST["name"];
	$ml=$_POST["email"];
	$mob=$_POST["mobile"];
	$cy=$_POST["city"];
	$st=$_POST["state"];
	$op=$_POST["opass"];
	$np=$_POST["np"];
	$cp=$_POST["cp"];
	
	if($cp != null && $np != null)
	{
	
				if($cp == $np)
				{

						//fetch idat
						
						$temp=($_SESSION['user-email']);
						$result2= mysql_query("select * from users where email='".$temp."'"); 	
						$row2 = mysql_fetch_array($result2);
						$temp2=$row2["uid"];
						//$temp3=$row2["password"];
		
						//cheack new and old password
						
						if($row2["password"] == $op)
						{
							$qry="update users set username='".$nm."',mobile='".$mob."',state='".$st."',city='".$cy."',email='".$ml."',password='".$np."' where uid='".$temp2."'";
									$res=mysql_query($qry);
									unset($_SESSION['user-email']);
									$_SESSION['user-email']="$ml";
									
									if(isset($res))
									{
										echo "<script> alert('update complite.'); window.location=('update_user.php');</script>";
									}
									
						}
						else
						{
							echo "<script> alert('old pass in wrong . please try again !.'); window.location=('update_user.php');</script>";
						}

				
				}
				else
				{
					echo "<script>alert('new password and conform password not match');window.location=('update_user.php');</script>";
				}
	}
	else
	{
		//fetch idat
						
						$temp=($_SESSION['user-email']);
						$result2= mysql_query("select * from users where email='".$temp."'"); 	
						$row2 = mysql_fetch_row($result2);
						$temp2=$row2[0];
						//$temp3=$row2[6];
						
						//cheack new and old password
						
						if($row2[6] == $op)
						{
							$qry="update users set username='".$nm."',mobile='".$mob."',state='".$st."',city='".$cy."',email='".$ml."' where uid='".$temp2."'";
									$res=mysql_query($qry);
									
									unset($_SESSION['user-email']);
									$_SESSION['user-email']="$ml";
									
									if(isset($res))
									{
										echo "<script> alert('update complite.'); window.location=('update_user.php');</script>";
									}
						}
						else
						{
							echo "<script> alert(' password in wrong . please try again !.'); window.location=('update_user.php');</script>";
						}

				
		
	}
	
	
}
else
{
	echo "<script> alert('update fail. please try again !.'); window.location=('update_user.php');</script>";
}


?>