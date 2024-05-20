<?php
session_start();

$correctEmail = "user@pokemon.com";
$correctPassword = "pikachu";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $correctEmail && $password === $correctPassword) {
        $_SESSION['user'] = 'Ash Ketchum';
        setcookie('user', 'Ash Ketchum', time() + 3600, "/");
        header('Location: content.php');
        exit();
    } else {
        header('Location: index.php?error=1');
        exit();
    }
}
?>