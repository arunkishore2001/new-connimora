<?php
include './admin_php/config.php';
include './admin_php/functions.php';

session_start();

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Prepare an SQL statement for safe insertion
$insertQuery = $conn->prepare("INSERT INTO contact_form (name, email, phone, message) VALUES (?, ?, ?, ?)");
$insertQuery->bind_param("ssss", $name, $email, $phone, $message);

// Execute the prepared statement
if ($insertQuery->execute()) {
    echo "Form submitted successfully.";
} else {
    echo "Error: " . $insertQuery->error;
}

// Close the statement and connection
$insertQuery->close();
$conn->close();
?>
