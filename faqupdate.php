<?php   
    include('dbconfig.php');

    $id = $_GET['id'];
    $user_id = $_POST['user_id'];
    $question = $_POST['question'];
    $answer  = $_POST['answer'];

    $sql = "UPDATE `faq` SET `user_id` = '".$user_id."',`question` = '".$question."',`answer` = '".$answer."' WHERE `faq`.`id` = ".$id;

    


    if($conn->query($sql) == TRUE){
        header('location:faqindex.php');
    }else{
        echo $conn->error;
    }
    $conn->close();


?>
