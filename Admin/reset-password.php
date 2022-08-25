<?php 
$email = base64_decode($_GET['token']);
// email - user table che ?
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Forgot Password</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">New Password</div>
      <div class="card-body">
        <form action="reset-password-qry.php" method="post">
				<input type="hidden" name="token" value="<?php echo $_GET['token']; ?>" /> 
            <div class="form-group">
				<input type="hidden" name="inputEmail" class="form-control" 
				value="<?php  echo $email; ?>">
            </div>
			<div class="form-group">
				<input type="password" name="password" class="form-control"
				placeholder="Enter new password" required>
            </div>
			<div class="form-group">
				<input type="password" name="confirm_password" class="form-control"
				placeholder="Re-enter password" required>
            </div>
          <input type="submit" name="reset-btn" class="btn btn-primary btn-block" value="Submit" />
        </form><br>
        <div class="text-center">
          <a class="d-block small" href="login.php">Login Page</a>
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