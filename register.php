<?php include('header.php');?>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">
                Registration Form
            </h3>
        </div>
    </div>
</div>
<div class="container py-3">
    <div class="row">
        <div class="col-md-8 offset-md-2 rounded border p-3 shadow ">
            <form action="registerinfo.php" method="POST">
                <label for="">First Name</label>
                <input type="text" name="firstname" id="" class="form-control">
                <label for="">SurName</label>
                <input type="text" name="surname" id="" class="form-control">
                <label for="">Email</label>
                <input type="email" name="email" id="" class="form-control">
                <label for="">Password</label>
                <input type="password" name="password" id="" class="form-control">
                <br>
                <input type="submit" value="Register" class="btn btn-warning">
            </form>
        </div>
    </div>
</div>
<?php include('footer.php');?>
