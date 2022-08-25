<?php
session_start();

$q = intval($_GET['q']);

include("configuration.php");

$sql="SELECT * FROM products WHERE mc_id = '".$q."'";
$result = mysql_query($sql,$con);

?>

      <div class="container">
	  
	  
        <div class="row">
          
		   <?php
			while($row = mysql_fetch_row($result)) 
			{
			?>
				<div class="col-md-3">
				<div class="product-item">
				  <a href="product_detail.php?sid=<?php echo $row[0];?>" class="justify-content-center "><?php 
				  echo "<img src='Admin/product_images/".$row[6]."'style='height:300px; width:250px;'>" ?> </a> <!-- image -->
				  <div class="down-content"><!-- image colmmn 1-->
					<a href="product_detail.php?sid=<?php echo $row[0];?>"><h4><?php echo "<small>".$row[2]."</small>";echo "<br><strong>".$row[3]."</strong>"; ?></h4></a><!-- product brand name -->
					<h6 class="fa fa-inr"><i><b><?php echo " ".$row[5]."/-";?></b></i></h6><!-- price-->
					<p class=""><?php //echo $row[4]; ?></h4></p><br><!-- product description -->
					
					<!-- fetch place to user -->
					<?php $res3= mysql_query("select * from users where uid=$row[12]",$con); 
					$row2=mysql_fetch_row($res3);?>
					<span class="fa fa-map-marker display-4" > <strong><?php echo $row2[3].", ".$row2[4]; ?></strong><!-- place-->
			        </span>
				  </div>
				</div>
				</div>
				<!--<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>-->
			<?php
			}
		   
			?>
		 
        </div>
     
    </div>

<?php

mysql_close($con);
?>