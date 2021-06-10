<?php
//récupérer les données venant de formulaire
$titre = isset($_POST["titre"]) ? $_POST["titre"] : "";
$auteur = isset($_POST["auteur"]) ? $_POST["auteur"] : "";
$annee = isset($_POST["annee"]) ? $_POST["annee"] : "";
$editeur = isset($_POST["editeur"]) ? $_POST["editeur"] : "";
require 'bdd_connect_books.php';
require 'utils.php';

if (isset($_POST['button3'])) {
   deleteRecord($connexion, $_POST);
}

?>
