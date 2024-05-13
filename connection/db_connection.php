<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$db = mysqli_connect('localhost','root','','portfolia') or die("Database not connected");
?>