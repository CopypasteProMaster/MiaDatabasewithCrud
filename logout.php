<?php
include 'config.php';
session_start();

date_default_timezone_set("Asia/Manila");
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    $user_name = $_SESSION['user_name'];
    $logout_date = date('Y-m-d H:i:s'); // Get the current date and time

    // Insert logout record into the history table
    $query = "INSERT INTO history (history_, login_date) VALUES ('$user_name Logged out', '$logout_date')";
    mysqli_query($con, $query);

    // Destroy the session
    session_destroy();
}

header("Location: homepage.php"); // Redirect to the homepage or login page
exit;
?>
