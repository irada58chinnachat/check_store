<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Check Store</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
  <link href="css/css_test.css" rel="stylesheet">
  <link href="js/JavaScript.js" rel="stylesheet">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <style>
    
 
</style>
          <script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
          <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
          <style>
          a
          {color:#CCC;
          text-shadow:-1px -1px #FFFFFF, 2px 2px #333333;}
          img{
            width: 200px;
          }
          </style>             
          <link rel="stylesheet" type="text/css" href="css/backre.css">        
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner" style = "background-color:#000000; height: 50px;">
	<div class="container">
  <!-- Brand -->
  <!-- <a class="navbar-brand" href="#"><span>Check Store</span></a> -->

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <img src="css/img/b5.png" class="b5">
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="login.php" style="color: white;"><b>Login</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php" style="color: white;" ><b>Register</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="connect/logout.php" style="color: white;" ><b>Logout</b></a>
          </li>


	   <!-- Dropdown -->
    
    </ul>
  </div>
	</div>
</nav>
    
    <div class="loginbox" align = "center"> 
    <h1><font color="000000">ลงทะเบียน</font></h1>
    
        
      <form name="frmLogin" method="post" action="connect/connect_register.php">
      <table border="0" cellspacing="0" cellpadding="6" style="width: 360px">
       <tbody>
        <tr>
        <td>Username</td>
        <td>
                <input type="text" name="username" placeholder="Username">       
        </td>
      </tr>
      <tr>
        <td>Password</td>
        <td>
                <input type="Password" name="password" placeholder="Password">       
        </td>
      </tr>
      <tr>
        <td>Frist Name</td>
        <td>
                <input type="text" name="firstname" placeholder="Frist Name">       
        </td>
      </tr>
      <tr>
        <td>Last Name</td>
        <td>
                <input type="text" name="lastname" placeholder="Last Name">       
        </td>
      </tr>
      <tr>
        <td>Phone</td>
        <td>
                <input type="text" name="phone" placeholder="Phone">       
        </td>
      </tr>
      <tr>
        <td>Address</td>
        <td>
                <input type="text" name="address" placeholder="Address">       
        </td>
      </tr>
      <tr>
        <td>Email</td>
        <td>
                <input type="text" name="email" placeholder="Email">       
        </td>
      </tr>
      <tr>
        <td colspan="2">
                <input type="submit" name=" " value="ลงทะเบียน">      
        </td>
      </tr>
    
     
      </tbody>
        </form><br>
       
    </div>
    <!-- <input type="submit" name=" " value="ลงทะเบียน"> -->
</body>
</html>