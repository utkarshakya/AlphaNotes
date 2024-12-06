<?php
// login.php (Backend)
session_start();

// Include the database connection and config
require '../config.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate the email and password
    if (empty($email) || empty($password)) {
        echo "Please fill in both fields.";
        exit;
    }

    // Query to fetch user details from the database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    // Check if the user exists and password matches
    if ($user && password_verify($password, $user['password'])) {
        // Set session variables for user login
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];

        // Redirect to the main page
        header("Location: ../pages/main.php");
        exit;
    } else {
        echo "Invalid email or password.";
    }
}
?>
