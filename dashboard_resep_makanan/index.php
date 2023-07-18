<?php
require "functions.php";

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // ambil username berdasarkan id
  $result = mysqli_query($koneksi, "SELECT username 
                                    FROM user
                                    WHERE id = $id;
                                  ");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($key === hash('sha256', $row['username'])) {
    $_SESSION['login'] = true;
  }
}

if (isset($_SESSION["login"])) {
  header("Location: admin/index.php");
  exit;
}

if (isset($_POST['login'])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  // cek username
  $result = mysqli_query($koneksi, "SELECT * FROM user
                                    WHERE username = '$username'
                                   ");

  if (mysqli_num_rows($result) === 1) {
    // cek passwordnya
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      // cek session
      $_SESSION["login"] = true;

      // cek remember me
      if (isset($_POST["remember"])) {
        // buat cookie
        setcookie('id', $row['id'], time() + 60);
        setcookie('key', hash('sha256', $row['username']), time() + 60);
      }

      header("Location: admin/index.php");
      exit;
    }
  }

  $error = true;
}

?>


<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
<head>

	<!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>Login Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">
	
</head>
<body>

	<div class="notice">
		<a href="" class="close">close</a>
		<p class="warn">Whoops! We didn't recognise your username or password. Please try again.</p>
	</div>



	<!-- Primary Page Layout -->

	<div class="container">
		
		<div class="form-bg">
			<form action="" method=POST>
				<h2>Login</h2>
				<p><input type="text" name="username" placeholder="Username"></p>
				<p><input type="password" name="password" placeholder="Password"></p>
				<label for="remember">
				  <input type="checkbox" name ="remember" id="remember" value="remember" />
				  <span>Remember me on this computer</span>
				</label>
				<button type="submit" name="login" ></button>
			<form>
		</div>

	

        <p class="forgot">
          Don't have an account yet? <a href="register.php" class="text-center">Register</a>
        </p>


	</div><!-- container -->

	<!-- JS  -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>
	
<!-- End Document -->
</body>
</html>