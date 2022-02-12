<?php include('adminheader.php');?>
    <div class="container-fluid">
        <div class="row">
            <?php include('sidebar.php');?>
    
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Welcome to Admin Dashboard</h1>
                    
                </div>

            <div class="row">
                <div class="col-md-6">
                    <h4>Get Started</h4>
                    <br>
                    <button class= "btn btn-primary">Customize site</button>
                    <br><br>
                    <p>Or change theme.</p>
                </div>
                <div class="col-md-6">
                    <h4>
                        Next Steps
                    </h4>
                    <br>
                    <p><a href="userindex.php">Edit Users</a></p>
                    <br>
                    <p><a href="productsindex.php">Edit Products</a></p>
                    <br>
                    <p><a href="faqindex.php">Edit FAQs</a></p>
                </div>
            </div>
            </main>
        </div>
    </div>
<?php include('adminfooter.php');?>