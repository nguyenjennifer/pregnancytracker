    <?php
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
            echo 'We have a user:   ', $userName;

            // set the session
            session_start();
            $_SESSION['username'] = $userName;

            // redirect to home
            header("location: sysAdminPortal.php");
        } else {
            echo 'User was not found!';
            header("Location: login.php?err= Incorrect username or password!");
        }
    }

    ?>