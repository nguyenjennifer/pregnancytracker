    <?php
    session_start();
    // connect to SQL database
    $conn = mysqli_connect('localhost', 'root', 'mySeeQuiL!', 'pregnancy_tracker');
    // check to see if connection was successful or not
    if (!$conn) {
        echo 'MySQL Connection failed!' . mysqli_connect_error();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $userRole = $_POST['role'];

        $sql =  "SELECT * FROM USERS WHERE Username = '$_POST[username]' ";
        $result = mysqli_query($conn, $sql);

        // fetch  the rows as an array
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

        if (sizeof($users) == 0) {
            $sql =  "INSERT INTO USERS (Username, FirstName, Lastname, Password, BirthDate, Role) VALUES ('$_POST[username]', '$_POST[firstName]', '$_POST[lastName]', '$_POST[password]', '$_POST[birthdate]', '$_POST[role]')";
            $conn->query($sql);
            header('location:login.php?success= Account created successfully!');
        } else {
            header("Location: signUp.php?err= Username is taken!"); 
            $_SESSION['username'] = $username;
        }
    }
?>