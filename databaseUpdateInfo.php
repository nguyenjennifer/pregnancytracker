<?php
    // connect to db
    $conn =  mysqli_connect('localhost', 'root', 'mySeeQuiL!', 'pregnancy_tracker');

    // check connection
    if (!$conn) {
        echo 'Connection failed' . mysqli_connect_error();
    }

    session_start();
    $userName = $_SESSION['username'];

    $fullName = $_POST['patientName'];
    $fullNameArr = explode (" ", $fullName);
    $firstName = $fullNameArr[0];
    $lastName = $fullNameArr[1];
    $dob = $_POST['patientDOB'];
    echo $firstName, $lastName, $dob;

    $sql = "UPDATE `users` SET FirstName = '$firstName', LastName = '$lastName', BirthDate = '$dob' WHERE Username = '$userName'";

    // add to db and check

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        // go to homepage
        header("Location: patientPortal.php?edit=0");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>