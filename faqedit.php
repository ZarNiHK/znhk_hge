<?php 
    include('adminheader.php');
    include('dbconfig.php');
    $id = $_GET['id'];
    $sql = "SELECT faq.*,users.firstname FROM `faq` INNER JOIN users ON faq.user_id = users.id WHERE faq.id=".$id;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>


<div class="container-fluid">
    <div class="row">
        <?php include('sidebar.php');?>

        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Edit FAQ</h1>

            </div>

            <div class="row">
                <div class="col-md-12">
                <form action="faqupdate.php?id=<?php echo $row['id'];?>" method="post">
                        <label for="">Username</label>
                        <?php
                            $user_sql = "SELECT * FROM users";
                            $user_result = $conn->query($user_sql);
                        ?>
                         <select name="user_id" class="form-control" id="">
                            <?php
                                while($user_row = $user_result->fetch_assoc())
                                {
                            ?>
                            <option value="<?php echo $user_row['id'];?>"<?php echo ($user_row['id'] == $row['user_id'])?"selected":"";?>>
                                <?php echo $user_row['firstname']; ?>
                        </option>
                        <?php
                                }
                        ?>
                        </select>
                        <br>
                        <label for="">Question</label>
                        <textarea name="question" id="" class="form-control" cols="30" rows="10">
                            <?php echo $row['question'];?>
                        </textarea>
                        <br>
                        <label for="">Answer</label>
                        <textarea name="answer" id="" class="form-control" cols="30" rows="10">
                            <?php echo $row['answer'];?>
                        </textarea>
                        <br>
                        <input type="submit" class="btn btn-success" value="Save FAQ">
                        

                    </form>
                    
                </div>
            </div>
        </main>
    </div>
</div>
<?php include('adminfooter.php');?>