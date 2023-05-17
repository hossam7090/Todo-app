<?php
    $conn = mysqli_connect("localhost","root","8520");
    if(!$conn)
        echo "error is :" . mysqli_connect_error();
    $sql = "CREATE DATABASE IF NOT EXISTS todo";
    mysqli_query($conn,$sql);
    echo "<pre>";
    var_dump($conn);
    mysqli_close($conn);
    $conn = mysqli_connect("localhost","root","8520","todo");
    if(!$conn)
        echo "error is :" . mysqli_connect_error();
    $sql = "CREATE TABLE IF NOT EXISTS tasks(
        id INT PRIMARY KEY AUTO_INCREMENT,
        title VARCHAR(200) NOT NULL
    )";
    mysqli_query($conn,$sql);
    echo "<pre>";
    var_dump($conn);
    mysqli_close($conn);


?>