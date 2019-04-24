<!DOCTYPE html>
<html lang="en">
<head>
<title>login Form Design</title>
     <link rel="stylesheet" type="text/css" href="css/back store1.css"> 
</head>
<?php
    require 'connect/connect.php';
    $id=$_GET['id'];
    $sql = " SELECT num_product FROM product WHERE ID_Store = '$id'";
    $result =mysqli_query($dbconnect,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<body>
    <div class="loginbox">
    <img src="css/img/b7.jpg" class="b1">
        <h1>ลดสินค้า</h1>
        <form action="#"><!-- action="connect/connect_edit_minus.php" method="get" -->
            <p>รหัสสินค้า</p>
            <input type="text" name="ID_Product" placeholder="กรอกรหัสสินค้า" value="<?=$row['ID_Product']?>">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" name=" " value="-">
        </form>
    </div>
</body>
</html>