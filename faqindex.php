<?php 
    include('adminheader.php');
    include('dbconfig.php');
    $sql = "SELECT * FROM faq";
    $result = $conn->query($sql);
?>

<div class="container-fluid">
    <div class="row">
        <?php include('sidebar.php');?>

        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">FAQ</h1>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <a href="faqform.php" class="btn btn-warning">Add FAQ</a>
                    <?php
                    if($result->num_rows > 0)
                    {
                ?>
                    <table class="table">
                        <tr>
                            
                            <th>Question</th>
                            <th>Answer</th>
                            <th></th>
                        </tr>
                        <?php
                            while($row = $result->fetch_assoc())
                            {
                        ?>
                        <tr>
                            
                            <td class="w-25"><?php echo $row['question'];?></td>
                            <td class="w-25"><?php echo $row['answer'];?></td>
                            <td>
                                <a href="faqdelete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>

                                <a href="faqedit.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a>
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