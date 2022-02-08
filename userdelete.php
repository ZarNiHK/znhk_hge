<?php

   include('dbconfig.php')
   $id = $_GET['id'];
   $sql = "DELETE FROM users WHERE id=".$id;
   if($conn->query($sql)){
       header('location:adminidex.php');
   }else{
       echo "Error";
   }
?>