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
 ////////////////////  
   $sql1 = "SELECT * FROM `type_products` ORDER BY ID_Type_S ";
	$result1 =mysqli_query($dbconnect,$sql1) or die("Bab SQL: $sql");
	
  $opt1 = "<select name='typeS'>";
  $opt1 .= "<option ></option>\n";
	while($row = mysqli_fetch_assoc($result1)){
    	
		$opt1 .= "<option value='{$row['ID_Type_S']}'>{$row['type_nameS']}</option>\n";		
	}
     
	 $opt1 .= "</select>";
	 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/add_order_css.css">
</head>
<body>
<div class="loginbox" align = "center">
<img src="css/img/b10.jpg" class="b10">
<form action="connect/connect_add_product.php" method="post">
        <h1>ข้อมูลสินค้า</h1>
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
        <td>หมวดหมู่สินค้าย่อย</td>
        <td>
        <?php 
			
				echo $opt1;
			
			?>
        </td>
      </tr>
      <tr>
        <td>รหัสสินค้า</td>
        <td>
                <input type="text" name="barcode" placeholder="กรอกรหัสสินค้า">       
        </td>
      </tr>
      <tr>
        <td>แบรนด์สินค้า</td>
        <td>
                <input type="text" name="brand" placeholder="กรอกชื่อแบรนด์">       
        </td>
      </tr>
      <tr>
        <td>รุ่น</td>
        <td>
                <input type="text" name="gen" placeholder="กรอกชื่อรุ่น">       
        </td>
      </tr>
      <tr>
        <td>จำนวนสินค้า</td>
        <td>
                <input type="text" name="count" placeholder="กรอกจำนวนสินค้า" id="num" onkeyup="myFunction()">       
        </td>
      </tr>
      <tr>
        <td>ราคาสินค้าต่อชิ้น</td>
        <td>
                <input type="text" name="price" placeholder="กรอกราคาสินค้า" id="price" onkeyup="myFunction()">       
        </td>
      </tr>
      <tr>
        <td>ราคารวม</td>
        <td>
                <input type="text" name="sum_price" placeholder="ราคารวม" id="sum" >       
        </td>
      </tr>
        </tbody>
        </table>
        <!-- <form>
            
            <input type="text" name=" " placeholder="กรอกชื่อร้านค้า"> -->
            
            <!-- <input type="submit" name=" " value="ตกลง">
        </form><br> -->
        <input type="submit" name=" " value="ตกลง">
        </form>
    </div>
    <script>
      var num = document.getElementById('num');
      var price = document.getElementById('price');
      var sum = document.getElementById('sum');
      function myFunction() {
        sum.value = num.value*1 * price.value*1;
      }
    </script>
    
</body>
</html>