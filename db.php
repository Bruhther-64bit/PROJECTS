<?php
// Database connection
$host = "localhost";
$username = "root";
$password = ""; // Set your MySQL root password if necessary
$database = "bloodbankmanagement";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
