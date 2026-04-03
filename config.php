<?php
// config.php - Database connection setup

$host = 'localhost';
$username = 'root'; // Default WAMP username
$password = ''; // Default WAMP password is empty
$database = 'student_management';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
