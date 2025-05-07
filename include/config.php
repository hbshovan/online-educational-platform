<?php
// Database configuration
$servername = "localhost";
$username = "hivjvnqc_hb";
$password = "HBFay2024";
$dbname = "hivjvnqc_fay";

// Create connection for database1
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

// Check connection for database1
if ($conn->connect_error) {
    die("Connection to database1 failed: " . $conn->connect_error);
}

?>
