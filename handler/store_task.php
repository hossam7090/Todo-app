<?php
    session_start();
    $conn = mysqli_connect("localhost","root","8520","todo");
    if(!$conn)
        echo "error is :" . mysqli_connect_error();
    if($_POST["title"]){
        $title = trim(htmlspecialchars(htmlentities($_POST["title"])));
        var_dump($_POST);
        $sql = "INSERT INTO `tasks` (`title`) VALUES ('$title')";
        try{
            $result =mysqli_query($conn,$sql);
        }
        catch(mysqli_sql_exception $e){
            echo $e->getMessage();
        }

        if($result)
            $_SESSION['success'] = 'data inserted successful';

        header('location:../index.php');
        
    }
?>