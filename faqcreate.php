
<?php
include('dbconfig.php');
$question = $_POST['question'];
$answer = $_POST['answer'];

$sql = "INSERT INTO `faq` (`question`,`answer`) VALUES ('".$question."','".$answer."');";

if($conn->query($sql) == TRUE){
    header('location:faqindex.php');
}else{
    echo $conn->error;
}
$conn->close();
?>

