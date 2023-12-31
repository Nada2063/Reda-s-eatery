<?php

session_start();

// Include connection
include_once "includes/dbh.inc.php";

// Check if the user is logged in.
if (!isset($_SESSION['fullname'])) {
    // Redirect the user to the login page.
    header("Location: signin.php");
    exit();
}

// Escape the user input.
$fullname = mysqli_real_escape_string($conn, $_SESSION['fullname']);

// Delete the user from the database.
$sql = "DELETE FROM users WHERE fullname = '$fullname'";
$result = mysqli_query($conn, $sql);

// Check if the deletion was successful.
if ($result) {
    // Destroy the session.
    session_destroy();

    // Display a success message.
    header("Location: admin.php");
} else {
    // Display an error message.
    echo 'Error deleting user.';
}

?>