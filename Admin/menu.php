    <ul class="sidebar navbar-nav uma">
      <li class="nav-item uma">
		<a class="nav-link" href="profile.php">
          <?php
			include ('configuration.php');
			$email=$_SESSION["email_id"];
			$result=mysql_query("select * from admin where email_id='".$email."'");
			$row = mysql_fetch_array($result);
			echo "<img src='images/admin/".$row["image"]."' style='height:50px;width:50px;border-radius: 45%;
			font-family: FontAwesome;'>";
		  ?><span style="color:white;position:absolute;margin-left: 1.5%;"><?php echo "<b>".$row["name"]."</b>"; ?></span>
        </a>
      </li>
      <li class="nav-item sidebar-menu">
        <a class="nav-link" href="index.php">
          <i class="fa fa-home"><!-- class="fas fa-fw fa-tachometer-alt" --></i>
          <span>Dashboard</span>
        </a>
      </li>
     <!-- <li class="nav-item dropdown sidebar-menu">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu sidebar-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
			< ?php	
				if(isset($_SESSION['email_id']))
				{
					?>
					<a class="dropdown-item" href="logout.php">Logout</a>
					< ?Php
				}
			?>
        </div>
      </li>  -->
	  <li class="nav-item sidebar-menu">
        <a class="nav-link" href="category.php">
          <i class="fa fa-list-alt"> </i>
          <span>Add Category</span></a>
      </li>
      
	 
      <li class="nav-item sidebar-menu">
        <a class="nav-link" href="product-manage.php">
          <i class="fa fa-list"></i>
          <span>Manage Product</span></a>
      </li>
	 
	  <li class="nav-item sidebar-menu">
        <a class="nav-link" href="comments.php">
          <i class="fa fa-comments"></i>
          <span>Comments</span></a>
      </li>
	  <li class="nav-item sidebar-menu">
        <a class="nav-link" href="new-users.php">
          <i class="fa fa-users"></i>
          <span>Users list</span></a>
      </li>
    </ul>