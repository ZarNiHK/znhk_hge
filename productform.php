<?php 
    include('adminheader.php');
    include('dbconfig.php');
    $sql = "SELECT * FROM `users`";
    $result = $conn->query($sql);
?>

<div class="container-fluid">
    <div class="row">
        <?php include('sidebar.php');?>
        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
            <div class="row">
                <div class="col-md-12">
                    <h3>Products</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <form action="productcreate.php" method="post" enctype="multipart/form-data">
                        <label for="">Product Name</label>
                        <input type="text" name="name" id="" class="form-control">
                        <br>
                        <label for="">Price</label>
                        <input name="price" id="" class="form-control" type="text"></input>
                        <br>
                        <label for="">Description</label>
                        <textarea name="description" id="" class="form-control" cols="30" rows="10"></textarea>
                        <br>
                        <label for="formFile" class="form-label">Image</label>
                        <input type="file" name="images" class="form-control" id="formFile">
                        <br>
                        <input type="submit" class="btn btn-success" value="Save Product">
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
<?php include('adminfooter.php');?>