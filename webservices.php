<?php
 
 include('dbconfig.php');
 $sql = "SELECT * FROM products";
 $result = $conn->query($sql);
 while($r = mysqli_fetch_assoc($result)){
     $msg[] = array("name" => $r['name'], "price" => $r['price'], "description" => $r['description'], "images" => $r['images']);
 }
 $json = $msg;

 header('content-type : application/json');
 echo json_encode($json);

 $conn->close();
?>