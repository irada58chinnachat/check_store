<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('connect/connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM store ORDER BY ID_User asc" or die("Error:" . mysqli_error()); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($dbconnect, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 

echo "<table border='1' align='center' width='500'>";
//หัวข้อตาราง
echo "<tr align='center' bgcolor='#CCCCCC'><td>id Store</td><td>name</td><td>address</td><td>ID_user</td><td>แก้ไข</td><td>ลบ</td></tr>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td>" .$row["ID_Store"] .  "</td> "; 
  echo "<td>" .$row["name_store"] .  "</td> ";  
  echo "<td>" .$row["Address_store"] .  "</td> ";
  echo "<td>" .$row["ID_User"] .  "</td> ";
  
  //แก้ไขข้อมูล
  echo "<td><a href='UserUpdateForm.php?ID=$row[0]'>edit</a></td> ";
  
  //ลบข้อมูล
  echo "<td><a href='UserDelete.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\">del</a></td> ";
  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($dbconnect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
</body>
</html>