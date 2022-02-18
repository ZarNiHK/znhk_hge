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
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" aria-describedby="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">

                    </div>
                    <div class="mb-3 form-check">
                        <a href="register.php">Register here</a>
                    </div>
                    <button type="submit" class="btn btn-warning" name="login" value="login">Login</button>
                </form>
            </div>
        </div>
    </div>
    <br>

<?php include('footer.php');?>