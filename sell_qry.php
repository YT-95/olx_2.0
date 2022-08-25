 <?php
 session_start();

include("configuration.php");


$temp=($_SESSION['user-email']);
$result2= mysql_query("select * from users where email='$temp'",$con); 
$row2=mysql_fetch_array($result2);
$u_id=$row2["uid"];

//fetch id of catagory

$cname = $_SESSION['ss_cid'];

if(isset($_POST['submit']))
{
	
	  $pbrand=$_POST["brand"];
	  $ptitle=$_POST["title"];
	  $pdes=$_POST["description"];
	  $pprice=$_POST["price"];
	  $pwhy=$_POST["why"];
	  
	  
	  
	  //images
		$tmp = $_FILES['file']['tmp_name'];
		$arr = array(4);
		$img = array(4);
		for($i=0; $i<=count($tmp)-1; $i++)
		{
		 $file_name = $_FILES['file']['name'][$i];
		 $file_size = $_FILES['file']['size'][$i];
		$file_store ="Admin/product_images/";
		if($file_size < 1000000)
		{
				move_uploaded_file($_FILES['file']['tmp_name'][$i],$file_store.$file_name);
		}
		else{
			echo "<script> alert ('YOUR IMAGE IS TOO BIG ! ');window.location=('sell.php');  </script>"; 
		}
		
		$arr[$i]=$file_name;
		$img[$i] = $file_store . basename($file_name);
		$imageFileType[$i] = strtolower(pathinfo($img[$i],PATHINFO_EXTENSION));
		}
	  $allow = array("jpg","jpeg","png");
	  
	  $pimage1 = $arr[0];
	  $pimage2 = $arr[1];
	  $pimage3 = $arr[2];
	  $pimage4 = $arr[3];
	  $arr2 =array($imageFileType[2],$imageFileType[0],$imageFileType[3],$imageFileType[1]);
	  date_default_timezone_set('Asia/Kolkata');
	  $date=date('d/M/y h:i:s');
	  
	 $res1 = array_diff($arr2,$allow);
	  
	  if( $res1 == null)
		{

	//$query2 ="insert into products(mc_id,p_b_name,p_title,p_description,p_price,p_image1,p_image2,p_image3,p_image4,p_creationtime,p_why_selling,u_id) 
			//values('$cname','$pbrand','$ptitle','$pdes','$pprice','$pimage1','$pimage2','$pimage3','$pimage4','$date','$pwhy','$u_id')";

			$res2=mysql_query("insert into products(mc_id,p_b_name,p_title,p_description,p_price,p_image1,p_image2,p_image3,p_image4,p_creationtime,p_why_selling,u_id) 
			values('$cname','$pbrand','$ptitle','$pdes','$pprice','$pimage1','$pimage2','$pimage3','$pimage4','$date','$pwhy','$u_id')",$con);
			
			 if(isset($res2))
			 { 
				
				 echo "<script> alert ('product succesfully sell '); window.location=('your_ads.php'); </script>"; 
			 }
			 else
			 {
				 echo "<script>alert('some thing is wrong ! please try again !');window.location=('sell.php');</script>";
			 }

		}
		else
		{
			echo "<script>alert('Invalid format. Only jpg / jpeg/ png  format allowed');window.location=('sell.php');</script>";
		}
}
else
{
	echo "<script> alert (' some thing is wrong ! please try again !');  </script>";
}


?>