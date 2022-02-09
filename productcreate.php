<?php
include('dbconfig.php');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["images"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) {
    
    $sql = "INSERT INTO `products` (`name`, `price`, `description`,`images`) VALUES ( '".$name."', '".$price."', '".$description."','".$_FILES["images"]["name"]."');";

    if($conn->query($sql) == TRUE){
        header('location:productindex.php');
    }else{
        echo $conn->error;
    }
    $conn->close();
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

?>