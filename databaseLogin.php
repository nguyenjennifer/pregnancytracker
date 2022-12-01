    <?php
    // connect to SQL database
    $conn = mysqli_connect('localhost', 'root', '', 'pregnancy_tracker');
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
            $lastName = $users[0]['LastName'];

            // set the session
            session_start();
            $_SESSION['username'] = $users[0]['Username'];
            $_SESSION['firstName'] = $users[0]['FirstName'];
            $_SESSION['lastName'] = $users[0]['LastName'];
            $_SESSION['role'] = $users[0]['Role'];


            // redirect to home
            if ($users[0]['Role'] == 'Patient') {
                header('location:patientPortal.php');
            } elseif ($users[0]['Role'] == 'Doctor') {
                header('location:doctorPortal.php');
            } else {
                header('location:sysAdminPortal.php');
            }
        } else {
            echo 'User was not found!';
            header("Location: login.php?err= Incorrect username or password!");
        }
    }

    ?>