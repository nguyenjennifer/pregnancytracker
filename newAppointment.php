<?php
    // connect to SQL database
    $conn = mysqli_connect('localhost', 'root', '', 'pregnancy_tracker');
    // check to see if connection was successful or not
    if (!$conn) {
        echo 'MySQL Connection failed!' . mysqli_connect_error();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sql = "INSERT INTO APPOINTMENTS (Patient, Doctor, BirthDate, ApptDate, Confirmed, Notes)
        VALUES ('$_POST[Patient]', '$_POST[Doctor]', '$_POST[BirthDate]', '$_POST[ApptDate]', 1, '$_POST[Notes]')";

        if ($conn->query($sql) === TRUE) {
            header('location:doctorPortal.php?');
        } else {
            header("Location:doctorPortal.php"); 
        }
    }
?>