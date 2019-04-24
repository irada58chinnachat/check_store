 <?php

       $dbconnect = mysqli_connect('localhost','root','','check');

       if (mysqli_connect_errno()) {
         echo "ไม่สามารถติดต่อฐานข้อมูลได้". mysqli_connect_error();
         exit;
       }
       mysqli_set_charset($dbconnect, 'utf8');
 ?>
