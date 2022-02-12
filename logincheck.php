<?php
session_start();
include('dbconfig.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE `email`='".$email."' AND `password`='".$password."'";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
    $_SESSION['email'] = $row['email'];
    header('location:productindex.php');
}
else{
    header('location:login.php');
}
?>