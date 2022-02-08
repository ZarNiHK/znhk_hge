<?php include_once('dbconfig.php');
   $firstname = $_POST['firstname'];
   $surname = $_POST['surname'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   $sql = "INSERT INTO users(`firstname`,`surname`,`email`,`password`) VALUES('".$firstname."','".$surname."','".$email."','".$password."')";
   if($conn->query($sql) == TRUE){
       header('location:success.php');
   }else{
       echo $conn->error;
   }
   $conn->close();
?>

