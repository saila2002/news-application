<?php
session_start();

if (!isset($_SESSION['email'])) {
    $_SESSION['message'] = "Please log in to access this page.";
    header("Location: login.php");
    exit();
}
?>