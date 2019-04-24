<?php
	require 'connect/connect.php';
	$sql = "SELECT * FROM `type_productb` ORDER BY ID_Type_B ";
	$result =mysqli_query($dbconnect,$sql) or die("Bab SQL: $sql");
	
  $opt = "<select name='typeB'>";
  $opt .= "<option ></option>\n";
	while($row = mysqli_fetch_assoc($result)){
		$opt .= "<option value='{$row['ID_Type_B']}'>{$row['type_name']}</option>\n";		
	}
     
	 $opt .= "</select>";
	 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/add_order_css1.css">
</head>
<body>
<div class="loginbox" align = "center">
<img src="css/img/b13.jpg" class="b13">
<form action="connect/connect_add_typeS.php" method="post">
        <h1>เพิ่มหมวดหมู่สินค้าย่อย</h1>
        <table border="0" cellspacing="0" cellpadding="6" style="width: 360px">
        <tbody>
        <tr>
        <td>หมวดหมู่สินค้าหลัก</td>
        <td>
        <?php 
			
				echo $opt;
			
			?>
        </td>
      </tr>
         
      <tr>
        <td>ชื่อหมวดหมู่สินค้าย่อย</td>
        <td>
                <input type="text" name="typeS" placeholder="กรอกชื่อหมวดหมู่สินค้าย่อย">       
        </td>
      </tr>
      
        </tbody>
        </table>
        
        <input  type="submit" name=" " value="ตกลง">
        </form>
    </div>
    
</body>
</html>