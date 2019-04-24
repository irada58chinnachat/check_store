<?php
    require 'connect.php';
    
    $id=$_GET['id'];
    $ID_Product = $_GET['ID_Product'];
    $sql1 = " SELECT * FROM product WHERE ID_Store = '$id' AND ID_Product='$ID_Product'";
    $result =mysqli_query($dbconnect,$sql1);
    $row = mysqli_fetch_assoc($result);
    
    
   
    //echo $id.$ID_Product;
    echo $id;
    echo  $ID_Product;
    // $a=$row['num_product'];
    // $minus=$a-1;
    // echo $a;
    // echo  $minus;

    // $sql = "update product set num_product= '$minus'";
    // mysqli_query($dbconnect,$sql);
    // mysqli_close($dbconnect);
    // header("Location: ../show_order.php");
?>