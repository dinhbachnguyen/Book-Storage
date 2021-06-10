<?php

require 'bdd_connect_books.php';
require 'utils.php';

$titre = isset($_POST["titre"]) ? $_POST["titre"] : "";
$auteur = isset($_POST["auteur"]) ? $_POST["auteur"] : "";
$annee = isset($_POST["annee"]) ? $_POST["annee"] : "";
$editeur = isset($_POST["editeur"]) ? $_POST["editeur"] : "";

if(!empty($titre) ||!empty($auteur) || !empty($annee) || !empty($editeur) ){
    $sql_search = "SELECT * FROM LIVRE";
    $sql_conditions = "";
    $sql_conditions = addConditions($sql_conditions, "Titre", $titre);
    $sql_conditions = addConditions($sql_conditions, "Auteur", $auteur);
    $sql_conditions = addConditions($sql_conditions, "Annee", $annee);
    $sql_conditions = addConditions($sql_conditions, "Editeur", $editeur);
    $sql_search .= $sql_conditions;

    $result = $connexion->query($sql_search);

    if (!$result) {
        $connexion = null;
        exit();
    }

    if ($result->rowCount() > 0) {
        echo "<table>";
        foreach ($result as $row) {
            echo "<tr>";
            echo "<td>" . $row["titre"] . "</td>";
            echo "<td>" . $row["auteur"] . "</td>";
            echo "<td>" . $row["annee"] . "</td>";
            echo "<td>" . $row["editeur"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p> Aucun résultats trouvés. </p>";
    }
}else{
    echo "<p>Aucune données transmises par le formulaire.</p>";
}


?>