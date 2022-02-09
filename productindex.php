<?php 
    include('adminheader.php');
    include('dbconfig.php');
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
?>
<div class="container-fluid">
    <div class="row">
        <?php include('sidebar.php');?>
        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Products</h1>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <a href="productform.php" class="btn btn-success">Add Products</a>
                    <?php
                    if($result->num_rows > 0)
                    {
                ?>
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Images</th>
                            <th></th>
                        </tr>
                        <?php
                            while($row = $result->fetch_assoc())
                            {
                        ?>
                        <tr>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['price'];?></td>
                            <td class="w-50"><?php echo $row['description'];?></td>
                            <td><img src="uploads/<?php echo $row['images'];?>" class="w-25" alt=""></td>
                            <td>
                                <a href="productdelete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>

                                <a href="edituser.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
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
<?php include('adminfooter.php');?>