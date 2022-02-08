
<?php
include('dbconfig.php');
$user_id = $_POST['user_id'];
$question = $_POST['question'];
$answer = $_POST['answer'];

$sql = "INSERT INTO `faq` (`user_id`,`question`,`answer`) VALUES ('".$user_id."','".$question."','".$answer."');";

if($conn->query($sql) == TRUE){
    header('location:adminindex.php');
}else{
    echo $conn->error;
}
$conn->close();
?>

