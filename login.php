<?php
include("databaseLogin.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seed Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <span class="h4 mb-0" style="color:#f9f9f9">Seed Tracker</span>
        </div>
    </nav>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h3 class="text-center m-3">Sign In</h3>
                <!-- <div id="signInError" class="alert alert-danger alert-dismissible fade show mb-1" role="alert">Incorrect username or password.</div> -->
                <form action="databaseLogin.php" method="post">
                    <div class="form-group my-3">
                        <label>Username</label>
                        <input name="username" id="loginUsername" type="text" class="form-control form-control-sm">
                    </div>
                    <div class="form-group my-3">
                        <label>Password</label>
                        <input name="password" id="loginPassword" type="password" class="form-control form-control-sm">
                        <a href="resetPassword.php" class="mt-2" style="font-size:13px;">Forgot
                            password?</a>
                    </div>
                    <div class="text-center">
                        <?php
                        if (isset($_GET['err'])) {
                            echo '<p style="color: red;">', $_GET['err'], '</p>';
                        }
                        ?>
                        <button id="loginSubmit" type="submit" class="btn btn-outline-dark mt-2">Sign in</button>
                        <!-- Output error message if username and/or password is incorrect and doesn't match anything in the database -->

                    </div>
                    <div class="text-center pt-2">
                        Don't have an account? <a href="signUp.php">Create One</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>