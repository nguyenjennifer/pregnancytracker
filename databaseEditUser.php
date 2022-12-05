<?php
session_start();
$id = $_SESSION['id'];
$conn = mysqli_connect('localhost', 'root', 'mySeeQuiL!', 'pregnancy_tracker');
// check to see if connection was successful or not
if (!$conn) {
    echo 'MySQL Connection failed!' . mysqli_connect_error();
}
$sql = "UPDATE USERS SET FirstName='$_POST[editFirstName]', LastName='$_POST[editLastName]', Username='$_POST[editUserName]', Password='$_POST[editPassword]', Role='$_POST[editRole]' WHERE UserID='$id' ";
if ($conn->query($sql) == TRUE) {
    header("location: sysAdminPortal.php");
} else {
    echo "ERROR: Editing User";
}
