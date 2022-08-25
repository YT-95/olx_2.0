

<?php 
	include('configuration.php');
	$result= mysql_query("select * from catagory",$con); 
	$result2= mysql_query("select * from products",$con); 
	
	
?>
<div id="all"><br>
	<div class="container col-lg-6">
		
		<h4>  Category<h4>
		  <select class="form-control "  name="users"   onchange="showUser(this.value)">
		  <option value="" required="true">---Select - Category---</option>
		    <?php
			while($row = mysql_fetch_row($result)) {
			?>
				<option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
				
			<?php
			}
			?>
			
		  </select>
		 
		
	</div>
	<script type="text/javascript" src="js/select-box.js"></script>
</div>
    
    <div class="latest-products" >
		<div class="col-md-12" >
		<div id="txtHint"class="col-md-12" ><i><b>NO SELECTED PRODUCTS CATAGORY....<b><i><hr></hr></div>
		</div></div>
		<div class="col-md-12" style="text-align: right;"><i><b>ALL PRODUCTS....<b><i><hr></hr></div>
		
      <div class="container">
	  
	  
        <div class="row">
          <div class="col-md-12">
            
          </div>
		   <?php
			while($row = mysql_fetch_row($result2)) {
			?>
				<div class="col-md-3">
				<div class="product-item">
				  <a href="product_detail.php?sid=<?php echo $row[0];?>" class="justify-content-center "><?php echo
				   "<img src='Admin/product_images/".$row[6]."'style='height:300px; width:250px;'>" ?> </a> <!-- image -->
				  <div class="down-content"><!-- image colmmn 1-->
					<a href="product_detail.php?sid=<?php echo $row[0];?>"><h4><?php echo "<small>".$row[2]."</small>";echo "<br><strong>".$row[3]."</strong>"; ?></h4></a><!-- product brand name -->
					<h6 class="fa fa-inr"><i><b><?php echo " ".$row[5]."/-";?></b></i></h6><!-- price-->
					<p class=""><?php //echo $row[4]; ?></h4></p><br><!-- product description -->
					
					<!-- fetch place to user -->
					<?php $res3= mysql_query("select *from users where uid=$row[12]",$con); 
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
    </div>
