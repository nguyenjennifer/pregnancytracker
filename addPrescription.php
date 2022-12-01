<?php
    // connect to SQL database
    $conn = mysqli_connect('localhost', 'root', '', 'pregnancy_tracker');
    session_start();
    // check to see if connection was successful or not
    if (!$conn) {
        echo 'MySQL Connection failed!' . mysqli_connect_error();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sql = "INSERT INTO MEDICATIONS (Patient, BirthDate, Prescription, Dosage, DatePrescribed, Notes)
        VALUES ('$_POST[Patient]', '$_POST[BirthDate]', '$_POST[Prescription]', '$_POST[Dosage]', '$_POST[DatePrescribed]', '$_POST[Notes]')";
        echo 'bruh';
        if ($conn->query($sql) === TRUE) {
            header('location:doctorPortal.php?success= Prescription sent!');
        } else {
            header("Location:doctorPortal.php"); 
        }
    }
?>