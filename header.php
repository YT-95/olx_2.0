 <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>OLX<em>2.0</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse"  id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item "  >
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <?php
                include("configuration.php");
            
            if(empty($_SESSION['user-email']))
             {
              $tmp = "xyz";
             }
             else
             {
              $tmp = $_SESSION['user-email'];
             }

             $qr =mysql_query("select *from users where email = '$tmp'");
            $rowi = mysql_fetch_row($qr);
            $tmp3 = $rowi[0];
            $res = mysql_query("select *from products where u_id = '$tmp3'");
            $numi = mysql_fetch_row($res);
        
            if($numi[12] == $rowi[0])
            {
          ?>  <a class="nav-link" href="your_ads.php">Ads  </a>
          <?Php
            }
            else
            {
          ?>    <a class="nav-link" href="sell.php">Sell  </a>
          <?php
            }
          ?>
          
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
			  
			  <li class="nav-item">
                <a class="nav-link" href="contactus.php">contact Us</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link fa fa-heart-o" href="favorite.php"></a>
              </li>
        <li class="nav-item">
                         
                <a class="nav-link" href="notification.php" >
                    <i class="fa fa-bell">
      <span class="badge badge-danger" style="margin-right: -5px;">
        <?php
          
        //notification part
        
             $msg="unread";
             if(empty($_SESSION['user-email']))
             {
              $tmp = "0";
             }
             else
             {
              $tmp = $_SESSION['user-email'];
             }
            $qry = mysql_query("select *from users where email='$tmp' ");
            $row = mysql_fetch_row($qry);
            $tmp2 = $row[0];
            $result=mysql_query("select * from notification where p_u_id='$tmp2'and noti='$msg'");
            $num1=mysql_num_rows($result);
          
                if($num1!=0){
                  echo "+".$num1;
                }else{  echo "0";  }
          ?>
      </span>

      
       
    </i>
      </a>
              </li>
			   <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fa fa-user" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false"></a>
                    
                    <div class="dropdown-menu">
                      <a><?php
						error_reporting("ALL ERROR");
						if(!empty($_SESSION['user-email']))
						{
					?>	<a class="dropdown-item" href="logout.php">Logout  </a>
					<?Php
						}
						else
						{
					?>		<a class="dropdown-item" href="login.php">LOGIN  </a>
					<?php
						}
					?></a>
					
					
					
					
                      <!--<a class="dropdown-item" href="your_ads.php">your Ads</a>-->
                      <a class="dropdown-item" href="update_user.php">profile setting</a>
                     
                    </div>
                </li>
			  
            </ul>
          </div>
        </div>
      </nav>
    </header>


