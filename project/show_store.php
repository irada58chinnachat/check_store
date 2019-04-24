<?php
	require 'connect/connect.php';
	$sql = "SELECT ID_Store,name_store,Address_store FROM `store` where status=1 ORDER BY ID_Store ";
	$result =mysqli_query($dbconnect,$sql) or die("Bab SQL: $sql");
	
	$opt = "";
  $cout = 1;
	 
?>

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
          .ai
          {color:#CCC;
          text-shadow:-1px -1px #FFFFFF, 2px 2px #333333;}
          img{
            width: 200px;
          }
          </style>                     
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner"  style = "background-color:#000000; height: 50px;" >
	<div class="container">


  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <img src="css/img/b5.png" class="b5">
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link ai" href="index.php" style="color: white;">Logout</a>
          </li>
	   
    
    </ul>
  </div>
	</div>
</nav>

<div class="banner" style="background-image: url('css/img/bg_home.jpg'); height: 300px;" >
	<div class="container">
	<div class="banner-text">
	<div class="banner-heading">

	</div>
	</div>
	</div>
</div>
<section id="about">
<div class="container">
	<div class="text-intro">

	</div>
</div>
</section>

<!-- body -->
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 main">
        <h1 class="page-header" >Store</h1>
        <div class="table-responsive">
          <table id="myTable" class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>ชื่อร้าน</th>
                <th>ที่อยู่ร้าน</th>               
                <th>เข้าชม</th>
                <th>edit</th>
                <th>delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($row = mysqli_fetch_assoc($result)){
                  echo "<tr>";
                    echo "<td>".$cout."</td>\n";
                    echo "<td>".$row['name_store']."</td>\n";
                    echo "<td>".$row['Address_store']."</td>\n";   
                    echo "<td><a href='show_order.php' >เข้าชม</a></td>";
                    echo "<td><a href='edit_store.php?id=".$row['ID_Store']."'>edit</a></td>";
                    echo "<td><a href='connect/delete.php?id=".$row['ID_Store']."'>delete</a></td>";
                    echo "</tr>";
                  $cout++;		
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 main">
        <!-- <button onclick=" index.php" ">+</button> -->
        
        <input type="button" onclick="window.location.href='add_store.php'" value="+"> 
      </div>
    </div>
  </div>

  <!-- scrip -->
  <script>
    
    var t = document.getElementsByTagName('input');
    console.log(t.length);
    t[3].checked = true;

    // function deleteRow(r) {
    //   var i = r.parentNode.parentNode.rowIndex;
    //   document.getElementById("myTable").deleteRow(i);
    // }

    function deleteRows() {

      var x = document.getElementById("myTable")
      var list = document.getElementsByTagName("input");

      for (i = 0; i < list.length; i++) {
        if (list[i].checked == true) {
         
          x.deleteRow(i+1);
          i--;
        }
       
      }
    }

  </script>

  
   <!-- Bootstrap core JavaScript -->
   <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
</body>
</html>