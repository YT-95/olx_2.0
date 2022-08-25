<!DOCTYPE html>
<html lang="en">
<head>
  <title> Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header" align="center"><h2 class="fa fa-user"> Login</h2></div>
      <div class="card-body">
        <form action="login-qry.php" method="post">
          <div class="form-group">
             <label for="inputEmail">E-mail</label>
            <div class="form-label-group">
              <input type="email
              " placeholder="Your E-mail*" name="t_email"  class="form-control"  required="true" 
              autofocus="autofocus">
             
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword">Password</label>
            <div class="form-label-group">
              <input type="password" name="t_pass" class="form-control" placeholder="Password" required="true">
              
            </div>
          </div><br>
		  <input type="submit" name="login" value="Login" class="btn btn-primary btn-block" />
        </form>
        <div class="text-center"><br>
          <a  style="color:black" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>