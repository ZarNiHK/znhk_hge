<?php include('header.php');?>
<?php
    $atmp = 0;
if (isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    include ('dbconfig.php');
    $atmp = $_POST['hidden'];
    if($atmp<3){
    $query  = "SELECT * FROM users WHERE `email`='".$email."' AND `password`='".$password."'";
    $result = mysqli_query ($conn, $query);
    if($query){
        if (mysqli_num_rows($result)){
            while (mysqli_fetch_array($result)) {
                echo "<script> alert('You are logged in Successfully!'); window.location = 'userindex.php'; </script>";
            }
        }
        else{
            $atmp++;
            echo '<script> alert("You have invalid email/password and the number of attempt is '. $atmp .'");</script>';
        }
    }    
}
if ($atmp==3) {
    echo '<script> alert("You have invalid email/password!");window.location = "register.php";</script>';
  }
 }
?>
  <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto text-center " style="margin-top:50px;">
                <h3>Login Here!</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mx-auto border shadow-sm bg-white rounded p-5">
                <form action="" method="POST">
                <?php
echo "<input type = 'hidden' name = 'hidden' value =  '".$atmp."'>";
    ?>
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