<?php
    $atmp = 0;
if (isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    include ("dbconfig.php");
    $atmp = $_POST['hidden'];
    if($atmp<3){
    $query  = "SELECT * FROM users WHERE `email`='".$email."' AND `password`='".$password."'";
    $result = mysqli_query ($conn, $query);
    if($query){
        if (mysqli_num_rows($result)){
            while (mysqli_fetch_array($result)) {
                echo "<script> alert('You are logged in Successfully!'); window.location = 'userindex.php'; </script>";
            }
        }
        else{
            $atmp++;
            echo '<script> alert("You have invalid username/password and the number of attempt is '. $atmp .'");window.location = "login.php";</script>';
        }
    }    
}
if ($atmp==3) {
    echo '<script> alert("You have invalid username/password!");window.location = "register.php";</script>';
  }
 }
?>

