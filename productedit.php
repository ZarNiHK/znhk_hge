<?php 
    include('adminheader.php');
    include('dbconfig.php');
    
    $id = $_GET['id'];

    $sql = "SELECT * FROM products WHERE id= $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<div class="container-fluid">
    <div class="row">
        <?php include('sidebar.php');?>

        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Edit User</h1>

            </div>

            <div class="row">
                <div class="col-md-12">
                <form action="productupdate.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <label for="name" class="form-label">name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'] ?>">
                        <br>
                        <label for="price" class="form-label">price</label>
                        <input type="text" class="form-control" id="price" name="price" value="<?php echo $row['price']?>">
                        <br>
                        <label for="">Description</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="10">
                            <?php echo $row['description'];?>
                        </textarea>
                        <br>
                        <label for="images" class="form-lable">images</label>
                        <img src="uploads/<?php echo $row['images'] ?>" height="150" alt="">
                        <input type="file" name="images" class="form-control" id="formFile">
                        <br>
                        <input type="submit" class="btn btn-success" value="Save Product">
                    
                    
                    </div>
                </form>
                    
                </div>
            </div>
        </main>
    </div>
</div>