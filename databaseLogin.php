    <?php
    session_start();
    // connect to SQL database
    $conn = mysqli_connect('localhost', 'root', 'mySeeQuiL!', 'pregnancy_tracker');
    // check to see if connection was successful or not
    if (!$conn) {
        echo 'MySQL Connection failed!' . mysqli_connect_error();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sql =  "SELECT * FROM USERS WHERE Username = '$_POST[username]' AND Password = '$_POST[password]' ";
        $result = mysqli_query($conn, $sql);

        // fetch  the rows as an array
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

        print_r($users);
        if (sizeof($users) == 1) {
            $userName = $users[0]['Username'];
            // set the session
            $_SESSION['username'] = $userName;
            $sql2 = "SELECT Role FROM USERS WHERE Username='$_POST[username]'";
            $result = mysqli_query($conn, $sql2);
            $role = implode(mysqli_fetch_all($result, MYSQLI_ASSOC)[0]);
            if ($role == 'Patient') {
                header("location: patientPortal.php");
            } else if ($role == 'Doctor') {
                header("location: doctorPortal.php");
            } else if ($role == 'SystemAdmin') {
                header("location: sysAdminPortal.php");
            } else {
                header("location: login.php?err= Role not assigned. Contact system administrator.");
            }
        } else {
            echo 'User was not found!';
            header("Location: login.php?err= Incorrect username or password!");
        }
    }

    ?>