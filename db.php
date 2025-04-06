<?php
$host = "localhost";
$user = "root"; // Default user in XAMPP
$pass = ""; // Default is empty in XAMPP
$dbname = "event_management";

// Create connection
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
