<?php
    require 'connect.php';
    $id = $_GET['id'];
    $sql = "update store set status= 0 WHERE ID_Store='$id'";
    mysqli_query($dbconnect,$sql);
    mysqli_close($dbconnect);
    header("Location: ../show_store.php");
?> 