<?php
      require 'connect.php';

     
      $typeB = $_POST['typeB']; //หมวดหมู่หลัก
      $name_typeS = $_POST['typeS']; //หมวดหมู่ย่อย
     

      //ดึงusername มาใช้ทำรหัสร้านค้า
    //   session_start();
    //   if (!isset($_SESSION['ID_User'])) {
    //     header("Location: project/login.php");
    //   }
      
    //   $session_login_id = $_SESSION['ID_User'];

    //   $qry_user = " SELECT * FROM user_login WHERE ID_User = $session_login_id";
    //   $result_user = mysqli_query($dbconnect,$qry_user);
    //   if ($result_user) {
    //     $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
    //     $s_login_username = $row_user['Username'];
    //     $s_login_password = $row_user['Password'];
    //     mysqli_free_result($result_user);
    //   }
    //   $IDuser =$_SESSION['login_id'];
      
      
      

      //สร้างid
      $connn = new mysqli("localhost", "root", "", "check");
      $sql = "SELECT * FROM `type_products`";
      $connStatus = $connn->query($sql);
      $numberOfRows = mysqli_num_rows($connStatus);
      
      //this echo out the total number of rows returned from the query
      
      $connn->close();

      $startid ="S";
      $startnumber="10000";

      
      

      $maxId =$numberOfRows; 
      // echo $maxId."<br>";
      $maxId= ($maxId+1);
      $maxId = substr ($startnumber. $maxId,-5); 
      $autoid=$startid.$maxId;

      
      

//หาวิธีเช็คloginเพื่อเอาuserมาใช้

      //ส่งข้อมูลเข้าตารางstore
      $query = " INSERT INTO type_products (ID_Type_B,ID_Type_S,type_nameS) VALUES('$typeB','$autoid','$name_typeS')";    
      $result = mysqli_query($dbconnect,$query);
      if ($result) {
        header("Location: ../admin.php");
      } else {
        echo "เกิดข้อผิดพลาด". mysqli_error($dbconnect);
      }
      
      mysqli_close($dbconnect);
?>