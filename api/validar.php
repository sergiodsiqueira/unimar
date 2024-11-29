<?php
session_start();

$semail = '';

if (isset($_SESSION['semail'])) {
    $semail = $_SESSION['semail'];
} else {
    header('Location:/projeto/login.php');
}
?>