<?php
// login.php

// Dummy authentication check (replace with actual validation logic)
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'user' && $password === 'password') {
    // Redirect to index.html on successful login
    header('Location: index.html');
    exit();
} else {
    // Redirect back to login page or show an error message
    header('Location: login.html?error=1');
    exit();
}
?>