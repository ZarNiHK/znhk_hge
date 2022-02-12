<?php 
    
    include('dbconfig.php');

    $id = $_GET['id'];

    $sql = "DELETE  FROM faq WHERE id = ".$id;
    

    if($conn->query($sql) == TRUE){
        header('location:faqindex.php');
    }else{
        echo $conn->error;
    }
    $conn->close();
?>