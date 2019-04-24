<?php session_start();
  require 'connect/connect.php';
  if($login_status = 0)
  {
      echo 'condition matched';
      // the above echo is just for testing
      ?>
       <script type='text/javascript'>
       document.getElementById("btn").style.display = "none";

       </script>
      <?php
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>login Form Design</title>
    <link rel="stylesheet" type="text/css" href="back.css">
</head>
<body>
    <div class="loginbox">
    <img src="css/img/b1.png" class="b1">
        <h1>Login</h1>
        <form action="connect/connect_login.php" method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Username" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name=" " value="Login">
            <a class="nav-link" href="register.php">ยังไม่มีบัญชี</a>
        </form>
    </div>>
</body>
</html>