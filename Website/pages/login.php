<?php
session_start();

if (isset($_POST['loginEmail']) && isset($_POST['loginPassword'])){
    try{
        $connexion = mysqli_connect('localhost', 'root', '', 'flixupplusdb');
    } catch (Exception $error) {
        die ('Erreur : ' . $error->getMessage());
    }

    $loginemail = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['loginEmail']));
    $loginpassword = mysqli_real_escape_string($connexion, htmlspecialchars($_POST['loginPassword']));

    if($loginemail !== "" && $loginpassword !== ""){
        $requete = "SELECT count(*) FROM user WHERE UserMail = '" .$loginemail."' and UserPassword = '" .$loginpassword."' ";
        $exec_requete = mysqli_query($connexion, $requete);
        $reponse = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if ($count != 0) {
            $username = mysqli_fetch_array(mysqli_query($connexion, "SELECT Username FROM user WHERE UserMail = '" .$loginemail."' and UserPassword = '" .$loginpassword."' "));
            $userid = mysqli_fetch_array(mysqli_query($connexion, "SELECT IDUser FROM user WHERE UserMail = '" .$loginemail."' and UserPassword = '" .$loginpassword."' "));
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $userid;
            header('Location: cart.php');
        } else {
            header('Location: sign.php?error=1');
        }
    }
} else {
    header('Location: sign.php');
}
mysqli_close($connexion);
?>