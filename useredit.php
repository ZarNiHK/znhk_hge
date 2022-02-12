<?php 
    include('adminheader.php');
    include('dbconfig.php');
    
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id= $id";
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
                <form action="userupdate.php?id=<?php echo $row['id'];?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        <label for="firstname" class="form-label">firstname</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $row['firstname'] ?>">
                        <br>
                        <label for="surname" class="form-label">surname</label>
                        <input type="text" class="form-control" id="surname" name="surname" value="<?php echo $row['surname']?>">
                        <br>
                        <label for="email" class="form-lable">Email</label>
                        <input type="email" class="form-control" id="email " name="email" value="<?php echo $row['email'] ?>">
                        <br>
                        <label for="password" class="form-lable">Password</label>
                        <input type="Password" class="form-control" id="password" name="password" value="<?php echo $row['password'] ?>">
                        <br>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                    
                </div>
            </div>
        </main>
    </div>
</div>
<?php include('adminfooter.php');?>