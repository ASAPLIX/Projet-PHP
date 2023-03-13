<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/303c309394.js" crossorigin="anonymous"></script>
        <script src="../js/header.js"></script>
        <title>Flixup+ - Login</title>
    </head>
    <body>
        <?php include '../include/header.html';?>
        <main id="mainLogin">
            <form class="mainForm" id="loginForm" action="#" method="POST">
                <h2 id="loginTitle">Login</h2>
                <label for="loginEmail">Email :</label>
                <input type="email" id="loginEmail">
                <label for="loginPassword">Password :</label>
                <input type="password" id="loginPassword">
                <input type="submit" value="Login">
            </form>
            <form class="mainForm" id="registerForm" action="#" method="POST">
                <h2 id="registerTitle">Register</h2>
                <label for="registerName">Name :</label>
                <input type="text" id="registerName">
                <label for="registerFirstName">First Name :</label>
                <input type="text" id="registerFirstName">
                <label for="registerBirthDate">Birth Date :</label>
                <input type="date" id="registerBirthDate">
                <label for="registerEmail">Email :</label>
                <input type="email" id="registerEmail">
                <label for="registerPasswordSet">Password :</label>
                <input type="password" id="registerPasswordSet">
                <label for="registerPasswordConfirm">Confirm password :</label>
                <input type="password" id="registerPasswordConfirm">
                <input type="submit" value="Register">
            </form>
        </main>
    </body>
</html>