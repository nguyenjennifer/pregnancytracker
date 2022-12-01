<?php
session_start();
$_SESSION['username'] = '';
$_SESSION['userRole'] = '';
session_destroy();
header("Location: login.php?err=Logged Out! ");
?>