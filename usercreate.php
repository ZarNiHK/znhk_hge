<?php
    include('dbconfig.php');

    $firstname = $_POST ['firstname'];
    $surname = $_POST ['surname'];
    $email= $_POST ['email'];
    $password  = $_POST ['password'];

    // echo $firstname;
    // echo $surname;
    
    $sql = "INSERT INTO `users` (`firstname`, `surname` ,`email`, `password`) VALUES ('".$firstname."', '".$surname."','".$email."', '".$password."');";

    if($conn->query($sql) == TRUE){
        header('location:userindex.php');
    }else{
        echo $conn->connect_error;
    }
    $conn -> close();
?>
