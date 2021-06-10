<?php
function addConditions($sql_conditions, $field, $value)
{
    if (!empty($value)) {
        if (empty($sql_conditions)) {
            $sql_conditions .= " WHERE ";
        } else {
            $sql_conditions .= " AND ";
        }

        $sql_conditions .= "$field LIKE '%$value%'";
    }
    return $sql_conditions;
}

function addConditionsWithOperator($sql_conditions, $field, $operator, $value)
{
    if (!empty($value)) {
        if (empty($sql_conditions)) {
            $sql_conditions .= " WHERE ";
        } else {
            $sql_conditions .= " AND ";
        }

        $sql_conditions .= $field . " " . $operator . " " . '"' . $value . '"';
    }
    return $sql_conditions;
}

function executeQuery($connexion, $sql_query)
{
    $result_insert = $connexion->query($sql_query);

    if (!$result_insert) {
        $connexion = null;
        exit();
    }

    return $result_insert;
}

function doesContainResult($result){
    if($result->rowCount() > 0) {
        return true;
    }else {
        return false;
    }
}

function addRecord($connexion, $tabFieldValue)
{
    // Récupérer la valeur des champs du formulaire.
    $titre = $tabFieldValue["Titre"];
    $auteur = $tabFieldValue["Auteur"];
    $annee = $tabFieldValue["Annee"];
    $editeur =  $tabFieldValue["Editeur"];

    if (!empty($titre) && !empty($auteur) && !empty($annee) && !empty($editeur)) {

        $sql_search = "SELECT * FROM LIVRE";
        $sql_conditions = "";
        $sql_conditions = addConditionsWithOperator($sql_conditions, "Titre", "=", $titre);
        $sql_conditions = addConditionsWithOperator($sql_conditions, "Auteur", "=", $auteur);
        $sql_conditions = addConditionsWithOperator($sql_conditions, "Annee", "=", $annee);
        $sql_conditions = addConditionsWithOperator($sql_conditions, "Editeur", "=",  $editeur);
        $sql_search .= $sql_conditions;
        $result_search = executeQuery($connexion, $sql_search);

        if(doesContainResult($result_search)){
            echo "<p> Ce livre existe déjà dans la bibliothèque. </p>";
                   
        } else {

            $sql_insert = "INSERT INTO livre(Titre, Auteur, Annee, Editeur)
        VALUES('$titre', '$auteur', '$annee', '$editeur')";

            executeQuery($connexion, $sql_insert);

            $lastId = $connexion->lastInsertId();
            $sql_search = "SELECT * FROM LIVRE WHERE ID =" . $lastId;

            $result_search = $connexion->query($sql_search);

            if (!$result_search) {
                $connexion = null;
                exit();
            } else {
                echo "<p> Le livre a bien été ajouté. </p>";
            }
        }
    } else {
        echo "<p>Aucune données transmises par le formulaire.</p>";
    }
}

function deleteRecord($connexion, $tabFieldValue)
{
    // Récupérer la valeur des champs du formulaire.
    $titre = $tabFieldValue["titre"];
    $auteur = $tabFieldValue["auteur"];
    $annee = $tabFieldValue["annee"];
    $editeur =  $tabFieldValue["editeur"];
    if (!empty($titre) && !empty($auteur) && !empty($annee) && !empty($editeur)) {
        $sql_search = "SELECT * FROM LIVRE";
        $sql_conditions = "";
        $sql_conditions = addConditions($sql_conditions, "Titre", $titre);
        $sql_conditions = addConditions($sql_conditions, "Auteur", $auteur);
        $sql_conditions = addConditions($sql_conditions, "Annee", $annee);
        $sql_conditions = addConditions($sql_conditions, "Editeur", $editeur);
        $sql_search .= $sql_conditions;
        $result_search = executeQuery($connexion, $sql_search);

        if (doesContainResult($result_search)) {

            foreach ($result_search as $row) {
                $id = $row["id"];
            }

            $sql_delete = "DELETE FROM LIVRE WHERE ID =" . $id;


            executeQuery($connexion, $sql_delete);
            $result_delete = $connexion->query($sql_delete);

            if ($result_delete) {
                echo "<p> Suppression effectuée avec succès. </p>";
            }

            $sql_all = "SELECT * FROM LIVRE";

            $result_all = $connexion->query($sql_all);

            if (!$result_all) {
                $connexion = null;
                exit();
            }

            if (doesContainResult($result_all)) {
                echo "<table>";
                foreach ($result_all as $row) {
                    echo "<tr>";
                    echo "<td>" . $row["titre"] . "</td>";
                    echo "<td>" . $row["auteur"] . "</td>";
                    echo "<td>" . $row["annee"] . "</td>";
                    echo "<td>" . $row["editeur"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p> Il n'y a aucun livre dans la bibliothèque. </p>";
            }
        } else {
            echo "<p> Aucun résultats trouvés. </p>";
        }
    }
}

function searchRecord($connexion, $tabFieldValue){
    // Récupérer la valeur des champs du formulaire.
    $titre = $tabFieldValue["Titre"];
    $auteur = $tabFieldValue["Auteur"];
    $annee = $tabFieldValue["Annee"];
    $editeur =  $tabFieldValue["Editeur"];
    if (!empty($titre) && !empty($auteur) && !empty($annee) && !empty($editeur)) {
        $sql_search = "SELECT * FROM LIVRE";
        $sql_conditions = "";
        $sql_conditions = addConditions($sql_conditions, "Titre", $titre);
        $sql_conditions = addConditions($sql_conditions, "Auteur", $auteur);
        $sql_conditions = addConditions($sql_conditions, "Annee", $annee);
        $sql_conditions = addConditions($sql_conditions, "Editeur", $editeur);
        $sql_search .= $sql_conditions;
        $result_search = executeQuery($connexion, $sql_search);

        if (doesContainResult($result_search)) {
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
        }else {
            echo "<p> Aucun résultats trouvés. </p>";
        }
    }
}
