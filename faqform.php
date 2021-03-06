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
            <div class="row">
                <div class="col-md-12">
                    <h3>FAQ Entry</h3>
                </div>
               

            </div>

            <div class="row">
                <div class="col-md-5">
                    <form action="faqcreate.php" method="post">
                        <label for="">Username</label>
                        <select name="user_id" class="form-control" id="">
                            <?php
                                while($row = $result->fetch_assoc())
                                {
                            ?>
                            <option value="<?php echo $row['id'];?>">
                                <?php echo $row['firstname']; ?>
                        </option>
                        <?php
                                }
                        ?>
                        </select>
                        <br>
                        <label for="">Question</label>
                        <textarea name="question" id="" class="form-control" cols="30" rows="10"></textarea>
                        <br>
                        <label for="">Answer</label>
                        <textarea name="answer" id="" class="form-control" cols="30" rows="10"></textarea>
                        <br>
                        <input type="submit" class="btn btn-success" value="Save FAQ">
                        

                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
<?php include('adminfooter.php');?>