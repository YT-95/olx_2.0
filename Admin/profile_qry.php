 <?php
 session_start();
 //error_reporting("ALL ERROR");
 include ('configuration.php');
	$email=$_SESSION["email_id"];
	
		$name=$_POST["txt_name"];
		$emailid=$_POST["txt_email"];
		$mobile=$_POST["txt_mob"];
		$opass=$_POST["opass"];
		$npass=$_POST["npass"];
		$rpass=$_POST["rpass"];
		$image = $_FILES['image']['name'];//image
		$target = "images/admin/".basename($image);//image
		

		$res=mysql_query("select * from admin where email_id='".$email."'");
		$row=mysql_fetch_row($res);

		if($row[5] ==$opass )
		{

					if($image != null)
						{
							
							$path="images/admin/".$row[4];//$tmp=$row['image'];//.$tmp;
								if(!@unlink($path))
								{
									echo "File not deleted! pwd";
								}
								else
								{			
									$imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
							  
												if( $imageFileType == "jpg" | "jpeg" | "png" | "gif" )
												{
													if(move_uploaded_file($_FILES['image']['tmp_name'], $target))//image
													{ 	$qry="update admin set image='$image' where email_id='".$email."'";
														$res2=mysql_query($qry,$con);
													}
													else
													{ 	
														echo "Failed to upload image";
													}
												}
												else
												{
													echo "<script> alert (' some thing is wrong'); window.location=('profile.php'); </script>";
												}
								}
						}




						if($npass != null)
						{
							if($npass == $rpass)
							{
								
								$qry2="update admin set password='$npass' where email_id='".$email."'";
								$res3=mysql_query($qry2,$con);
								
							}
							else
							{
								echo "<script> alert ('new password and conform password not match'); window.location=('profile.php'); </script>";
							}
						}
						//echo $row[2];


						

						if($row[1] != $name )
						{
							//echo $row[1]."<br>".$name;
						$qry4="update admin set name='".$name."' where email_id='".$email."'";
						$res5=mysql_query($qry4);

						}
						
						if( $row[3] != $mobile)
						{

						$qry5="update admin set mobile='".$mobile."' where email_id='".$email."'";
						$res6=mysql_query($qry5);

						}

						if($emailid != $row[2])
						{
							
							$qry3="update admin set email_id='$emailid' where email_id='".$email."'";
							$res4=mysql_query($qry3);
							if(isset($res4))
							{
								unset($_SESSION['email_id']);
								$_SESSION['email_id']="$emailid";
							}

						}

						echo "<script> 
								alert (' update complete .');
								window.location=('profile.php');  </script>";

					

		}
		else
		{
			echo "<script> alert (' password is wrong ! please try again .');window.location=('profile.php');  </script>"; 
		}

  ?>

						



	<!--	if($image != null )//$pass!="" && $cpass!="" && 
		{
			$result=mysql_query("select * from admin where email_id='".$email."'");
			if($row=mysql_fetch_array($result))
			{
				$path="images/admin/".$row["image"];//$tmp=$row['image'];//.$tmp;
				if(!@unlink($path))
				{
					echo "File not deleted! pwd";
				}
				else
				{
					echo "File delete successfully.";
					
					$imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
	  
						if( $imageFileType == "jpg" | "jpeg" | "png" | "gif" )
						{

					
							if(move_uploaded_file($_FILES['image']['tmp_name'], $target))//image
							{ 	
								echo "Image upload successfully";//email_id='$emailid',
								$qry="update admin set name='$name',mobile='$mobile',image='$image',email_id='$emailid' where email_id='".$email."'";
								unset($_SESSION['email_id']);
								$_SESSION['email_id']="$emailid";
								
								$result=mysql_query($qry,$con);
							}
							else
							{ 	
								echo "Failed to upload image";
							}
						}
						else
						{
							echo "<script> alert (' some thing is wrong'); window.location=('profile.php'); </script>";
						}
				}
			}
		}
		/*else if($pass=="" && $cpass=="" && $image!=null)
		{
			$result=mysql_query("select * from admin where email_id='".$email."'");
			if($row=mysql_fetch_array($result))
			{
				$path="images/admin/".$row["image"];//$tmp=$row['image'];//.$tmp;
				if(!@unlink($path))
				{
					echo "File not deleted! no pwd";
				}
				else
				{
					echo "File uploadsuccessfully.";
					
					if(move_uploaded_file($_FILES['image']['tmp_name'], $target))//image
					{ 	
						echo "Image uploaded successfully";
						$qry="update admin set name='$name',email_id='$emailid',mobile='$mobile',image='$image' where email_id='".$email."'";
						$result=mysql_query($qry,$con);
					}
					else
					{ 	
						echo "Failed to upload image";
					}
				}
			}
		}
		else if($pass!="" && $cpass!="" && $image==null)
		{
			$qry="update admin set name='$name',email_id='$emailid',mobile='$mobile',password='".md5($pass)."' where email_id='".$email."'";
			$result=mysql_query($qry,$con);
		}*/
	/*	else if($image==null)//$pass=="" && $cpass=="" && 
		{
			$qry="update admin set name='$name',mobile='$mobile',email_id='$emailid' where email_id='".$email."'";//,email_id='$emailid'
			unset($_SESSION['email_id']);
			$_SESSION['email_id']="$emailid";
			$result=mysql_query($qry,$con);
		}
		if($result)
		{
			header('Location:profile.php');
		}
		else
		{
			echo "Profile not Update!";
		}
	}-->