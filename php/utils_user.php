<?php

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

function doesContainResult($result)
{
    if ($result->rowCount() > 0) {
        return true;
    } else {
        return false;
    }
}


function isAllowedToAuthenticate($connexion, $tabFieldValue)
{
    $isAllowed = false;
    // Récupérer la valeur des champs du formulaire.
    $login = $tabFieldValue["login"];
    $password = $tabFieldValue["password"];
    if (!empty($login) && !empty($password)) {
        $sql_search = "SELECT * FROM user";
        $sql_conditions = "";
        $sql_conditions = addConditionsWithOperator($sql_conditions, "login", "=", $login);
        $sql_search .= $sql_conditions;
        $result_search = executeQuery($connexion, $sql_search);

        if (doesContainResult($result_search)) {
            foreach ($result_search as $row) {
                if (password_verify($password, $row["password"])) {
                    $isAllowed = true;
                }
            }
        }
    }
    return $isAllowed;
}

function addRecord($connexion, $tabFieldValue)
{
    // Récupérer la valeur des champs du formulaire.
    $login = $tabFieldValue["login"];

    if (!empty($login)) {

        $sql_search = "SELECT * FROM user";
        $sql_conditions = "";
        $sql_conditions = addConditionsWithOperator($sql_conditions, "login", "=", $login);
        $sql_search .= $sql_conditions;
        $result_search = executeQuery($connexion, $sql_search);
        // echo $sql_search;
        if (doesContainResult($result_search)) {
            echo "<p> Cet utilisateur existe déjà. </p>";
        } else {
            $password = $tabFieldValue["password"];
            $passwordEncryted = password_hash($password, PASSWORD_BCRYPT);

            $sql_insert = "INSERT INTO user(login, password)
        VALUES('$login', '$passwordEncryted')";
        // echo $sql_insert;

            executeQuery($connexion, $sql_insert);

            $lastId = $connexion->lastInsertId();
            $sql_search = "SELECT * FROM user WHERE ID =" . $lastId;

            $result_search = $connexion->query($sql_search);

            if (!$result_search) {
                $connexion = null;
                exit();
            } else {
                echo "<p> L'utilisateur a bien été ajouté. </p>";
            }
        }
    } else {
        echo "<p>Aucune données transmises par le formulaire.</p>";
    }
}
