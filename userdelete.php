<?php

   include('dbconfig.php');
   
   $id = $_GET['id'];

   $sql = "DELETE FROM users WHERE id=".$id;
   if($conn->query($sql)){
       header('location:userindex.php');
   }else{
       echo "Error";
   }
?>