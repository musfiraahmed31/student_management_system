<?php 
// delete_process.php
session_start();
include 'config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM students WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = "Record deleted successfully.";
    } else {
        $_SESSION['error_message'] = "Error deleting record: " . $conn->error;
    }
}

$conn->close();
header("Location: view.php");
exit();
?>
