<?php
      require 'connect.php';

      $login_firstname = $_POST['firstname']; //$login_name
      $login_lastname = $_POST['lastname'];
      $login_username = $_POST['username'];
      $login_password = $_POST['password'];
      $login_email = $_POST['email'];
      $login_tel = $_POST['phone'];
      $login_address = $_POST['address'];



      //เข้ารหัส รหัสผ่าน   กันไม่ให้คนอื่นเอารหัสไปใช้
      $salt = 'kjbifdjbiorejbkjflkmdbsjbfuirhbrjkn';
      $hash_login_password = hash_hmac('sha256','$login_password',$salt);


      //สร้างid
      $connn = new mysqli("localhost", "root", "", "check");
      $sql = "SELECT * FROM `user`";
      $connStatus = $connn->query($sql);
      $numberOfRows = mysqli_num_rows($connStatus);
      echo $numberOfRows; 
      //this echo out the total number of rows returned from the query
      
      $connn->close();

      $startid ="US";
      $startnumber="10000";
      $maxId =$numberOfRows; 
      echo $maxId."<br>";
      $maxId= ($maxId+1);
      $maxId = substr ($startnumber. $maxId,-5); 
      $autoid=$startid.$maxId;

      // echo $login_firstname ;
      // echo $login_lastname;
      // echo $login_username;
      // echo $login_password;
      // echo $login_email ;
      // echo $login_tel ;
      // echo $login_address ;
      //  echo $autoid;



      //ส่งข้อมูลเข้าตารางuser
      $query1 = " INSERT INTO user (ID_User,First_Name,Last_Name,Address,Phone_No,email) VALUES('$autoid','$login_firstname','$login_lastname','$login_address','$login_tel','$login_email')";    
      $result1 = mysqli_query($dbconnect,$query1);
      if ($result1) {
        header("Location: index.php");
      } else {
        echo "เกิดข้อผิดพลาด". mysqli_error($dbconnect);
      }
      
      
///2
    $query2 = " INSERT INTO user_login (ID_User,Username,Password) VALUES('$autoid','$login_username','$hash_login_password')";
    $result2 = mysqli_query($dbconnect,$query2);    

      if ($result2) {
        header("Location: ../login.php");
      } else {
        echo "เกิดข้อผิดพลาด". mysqli_error($dbconnect);
      }
      mysqli_close($dbconnect);
?>