<?php
error_reporting(0);
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sis";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo " DATABASE CONNECTED SUCCESSFULLY";
}

$con = mysqli_select_db($conn, $dbname);
if (!$con) {
    die("Failed to select database: " . mysqli_error($conn));
}
?>
