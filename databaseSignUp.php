    <?php
    // connect to SQL database
    $conn = mysqli_connect('localhost', 'root', 'mySeeQuiL!', 'pregnancy_tracker');
    // check to see if connection was successful or not
    if (!$conn) {
        echo 'MySQL Connection failed!' . mysqli_connect_error();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $userRole = $_POST['role'];

        $sql =  "INSERT INTO USERS (Username, FirstName, Lastname, Password, BirthDate, Role) VALUES ('$_POST[username]', '$_POST[firstName]', '$_POST[lastName]', '$_POST[password]', '$_POST[birthdate]', '$_POST[role]')";
        if($conn->query($sql)){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['userRole'] = $userRole;

            if ($userRole == 'Patient') {
                header('location:patientPortal.php');
            } elseif ($userRole == 'Doctor') {
                header('location:doctorPortal.php');
            } else {
                header('location:sysAdminPortal.php');
            }
        } else {
            echo $conn->error;
        }
    }

    ?>