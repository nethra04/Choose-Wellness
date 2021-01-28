<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Choose Wellness - Login</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="dist/img/logo_small.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
        
        <div class="login-logo">
            <img src="dist/img/logo_small.png" alt="Profile Pic" style="height:50px;margin-right:5px;" style="opacity: 1"><b>Choose</b> Wellness
        </div>
        <hr>
        <div class="login-logo">
            Login
        </div>

      <form method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <center><button type="submit" name="submit" class="btn btn-primary btn-block" style="width:50%;">Sign In</button></center>
          </div>
          <!-- /.col -->
        </div>
      </form>
<!--
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>-->
      <!-- /.social-auth-links -->
<!--
      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>-->
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>

<?php
require 'connection.php';
$conn = database_info(); 

if(isset($_POST["submit"]))  {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $sql = "SELECT * FROM employee WHERE emp_email=:emp_email AND emp_password=:emp_password";
	$stmt = $conn->prepare($sql); 
	$stmt->bindParam(':emp_email', $email);
	$stmt->bindParam(':emp_password', $password);
	$stmt->execute();
	$count = $stmt->rowCount();
	
	if($count > 0){
    	$row = $stmt->fetch(PDO::FETCH_BOTH);
        
        if($row["emp_position"] == "Admin"){
            $_SESSION["admin_id"] = $row["emp_id"];
            $_SESSION["admin_name"] = $row["emp_fname"].' '.$row["emp_lname"];
            $_SESSION["admin_gender"] = $row["emp_gender"];
            database_close($conn);
            echo "<script>window.location='organization/index.php'</script>";
        }
        else{
            $_SESSION["emp_id"] = $row["emp_id"];
            $_SESSION["emp_name"] = $row["emp_fname"].' '.$row["emp_lname"];
            $_SESSION["emp_gender"] = $row["emp_gender"];
            database_close($conn);
            echo "<script>window.location='employee/index.php'</script>";
        }
	}
	else{
	    echo "<script>alert('Please check your Email and Password!');</script>";
	}
	
}
?>