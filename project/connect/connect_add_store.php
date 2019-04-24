<?php
      require 'connect.php';

      $name = $_POST['name']; //ชื่อร้าน
      $address = $_POST['address']; //ที่อยู่ร้าน

      
	
      
      //ดึงusername มาใช้ทำรหัสร้านค้า
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
      $IDuser =$_SESSION['login_id'];
      
      //ดึงรหัสลูกค้า
      $query = "SELECT `ID_User` FROM `user_login` WHERE Username = '$session_login_id' " or die("Error:" . mysqli_error()); 
	
      $result = mysqli_query($dbconnect, $query); 

      $row = mysqli_fetch_array($result);
      echo "<br>";
      $IDU =$row["ID_User"] ; 

      //สร้างid
      $connn = new mysqli("localhost", "root", "", "check");
      $sql = "SELECT * FROM `store`";
      $connStatus = $connn->query($sql);
      $numberOfRows = mysqli_num_rows($connStatus);
      
      //this echo out the total number of rows returned from the query
      
      $connn->close();

      $startid ="ST";
      $startnumber="10000";

      
      $a=(-(strlen($IDuser))+3);
      $endid = substr ($IDuser,0,$a); 

      $maxId =$numberOfRows; 
      // echo $maxId."<br>";
      $maxId= ($maxId+1);
      $maxId = substr ($startnumber. $maxId,-5); 
      $autoid=$startid.$maxId.$endid;

      
      

//หาวิธีเช็คloginเพื่อเอาuserมาใช้

      //ส่งข้อมูลเข้าตารางstore
      $query = " INSERT INTO store (ID_User,ID_Store,name_store,Address_store,status) VALUES('$IDU','$autoid','$name','$address',1)";    
      $result = mysqli_query($dbconnect,$query);
      if ($result) {
        header("Location: ../show_store.php");
      } else {
        echo "เกิดข้อผิดพลาด". mysqli_error($dbconnect);
      }
      
      mysqli_close($dbconnect);
?>