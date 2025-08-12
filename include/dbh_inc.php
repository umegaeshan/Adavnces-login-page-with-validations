<?php
// Database connection
$dbserver = "localhost";
$dbuser   = "root";
$dbpass   = "";
$database = "project2-users";

// Create connection
$connection = mysqli_connect($dbserver, $dbuser, $dbpass, $database);

// Check connection
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
