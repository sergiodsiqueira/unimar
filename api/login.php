<?php
require("connection.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM USUARIOS WHERE EMAIL = '$email' AND SENHA = '$senha'";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    setcookie("login", $email, time() + 3600, "/");
    header("Location:/projeto/home.php");
} else {
    echo "<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');
            window.location.href='/projeto/login.php';
          </script>";
    die();
    unset($_COOKIE["login"]);
    setcookie("login", "", -1, "/");
    header("Location:/projeto/login.php");
};