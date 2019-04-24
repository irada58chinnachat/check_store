<!DOCTYPE html>
<html lang="en">
<head>
<title>login Form Design</title>
     <link rel="stylesheet" type="text/css" href="css/back store1.css"> 
</head>
<?php
    require 'connect/connect.php';
    $id=$_GET['id'];
    $sql = " SELECT * FROM store WHERE ID_Store = '$id'";
    $result =mysqli_query($dbconnect,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<body>
    <div class="loginbox">
    <img src="css/img/b7.jpg" class="b1">
        <h1>แก้ไขร้านค้า</h1>
        <form action="connect/connect_edit_store.php" method="post">
            <p>ชื่อร้านค้า</p>
            <input type="text" name="name" placeholder="กรอกชื่อร้านค้า" value="<?=$row['name_store']?>">
            <p>ที่อยู่ร้านค้า</p>
            <input type="text" name="address" placeholder="กรอกที่อยู่ร้านค้า" value="<?=$row['Address_store']?>">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" name=" " value="ตกลง">
        </form>
    </div>
</body>
</html>