<nav class="navbar navbar-expand navbar-dark bg-dark static-top header">
	<a class="navbar-brand mr-1" href="index.php">OLX 2.0 - ADMINS</a>
	<!-- Navbar Search -->
	<div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></div>
	<!-- Navbar -->
	<ul class="navbar-nav ml-auto ml-md-0">
		<li class="nav-item dropdown no-arrow mx-1 uma">
			<a class="nav-link" href="new-users.php" >
			<span class="badge badge-danger">
				<?php
					include("configuration.php");
					$msg="new";
					$result=mysql_query("select * from users where status='".$msg."'");
					$num1=mysql_num_rows($result);
					
					if($num1!=0){
						echo "+".$num1;
					}else{  echo "0"; }
				?>
			</span>
			<i class="fa fa-users"></i>
			</a>
		</li>
		<li class="nav-item dropdown no-arrow mx-1 uma">
			<a class="nav-link" href="comments.php" >
			<span class="badge badge-danger">
				<?php
					$msg="unread";
					$result=mysql_query("select * from contactus where message='".$msg."'");
					$num2=mysql_num_rows($result);
					if($num2!=0){
						echo "+".$num2;
					}else{  echo "0"; }
				?>
			</span>
			<i class="fa fa-envelope fa-fw"></i>
			</a>
		</li>
		<li class="nav-item dropdown no-arrow uma">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown" > <i class="fa fa-user"  style="fint-size:40px;"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right">
			<a class="dropdown-item" href="profile.php">Profile Setting</a>
            <div class="dropdown-divider"></div>
				<a class="dropdown-item" href="logout.php" data-target="#logoutModal" data-toggle="modal">Logout</a>
			</div>
		</li>
	</ul>
</nav>