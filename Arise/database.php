<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "arise_db";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>