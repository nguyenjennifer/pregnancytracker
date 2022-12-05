    <?php
    session_start();
    // connect to SQL database
    $conn = mysqli_connect('localhost', 'root', 'mySeeQuiL!', 'pregnancy_tracker');
    // check to see if connection was successful or not
    if (!$conn) {
        echo 'MySQL Connection failed!' . mysqli_connect_error();
    } else {
        echo 'success';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['doctorPassword'] == $_POST['doctorConfirmPassword']) {
            $password = $_POST['doctorPassword'];
            $sql =  "INSERT INTO USERS (Username, FirstName, Lastname, Password, BirthDate, Role) VALUES ('$_POST[doctorUsername]', '$_POST[doctorFirstName]', '$_POST[doctorLastName]', '$_POST[doctorPassword]', '$_POST[doctorBirthDate]', 'Doctor')";
            if ($conn->query($sql)) {
                header('location:sysAdminPortal.php?succ= Successfully created new doctor account.');
            } else {
                echo $conn->error;
            }
        } else {
            header("Location: sysAdminPortal.php?err= Passwords do not match!");
        }
    }

    ?>