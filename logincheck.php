<?php
session_start();
include('dbconfig.php');

$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE `firstname`='".$firstname."' AND `surname`='".$surname."' AND `password`='".$password."'";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
    $_SESSION['firstname'] = $row['firstname'];
    header('location:loginsuccess.php');
}
else{
    header('location:login.php');
}
?>