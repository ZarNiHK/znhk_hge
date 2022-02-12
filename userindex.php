<?php 
    include('adminheader.php');
    include('dbconfig.php');
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
?>
<div class="container-fluid">
    <div class="row">
        <?php include('sidebar.php');?>

        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Users</h1>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <a href="userform.php" class="btn btn-warning">Add User</a>
                    <?php
                    if($result->num_rows > 0)
                    {
                ?>
                    <table class="table">
                        <tr>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th></th>
                        </tr>
                        <?php
                            while($row = $result->fetch_assoc())
                            {
                        ?>
                        <tr>
                            <td><?php echo $row['firstname'].'-'.$row['surname'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['password'];?></td>
                            <td>
                                <a href="userdelete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>

                                <a href="useredit.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a>
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