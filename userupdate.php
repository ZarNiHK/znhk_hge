<?php   
    include('dbconfig.php'); 

    $id = $_GET['id'];
    $firstname = $_POST ['firstname'];
    $surname = $_POST ['surname'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];

    // echo $id;
    // echo $firstname;

    $sql = "UPDATE `users` SET `firstname` = '".$firstname."',`surname` = '".$surname."',`email` = '".$email."',`password` = '".$password."' WHERE `id` = ".$id;


    if($conn->query($sql) == TRUE){
        header('location:userindex.php');
    }else{
        echo $conn->error;
    }
    $conn->close();

    ?>