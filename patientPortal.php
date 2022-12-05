<?php session_start(); if ($_SESSION['role'] == 'Patient' && $_SESSION['is_logged_in'] == TRUE) { ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seed Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
    // connect to db
    $conn =  mysqli_connect('localhost', 'root', '', 'preg');

    // check connection
    if (!$conn) {
        echo 'Connection failed' . mysqli_connect_error();
    }
    

    // set the session
    $userName = $_SESSION['username'];

    // Find Patient Name
    $sql =  "SELECT FirstName, LastName FROM users WHERE Username = '$userName'; ";
    $result = mysqli_query($conn, $sql);
    $names = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $firstName = $names[0]['FirstName'];
    $lastName = $names[0]['LastName'];
    $fullName = $firstName . ' ' . $lastName;
    

    // Grab Medications
    $sql =  "SELECT Prescription, Dosage FROM medications WHERE Patient = '$fullName'; ";
    $result = mysqli_query($conn, $sql);
    $medications = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Grab Pregnancies
    $sql =  "SELECT DueDate, BabyName FROM pregnancies WHERE PatientUsername = '$userName'; ";
    $result = mysqli_query($conn, $sql);
    $pregnancies = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Grab Appointments
    $sql =  "SELECT ApptDate, Doctor, Notes FROM appointments WHERE Patient = '$fullName'; ";
    $result = mysqli_query($conn, $sql);
    $appointments = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Grab Users (Name, Age, DOB)
    $sql =  "SELECT FirstName, LastName, BirthDate, Username FROM users WHERE Username = '$userName'; ";
    $result = mysqli_query($conn, $sql);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $firstName = $users[0]['FirstName'];
    $lastName = $users[0]['LastName'];
    $fullName = $firstName . ' ' . $lastName;
    $userName = $users[0]['Username'];
    $dob = $users[0]['BirthDate'];

    ?>



    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <span class="h4 mb-0" style="color:#f9f9f9">Seed Tracker</span>
        </div>
    </nav>
    <div class="text-center">
        <h1 style="color:#3000a0"><strong>Patient Portal</strong></h1>
    </div>
    <div class="container">
        <div class="row gutters" style="height: 75vh">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-50">
                    <div class="card-body">
                        <div class="card-title" style="display: flex; justify-content: space-between; flex-direction: column;">
                            <h5>User Information</h5>
                            <?php

                            if ($_GET['edit'] == 1){
                                echo '<form action="databaseUpdateInfo.php" method="post">
                                <label class="infoLabel" style="margin-top: 1px;"> Name </label>
                                <input class="infoData" style="margin-bottom: 1px;" name="patientName" value="', $fullName, '">
                                <label class="infoLabel" style="margin-top: 1px;"> Username </label>
                                <input class="infoData" style="margin-bottom: 1px;" name="userName" value="', $userName, '">
                                <label class="infoLabel" style="margin-top: 1px;"> D.O.B. </label>
                                <input class="infoData" style="margin-bottom: 1px;" name="patientDOB" value="', $dob, '">
                                <input type="submit" name="Submit" id="Submit" value ="Save" style="margin-top: 5%;"> 
                            </form>';
                            } else {
                            echo '
                                <form action="patientPortal.php?edit=1" method="post">
                                <label class="infoLabel" style="margin-top: 1px;"> Name </label>
                                <p class="infoData" style="margin-bottom: 1px;" name="patientName">', $fullName,' </p>
                                <label class="infoLabel" style="margin-top: 1px;"> Username </label>
                                <p class="infoData" style="margin-bottom: 1px;" name="userName">', $userName,' </p>
                                <label class="infoLabel" style="margin-top: 1px;"> D.O.B. </label>
                                <p class="infoData" style="margin-bottom: 1px;" name="patientDOB">', $dob,' </p>
                                <input type="submit" name="Submit" id="Submit" value ="Edit Info" style="margin-top: 5%;">
                            </form> ';
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
                <div class="card h-50">
                    <div class="card-body">
                        <div class="card-title" style="display: flex; justify-content: space-between; align-items: center;">
                            <h5>Pregnancy Information</h5>
                        </div>
                        <table id="pregnancyTable">
                            <tr class="header">
                                <th style="width:50%;">Expected Due Date</th>
                                <th style="width:50%">Baby's Name</th>
                            </tr>
                            <?php
                                foreach($pregnancies as $row)
                                {
                                    echo "<tr>";
                                    echo "<td>", $row['DueDate'], "</td>";
                                    echo "<td>", $row['BabyName'], "</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="card-title" style="display: flex; justify-content: space-between; align-items: center;">
                            <h5>Appointments</h5>
                        </div>
                        <table id="recordsTable">
                            <tr class="header">
                                <th style="width:25%;">Date</th>
                                <th style="width:25%">Time (24H)</th>
                                <th style="width:25%;">Doctor</th>
                                <th style="width:25%;">Summary</th>
                            </tr>
                            <?php
                                foreach($appointments as $row)
                                {
                                    $dateTime = explode(" ", $row['ApptDate']);
                                    $apptDate = $dateTime[0];
                                    $apptTime = $dateTime[1];
                                    $apptTime = explode(":", $apptTime);
                                    $apptTime = $apptTime[0] . ":" . $apptTime[1];

                                    echo "<tr>";
                                    echo "<td>", $apptDate, "</td>";
                                    echo "<td>", $apptTime, "</td>";
                                    echo "<td>", $row['Doctor'], "</td>";
                                    echo "<td>", $row['Notes'], "</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-25">
                    <div class="card-body" style="text-align: center;">
                        <div class="card-title" style="display: flex; justify-content: space-between; align-items: center;">
                            <h5>Request an Appointment</h5>
                        </div>
                        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#schedule">
                            Schedule Now
                        </button>
                        <div class="modal fade" id="schedule" tabindex="-1" aria-labelledby="scheduleAppointment" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Request an Appointment</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="databaseRequestAppt.php">
                                            <select required class="form-select form-select-sm" aria-label=".form-select-sm example" name="doctorAnswer">
                                                <option value="">Select Doctor</option>
                                                <option value="Dr. Meredith Grey">Dr. Meredith Grey</option>
                                                <option value="Dr. George O'Malley">Dr. George OMalley</option>
                                                <option value="Dr. Cristina Yang">Dr. Cristina Yang</option>
                                                <option value="Dr. Izzie Stevens">Dr. Izzie Stevens</option>
                                            </select>
                                            <div>
                                                <label class="mt-3">Select Date and Time</label>
                                                <input type="datetime-local" name="dateTimeAnswer" required>
                                            </div>
                                            <div>
                                                <label class="form-group-text mt-3">Notes</label>
                                                <textarea class="form-control" aria-label="notes" name="notesAnswer"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-outline-primary">Save</button>
                                                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card h-75">
                    <div class="card-body">
                        <div class="card-title" style="display: flex; justify-content: space-between; align-items: center; flex-direction: column;">
                            <div class="card-title" style="display: flex; justify-content: space-between; align-items: center;">
                                <h5>Medications</h5>
                            </div>
                            <table id="medsTable">
                                <tr class="header" style="text-align: center;">
                                    <th style="width:50%;">Drug</th>
                                    <th style="width:50%">Dosage</th>
                                </tr>
                                <?php
                                foreach($medications as $row)
                                {
                                    echo "<tr>";
                                    echo "<td>", $row['Prescription'], "</td>";
                                    echo "<td>", $row['Dosage'], "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $conn->close();
    ?>
    <footer class="text-center mt-3">
        <form action="databaseLogout.php" method="post">
            <button name="logout" class="btn btn-outline-dark">Logout</button>
        </form>
    </footer>

    

    <script src="patientPortal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>

<?php } else { header('location: login.php?err=Log in to view page.'); } ?>