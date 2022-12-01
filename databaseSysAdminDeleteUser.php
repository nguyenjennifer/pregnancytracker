<?php
$conn = mysqli_connect('localhost', 'root', 'mySeeQuiL!', 'pregnancy_tracker');
// check to see if connection was successful or not
if (!$conn) {
    echo 'MySQL Connection failed!' . mysqli_connect_error();
}
$id = $_GET['id'];
$sql = "DELETE FROM USERS WHERE UserID=$id";
if ($conn->query($sql) == TRUE) {
    header("location: sysAdminPortal.php");
} else {
    echo "ERROR: Deleting User";
}
?>