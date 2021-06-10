<?php

$login = isset($_POST["login"]) ? $_POST["login"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";


if (isset($_POST["button1"])) {
    if (!empty($login) && !empty($password)) {
        require 'bdd_connect.php';
        require 'utils_admin.php';

        if (isAllowedToAuthenticate($connexion, $_POST)) {
            echo "<p>Vous êtes connecté.</p>";
            session_start();
            $_SESSION['login'] = $login;
            header("Location: ../main/home_admin.php");
            die;
            
        }else{
            echo "<p>Vous n'est pas autorisé à vous connecter.</p>";
        }
    }
} else if (isset($_POST["button2"])) {
        require 'bdd_connect.php';
        require 'utils_admin.php';

        addRecord($connexion, $_POST);

        $connexion = null;
} 

?>
