<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform user authentication here (verify email and password in the database)

    $authentication_successful = true;
    if ($authentication_successful) {
        // Store user data in the session
        $_SESSION['email'] = $email;
        // Redirect to a protected page or display a welcome message
        header('Location: welcome.php');
    } else {
        echo "Login failed. Please try again.";
    }
}
?>
