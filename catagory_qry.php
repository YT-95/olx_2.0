<?php
session_start();

$q = intval($_GET['q']);

include("configuration.php");

$sql="SELECT * FROM catagory WHERE c_id = '".$q."'";
$result = mysql_query($sql,$con);

while($row = mysql_fetch_array($result)) {
	$temp=$row["c_name"];
	$temp2=$row["c_id"];
	
	unset($_SESSION['ss_cid']);
	unset($_SESSION['ss_cname']);
	
	$_SESSION['ss_cid']="$temp2";
	$_SESSION['ss_cname']="$temp";
 
  echo  $row['c_name'];
  
  
}

mysql_close($con);
?>