<?php
$path = $_SERVER['DOCUMENT_ROOT']."/projeto/";
require($path."cfg/connection.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM USUARIOS WHERE EMAIL = '$email' AND SENHA = '$senha'";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    setcookie("login", $email, time()+3600, "/");
    header("Location:/projeto/src/home/home.php");
} else {    
    unset($_COOKIE["login"]);
    setcookie("login", "", -1, "/");
    header("Location:login.php");
};


