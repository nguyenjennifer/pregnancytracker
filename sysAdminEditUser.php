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
    <?php
    session_start();
    if ($_SESSION['role'] == 'System Administrator' && $_SESSION['is_logged_in'] == TRUE) {
    ?>
        <nav class="navbar navbar-light">
            <div class="container-fluid">
                <span class="h4 mb-0" style="color:#f9f9f9">Seed Tracker</span>
            </div>
        </nav>
        <div class="text-center">
            <h1 style="color:#3000a0"><strong>System Administrator Portal</strong></h1>
        </div>
        <div class="global-container2">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center m-3">Edit User Account Information</h6>
                        <form action="databaseEditUser.php" method="post">
                            <div class="form-group my-3">
                                <label>First Name</label>
                                <input name="editFirstName" type="text" class="form-control form-control-sm">
                            </div>
                            <div class="form-group my-3">
                                <label>Last Name</label>
                                <input name="editLastName" type="text" class="form-control form-control-sm">
                            </div>
                            <div class="form-group my-3">
                                <label>Username</label>
                                <input name="editUserName" type="text" class="form-control form-control-sm">
                            </div>
                            <div class="form-group my-3">
                                <label>Password</label>
                                <input name="editPassword" type="password" class="form-control form-control-sm">
                            </div>
                            <div class="form-group my-3">
                                <label>Role ([Patient], [Doctor], or [System Administrator])</label>
                                <input name="editRole" type="text" class="form-control form-control-sm">
                            </div>
                            <div class="form-group my-3">
                                <label>User ID</label>
                                <?php
                                echo '<input disabled name="editUserID" type="text" value="', $_GET['id'], '" class="form-control form-control-sm">';
                                ?>
                            </div>
                            <div class="text-center">
                                <button name="editUser" type="submit" class="btn btn-outline-dark mt-2">Save</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>

        <footer class="text-center mt-3">
            <form action="databaseLogout.php" method="post">
                <button name="logout" class="btn btn-outline-dark">Logout</button>
            </form>
        </footer>
        <script src="sysadmin.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <?php
    } else {
        header('location: login.php?err=Log in to view page.');
    } ?>
</body>

</html>