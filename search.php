<?php 
    include('header.php');
    include('dbconfig.php');

    $name = $_POST['name'];
    $sql = "SELECT * FROM products WHERE name LIKE '%".$name."%'";
    $result = $conn->query($sql);
?>

<div class="container">
    <div class="row">
        <main class="col-md-12 ml-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Products</h1>
            </div>

            <div class="row">
                <div class="col-md-4">
                   
                    <?php
                    if($result->num_rows > 0)
                    {
                ?>
                   
                        <?php
                            while($row = $result->fetch_assoc())
                            {
                        ?>
                        
                    
                    <div class="card" style="width: 18rem;">
                    <img src="uploads/<?php echo $row['images']; ?>" class="w-100" alt="">
                    <hr>
                    <div class="card-body">
                    <h4><strong><?php echo $row['name'];?></strong></h4><br>
                    <p><Strong><?php echo $row['price'];?>$</Strong></p>
                    <p><?php echo $row['description'];?></p>
                    </div>
                    <div class="card-footer">
                    <a href="#" class="btn btn-dark text-white">Order Now</a>
                    </div>
                    
                       
                        <?php
                            }
                        ?>
                    
                    <?php
                    }else{
                        echo "There is no records.";
                    }
                ?>
                </div>
            </div>
        </main>
    </div>
</div>
<br>
<?php include('footer.php');?>