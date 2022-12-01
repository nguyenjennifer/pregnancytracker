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
            <span class="h4 mb-0" style="color:#f9f9f9">Welcome back, Doctor <?php echo $_SESSION['lastName']; ?></span>
        </div>
    </nav>
    <div class="text-center">
        <h1 style="color:#3000a0"><strong>My Patient</strong></h1>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center m-3">
                        <?php
                            $conn = mysqli_connect('localhost', 'root', '', 'pregnancy_tracker');
                            // check to see if connection was successful or not
                            if (!$conn) {
                                echo 'MySQL Connection failed!' . mysqli_connect_error();
                            }

                            $id = $_GET['id'];
                            $sql =  "SELECT * FROM USERS WHERE UserID = $id ";
                            $result = mysqli_query($conn, $sql);
                            $user = mysqli_fetch_all($result, MYSQLI_ASSOC);

                            if ($user[0]['Role'] != 'Patient') {
                                header('location:doctorPortal.php');
                            }

                            echo $user[0]['LastName'], ", ", $user[0]['FirstName'];
                        ?>
                    </h6>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>