<?php
    include('dbconfig.php');
    
    $id = $_GET['id'];

    $sql = "DELETE FROM products WHERE id = ".$id;
    $result = $conn->query($sql);

    if($conn->query($sql) == TRUE){
        header('location:productindex.php');
    }else{
        echo $conn->error;
    }
    $conn->close();
?>