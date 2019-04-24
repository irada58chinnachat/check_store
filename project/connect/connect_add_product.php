<?php
      require 'connect.php';

     
      $typeB = $_POST['typeB'];
      $typeS = $_POST['typeS'];
      $barcode = $_POST['barcode'];
      $brand = $_POST['brand'];
      $gen = $_POST['gen'];
      $count = $_POST['count'];
      $price = $_POST['price'];
      $sumprice = $_POST['sum_price'];


      
	
      //ดึงusername มาใช้หาID_USER
      session_start();
      if (!isset($_SESSION['ID_User'])) {
        header("Location: project/login.php");
      }
      
      $session_login_id = $_SESSION['ID_User'];

      $qry_user = " SELECT * FROM user_login WHERE ID_User = $session_login_id";
      $result_user = mysqli_query($dbconnect,$qry_user);
      if ($result_user) {
        $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
        $s_login_username = $row_user['Username'];
        $s_login_password = $row_user['Password'];
        mysqli_free_result($result_user);
      }
      
      $query2 = "SELECT `ID_User` FROM `user_login` WHERE Username = '$session_login_id' " or die("Error:" . mysqli_error()); 
	
      $result2 = mysqli_query($dbconnect, $query2); 

      $row2 = mysqli_fetch_array($result2);
       
      $us=$row2["ID_User"];
      
      $query1 = "SELECT `ID_Store` FROM `store` WHERE ID_User = '$us' " or die("Error:" . mysqli_error()); 
      
      $result1 = mysqli_query($dbconnect, $query1); 

      $row1 = mysqli_fetch_array($result1);
      
      $st=$row1["ID_Store"] ;

      //สร้างid
      // $connn = new mysqli("localhost", "root", "", "check");
      // $sql = "SELECT * FROM `store`";
      // $connStatus = $connn->query($sql);
      // $numberOfRows = mysqli_num_rows($connStatus);
      
      // //this echo out the total number of rows returned from the query
      
      // $connn->close();

      // $startid ="P";
      // $startnumber="10000";

      
      

      // $maxId =$numberOfRows; 
      // // echo $maxId."<br>";
      // $maxId= ($maxId+1);
      // $maxId = substr ($startnumber. $maxId,-5); 
      // $autoid=$startid.$maxId;

      
      



      //ส่งข้อมูลเข้าตารางstore
      $query = " INSERT INTO product (ID_Store,ID_Product,ID_Type_B,ID_Type_S,brand,gen,num_product,price_item,price_sum) VALUES('$st','$barcode','$typeB','$typeS','$brand','$gen','$count','$price','$sumprice')";    
      $result = mysqli_query($dbconnect,$query);
      if ($result) {
        header("Location: ../show_order.php");
      } else {
        echo "เกิดข้อผิดพลาด". mysqli_error($dbconnect);
      }
      
      mysqli_close($dbconnect);
?>