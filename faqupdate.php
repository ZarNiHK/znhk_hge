<?php
include('dbconfig.php');
$id = $_GET['id'];
$question = $_POST['question'];
$answer = $_POST['answer'];

$sql = "UPDATE `znhk_hge`.`faq` SET `question` = '".$question."',`answer` = '".$answer."' WHERE `faq`.`id` =".$id;

if($conn->query($sql) == TRUE){
    header('location:faqindex.php');
}else{
    echo $conn->error;
}
$conn->close();
?>
