<?php
    // connect to db
    $conn =  mysqli_connect('localhost', 'root', '', 'preg');

    // check connection
    if (!$conn) {
        echo 'Connection failed' . mysqli_connect_error();
    }

    session_start();
    $userName = $_SESSION['username'];

    $sql =  "SELECT FirstName, LastName, BirthDate FROM users WHERE Username = '$userName'; ";
    $result = mysqli_query($conn, $sql);
    $names = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $val1 = str_replace("T", " ", $_POST['dateTimeAnswer']) . ":00";
    $val2 = $_POST['doctorAnswer'];
    $val3 = $_POST['notesAnswer'];
    $val4 = $names[0]['FirstName'] . ' ' . $names[0]['LastName'];
    $val5 = false;
    $val6 = $names[0]['BirthDate'];

    $sql = "INSERT INTO `appointments` (ApptDate, Doctor, Notes, Patient, Confirmed, BirthDate) VALUES ('$val1', '$val2', '$val3', '$val4', '$val5', '$val6');";

    // add to db and check

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        // go to homepage
        header("Location: patientPortal.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>