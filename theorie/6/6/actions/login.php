<?php

include('db.php');

session_start();
session_regenerate_id();

$username = $_POST["username"] ?? '';
$password = $_POST["password"] ?? '';

if (!empty($username) && !empty($password)) {
    $result = mysqli_query($sql, "SELECT * FROM users WHERE username LIKE '{$username}' OR email LIKE '{$username}'");
    $user = mysqli_fetch_array($result);
    if (password_verify($password, $user["PASSWORD"])) {
        $_SESSION["auth"] = $user["username"];
        header("Location: ../beveiligdpagina.php");
    } else {
        header("Location: ../beveiligdlogin.php?failed=true");
    }
}
