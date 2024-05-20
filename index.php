<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: content.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pokémon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding-top: 50px;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            margin: auto;
            width: 300px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .login-container h1 {
            color: #3b4cca;
        }
        .login-container input {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container button {
            background-color: #ffcb05;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login Pokémon</h1>
        <form action="login.php" method="post">
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        <?php
        if (isset($_GET['error'])) {
            echo '<p style="color:red;">Dados incorretos. Tente novamente.</p>';
        }
        ?>
    </div>
</body>
</html>