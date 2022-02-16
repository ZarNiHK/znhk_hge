<?php
   $servername ="localhost";
   $username = "root"; 
   $password = "";
   $dbname = "znhk_hge";
   $conn = new mysqli($servername,$username,$password,$dbname);
   //var_dump($conn); 

   if($conn->connect_error){
       die('error'.$conn->connect_error);
   }
   
?>