<?php 

session_start();

include('configuration.php');

$fvid = $_GET["fid"];



	//select current user id
		$unm = $_SESSION["user-email"];

		$qry2 ="select *from users where email='$unm'";
		$res2 = mysql_query($qry2);
		$row2 = mysql_fetch_row($res2);
		$uid = $row2[0];
//select  user id using favorite table data
		$qry ="select *from favorite where p_id= '$fvid'and u_id='$uid'";
		$res= mysql_query($qry);
		$row = mysql_fetch_row($res);
		$num = 0;
		$num = mysql_num_rows($res);

		//cheake it product alredy added or not
if($num == 0)
{

		$qry3 = "insert into favorite(u_id,p_id) values('$uid','$fvid')";
		$res3 = mysql_query($qry3);

		if(isset($res3))
		{
			// succecssfully added
				header("location:product_detail.php?sid=$fvid");

		}
		else
		{	//some thing wrong
			header("location:product_detail.php?sid=$fvid");
		}
}
else
{
	// alredy added
	header("location:product_detail.php?sid=$fvid");
}

?>