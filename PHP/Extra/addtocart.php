<?php 
    session_start();
    require "./database.php";

    $sql = "INSERT INTO `cart table` VALUES(". $_SESSION['userid']. ", " . $_GET['id'] .")";

    $conn->query($sql);

    header("Location: ../Main/HomePage.php?type=ALL");
    exit();
?>