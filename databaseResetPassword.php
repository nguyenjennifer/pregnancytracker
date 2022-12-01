    <?php
    // connect to SQL database
    $conn = mysqli_connect('localhost', 'root', 'mySeeQuiL!', 'pregnancy_tracker');
    // check to see if connection was successful or not
    if (!$conn) {
        echo 'MySQL Connection failed!' . mysqli_connect_error();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $grabPassword = "SELECT Password FROM USERS WHERE Username='$_POST[forgotUsername]' ";
        $grabPasswordResult = mysqli_query($conn, $grabPassword);
        $result = mysqli_fetch_all($grabPasswordResult, MYSQLI_ASSOC);
        if (sizeof($result) == 1) {
            if (implode($result[0]) == $_POST['oldPassword']) {
                $sql = "UPDATE USERS SET Password='$_POST[newPassword]' WHERE Username='$_POST[forgotUsername]' ";
                if ($conn->query($sql) == TRUE) {
                    header("location: resetPassword.php?success=Password updated successfully!");
                } else {
                    header("location resetPassword.php?err=Unable to reset password. Please try again.");
                }
            } else {
                header("location: resetPassword.php?err=Password incorrect. Please try again.");
            }
        } else {
            header("location: resetPassword.php?err=Account not found. Please try again.");
        }
    }

    ?>