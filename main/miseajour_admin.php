<?php
session_start();
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/web.css">
    <script type="text/javascript" src="script.js" async></script>

    <div class="topnav">
        <b></b>
        <a class="logo"></a>
        <c>Groupe 8</c>
        <b></b>
        <a href="home_admin.php">Home</a>
        <a href="recherche_admin.php">Recherche</a>
        <a href="creation_admin.php">Creation</a>
        <a href="visualisation_admin.php">Visualisation</a>
        <a href="suppression_admin.php">Suppression</a>
        <a href="miseajour_admin.php" class="active">Mise a jour</a>
        <a href="gestion_admin.php">Gestion</a>
        <b></b>
        <c>Welcome <?php echo $_SESSION['login'] ?></c>
        <a href="register.html">Deconnexion</a>
    </div>

</head>


<body style="background: url(../pic/background.jpg); background-size:cover">
<br><br>
    <div style="padding-left:35%" style="padding-right:20%">
    <table>
        <h1 style="padding-left:10%">Mise à jour</h1><br><br>

        <tr>

        <textarea id="miseajour" rows="4" cols="50">Write your update here</textarea><br><br>

        </tr>
        <tr>
            <td style="padding-left:170%">
                <input type="submit" value="Mise à jour" name="button" />
            </td>
        </tr>

    </table>
    </div>




  


</body>

</html>