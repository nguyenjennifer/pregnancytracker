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
<?php
session_start();
?>

<body>
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <span class="h4 mb-0" style="color:#f9f9f9">Seed Tracker</span>
        </div>
    </nav>
    <div class="text-center">
        <h1 style="color:#3000a0"><strong>System Administrator Portal</strong></h1>
    </div>
    <div class="container">
        <div class="row gutters">
            <div class="col-auto">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="text-center m-3">Create A Doctor Account</h5>
                        <form action="createdoctor.php" method="post">
                            <div class="form-group my-3">
                                <label>First Name</label>
                                <input name="doctorFirstName" type="text" class="form-control form-control-sm">
                            </div>
                            <div class="form-group my-3">
                                <label>Last Name</label>
                                <input name="doctorLastName" type="text" class="form-control form-control-sm">
                            </div>
                            <div class="form-group my-3">
                                <label> Birth Date</label><br>
                                <input name="doctorBirthDate" type="date" id="start" value="" min="1900-01-01" max="2022-12-02">
                            </div>
                            <div class="form-group my-3">
                                <label>Username</label>
                                <input name="doctorUsername" type="text" class="form-control form-control-sm">
                            </div>
                            <div class="form-group my-3">
                                <label>New Password</label>
                                <input name="doctorPassword" type="password" class="form-control form-control-sm">
                            </div>
                            <div class="form-group my-3">
                                <label>Confirm Password</label>
                                <input name="doctorConfirmPassword" type="password" class="form-control form-control-sm">
                            </div>
                            <div class="text-center">
                                <?php
                                if (isset($_GET['err'])) {
                                    echo '<p style="color: red;">', $_GET['err'], '</p>';
                                } else if (isset($_GET['succ'])) {
                                    echo '<p style="color: green;">', $_GET['succ'], '</p>';
                                }
                                ?>
                                <button id="createDoctorAccountSubmit" type="submit" class="btn btn-outline-dark mt-2">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <input type="text" id="searchBar" onkeyup="myFunction()" placeholder=" Record Search">

                        <table id="recordsTable">
                            <tr class="header">
                                <th style="width:30%;">Full Name</th>
                                <th style="width:30%;">Username</th>
                                <th style="width:30%;">Role</th>
                                <th style="width:5%;"></th>
                                <th style="width:5%;"></th>
                            </tr>
                            <?php
                            $conn = mysqli_connect('localhost', 'root', 'mySeeQuiL!', 'pregnancy_tracker');
                            if (!$conn) {
                                echo 'MySQL Connection failed!' . mysqli_connect_error();
                            }

                            $sql = "SELECT * FROM USERS";
                            $result = mysqli_query($conn, $sql);
                            $users = mysqli_fetch_all($result);

                            foreach ($users as $row) {
                                echo "<tr><td>$row[2]", " $row[3]</td><td>$row[1]</td>", "<td>$row[6]</td>";
                                echo '<td><a href = "sysAdminEditUser.php?id=', $row[0], '"> Edit</a></td>';
                                echo '<td><a href = "databaseSysAdminDeleteUser.php?id=', $row[0], '"> Delete</a></td></tr>';
                            }

                            ?>
                        </table>
                    </div>
                </div>
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
</body>

</html>