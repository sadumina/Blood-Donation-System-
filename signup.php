<?php
// signup.php

// Collect form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Basic server-side validation (replace with actual logic)
if (empty($username) || empty($email) || empty($password)) {
    echo "All fields are required.";
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
    exit();
}

// Hash the password before storing it (for security)
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

// Insert user data into the database
// (You should replace this with actual database interaction code)
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "your_database";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";

if ($conn->query($sql) === TRUE) {
    header('Location: index.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>