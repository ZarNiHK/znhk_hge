<?php include('adminheader.php');?>
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
                    <form method="POST" action="usercreate.php">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="firstname" name="firstname">
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Sur Name</label>
                                            <input type="text" class="form-control" id="surname" name="surname">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password">
                                        </div>
                                        <button type="submit" class="btn btn-secondary  mt-3">Submit</button>
                         </form>
                </div>
            </div>
        </main>
    </div>
</div>
<?php include('adminfooter.php');?>