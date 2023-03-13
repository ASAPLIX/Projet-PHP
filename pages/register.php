<?php
session_start();

if (isset($_POST['registerUsername']) && isset($_POST['registerEmail']) && isset($_POST['registerPassword'])) {
    try{
        $connexion = mysqli_connect('localhost', 'root', '', 'flixupplusdb');
    } catch (Exception $error) {
        die ('Erreur : ' . $error->getMessage());
    }

    $registerusername = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['registerUsername']));
    $registeremail = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['registerEmail']));
    $registerpassword = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['registerPassword']));

    if($registerusername !== "" && $registeremail !== "" && $registerpassword !== ""){
        $requete = "INSERT INTO user(Username, UserMail, UserPassword) VALUES (".$registerusername.", ".$registeremail.", ". sha1($registerpassword).");";
        mysqli_query($connexion, $requete);
        header("Location: sign.php");
    }
}
mysqli_close($connexion);
?>