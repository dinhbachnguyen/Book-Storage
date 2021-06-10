<?php
//recuperer les données venant de la page HTML
$titre = isset($_POST["titre"]) ? $_POST["titre"] : "";
$auteur = isset($_POST["auteur"]) ? $_POST["auteur"] : "";
$annee = isset($_POST["annee"]) ? $_POST["annee"] : "";
$editeur = isset($_POST["editeur"]) ? $_POST["editeur"] : "";

require 'bdd_connect_books.php';
require 'utils.php';

if (!empty($titre) && !empty($auteur) && !empty($annee) && !empty($editeur)) {

    $sql_search = "SELECT * FROM LIVRE";
    $sql_conditions = "";
    $sql_conditions = addConditionsWithOperator($sql_conditions, "Titre", "=", $titre);
    $sql_conditions = addConditionsWithOperator($sql_conditions, "Auteur", "=", $auteur);
    $sql_conditions = addConditionsWithOperator($sql_conditions, "Annee", "=", $annee);
    $sql_conditions = addConditionsWithOperator($sql_conditions, "Editeur", "=",  $editeur);
    $sql_search .= $sql_conditions;
    $result_search = executeQuery($connexion, $sql_search);

    

    if ($result_search->rowCount() > 0) {
        echo "<p> Ce livre existe déjà dans la bibliothèque. </p>";
    } else {

        $sql_insert = "INSERT INTO livre(Titre, Auteur, Annee, Editeur)
    VALUES('$titre', '$auteur', '$annee', '$editeur')";

        $result_insert = executeQuery($connexion, $sql_insert);

        $lastId = $connexion->lastInsertId();
        $sql_search = "SELECT * FROM LIVRE WHERE ID =" . $lastId;

        $result_search = $connexion->query($sql_search);

        if (!$result_search) {
            $connexion = null;
            exit();
        }

        if ($result_search->rowCount() > 0) {
            echo "<h2>Dernier enregistrement inséré</h2>";
            echo "<table>";
            foreach ($result_search as $row) {
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
    }
} else {
    echo "<p>Aucune données transmises par le formulaire.</p>";
}
