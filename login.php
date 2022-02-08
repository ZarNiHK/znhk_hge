<?php include('header.php');?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto text-center " style="margin-top:50px;">
                <h3>Login Here!</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mx-auto border shadow-sm bg-white rounded p-5">
                <form action="logincheck.php" method="POST">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">FirstName</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstname">
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">SurName</label>
                        <input type="text" class="form-control" id="surname" name="surname"  aria-describedby="surname">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">

                    </div>
                    <div class="mb-3 form-check">
                        <a href="register.php">Register here</a>
                    </div>
                    <button type="submit" class="btn btn-warning">Login</button>
                </form>
            </div>
        </div>
    </div>
    <br>

<?php include('footer.php');?>