<?php
// Start a session
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the user's email and password
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate the user's email and password
    if ($email == 'user@example.com' && $password == 'password123') {
        // Set the user as logged in
        $_SESSION['logged_in'] = true;

        // Redirect the user to the dashboard
        header('Location: dashboard.php');
        exit;
    } else {
        // Display an error message
        echo 'Invalid email or password';
    }
}
?>