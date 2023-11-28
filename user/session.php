<?php
session_start();

if (!isset($_SESSION['email'])) {
    // Redirect to the login page if the user is not authenticated
    header('Location: login.html');
    exit;
}

$email = $_SESSION['email'];

// Display a welcome message and user-specific content
echo "Welcome, $email! You are logged in.";
?>
