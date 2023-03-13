<?php
session_start();
try{
    $connexion = new PDO('mysql:host=localhost;dbname=flixupplusdb;charset=utf8', 'root', '');
} catch (Exception $error) {
    die ('Erreur : ' . $error->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flixup+ - Login</title>
    </head>
    <body>
        <?php include '../include/header.html';?>
        <main id="mainLogin">
            <form class="mainForm" id="loginForm" action="login.php" method="POST">
                <h2 id="loginTitle">Login</h2>
                <label for="loginEmail">Email :</label>
                <input type="email" required id="loginEmail" name="loginEmail">
                <label for="loginPassword">Password :</label>
                <input type="password" required id="loginPassword" name="loginPassword">
                <input type="submit" id="submitLoginForm" value="Login">
            </form>
            <form class="mainForm" id="registerForm" action="register.php" method="POST">
                <h2 id="registerTitle">Register</h2>
                <label for="registerUsername">Username :</label>
                <input type="text" required id="registerUsername" name="registerUsername">
                <label for="registerEmail">Email :</label>
                <input type="email" required id="registerEmail" name="registerEmail">
                <label for="registerPassword">Password :</label>
                <input type="password" required id="registerPassword" name="registerPassword">
                <input type="submit" id="submitRegisterForm" value="Register">
            </form>
        </main>
    </body>
</html>