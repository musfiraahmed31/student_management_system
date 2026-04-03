<?php 
// add_process.php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve inputs
    $student_id = $conn->real_escape_string($_POST['student_id']);
    $full_name = $conn->real_escape_string($_POST['full_name']);
    $course = $conn->real_escape_string($_POST['course']);
    $year = $conn->real_escape_string($_POST['year']);
    $status = $conn->real_escape_string($_POST['status']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);

    // INSERT query
    $sql = "INSERT INTO students (student_id, full_name, course, year, status, email, phone) 
            VALUES ('$student_id', '$full_name', '$course', '$year', '$status', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = "Student record added successfully for ID: " . htmlspecialchars($student_id);
    } else {
        $_SESSION['error_message'] = "Error: " . $conn->error;
    }

    $conn->close();
    header("Location: add.php");
    exit();
} else {
    // If someone tries to access this file without POST
    header("Location: add.php");
    exit();
}
?>
