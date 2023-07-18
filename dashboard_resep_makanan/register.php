<?php
require "functions.php";

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
                alert('user baru berhasil ditambahkan');
                document.location.href = 'index.php';
              </script>";
  } else {
    echo mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

    <link rel="stylesheet" href="css/register.css" >
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
</head>

<body >
<form action="" method="POST">
  <div class='login'>
  <h2>Register</h2>
  <input name='username' placeholder='Username' type='text'>
  <input id='pw' name='password' placeholder='Password' type='password'>
  <input name='password2' placeholder='Confirm Password' type='password'>
  <div class='agree'>
    <input id='agree' name='agree' type='checkbox'>
    <label for='agree'></label>Accept rules and conditions
  </div>
  <input class='animated' type='submit' name="register" value='Register'>
  <a class='forgot' href='index.php'>Already have an account?</a>
</div>
</form>
</body>

</html>