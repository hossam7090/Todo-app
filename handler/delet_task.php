<?php

    session_start();

    if(isset($_GET["id"])){
        $conn = mysqli_connect("localhost","root","8520","todo");
        if(!$conn)
            echo "error is :" . mysqli_connect_error();
        $id = $_GET["id"];
        $sql = "DELETE FROM tasks WHERE id =$id ";
        $result =mysqli_query($conn,$sql);
        if($result)
            $_SESSION['success'] = 'data deleted successful';

        header('location:../index.php');
    }
?>