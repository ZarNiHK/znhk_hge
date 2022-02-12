<?php   
    include('dbconfig.php'); 
    
    $id = $_GET['id'];
    $name = $_POST ['name'];
    $price = $_POST ['price'];
    $description = $_POST ['description'];

    $image = $_FILES['images']['name'];
    $tmp = $_FILES['images']['tmp_name'];
    // echo $image;
    if($image) {
    move_uploaded_file($tmp, "/uploads/$image");
    $sql = "UPDATE `product` SET `name` = '".$name."',`price` = '".$price."',`description` = '".$description."',`images` = '".$_FILES["images"]["name"]."' WHERE `id` = ".$id;
    }
    else{
    $sql = "UPDATE `product` SET `name` = '".$name."',`price` = '".$price."',`description` = '".$description."' WHERE `id` = ".$id;
    }

   
    if($conn->query($sql) == TRUE){
        header('location:productindex.php');
    }else{
        echo $conn->error;
    }
    $conn->close();

    ?>