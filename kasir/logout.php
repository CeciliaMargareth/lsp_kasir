<?php

$koneksi = new mysqli('localhost', 'root', '', 'kasir_lsp');

session_start(); // Start the session

// Check if the user is logged in
if(isset($_SESSION['user'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page after logout
    header("Location: index.php");
    exit();
} else {
    // If the user is not logged in, redirect to the login page
    header("Location: index.php");
    exit();
}
?>
