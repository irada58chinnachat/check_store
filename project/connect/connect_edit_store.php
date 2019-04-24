<?php
    require 'connect.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address =$_POST['address'];
    echo $id.$name.$address;
    $sql = "update store set name_store= '$name',Address_store='$address' WHERE ID_Store='$id'";
    mysqli_query($dbconnect,$sql);
    mysqli_close($dbconnect);
    header("Location: ../show_store.php");
?>