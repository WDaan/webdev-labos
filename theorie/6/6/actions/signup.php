<?php

include('db.php');

$username = $_POST["username"] ?? '';
$email = $_POST["email"] ?? '';
$password = $_POST["password"] ?? '';


if (!empty($username) && !empty($email) && !empty($password)) {
    $password = password_hash($password, PASSWORD_DEFAULT);
    $result = mysqli_query($sql, "INSERT INTO users (username, password, email) VALUES ('{$username}', '{$password}', '{$email}')");
    if ($result)
        header("Location: ../beveiligdlogin.php?register=true");
    else {
        echo '<div class="container mt-5"> <h2> Register Failed </h2></div></div>';
    }
} else {
    echo '<div class="container mt-5"> <h2> Register Failed </h2></div></div>';
}
