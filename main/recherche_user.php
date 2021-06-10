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
        <a href="home_user.php">Home</a>
        <a href="recherche_user.php" class="active">Recherche</a>
        <a href="visualisation_user.php">Visualisation</a>
        <b></b>
        <c>Welcome <?php echo $_SESSION['login'] ?></c>
        <a href="register.html">Deconnexion</a>
    </div>

</head>

<body style="background: url(../pic/background.jpg); background-size:cover">

    <div style="padding-left:40%" style="padding-right:20%">
    <br><br><br><br><br><br><br>
    <h2>Recherche de Livre</h2>
    <form action="../php/trouveurLivres.php" method="post">
        <table>
            <tr>
                <td>Titre:</td>
                <td><input type="text" name="titre"></td>
            </tr>
            <tr>
                <td>Auteur:</td>
                <td><input type="text" name="auteur"></td>
            </tr>
            <tr>
                <td>Année:</td>
                <td><input type="text" name="annee"></td>
            </tr>
            <tr>
                <td>Editeur:</td>
                <td><input type="text" name="editeur"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="button1" value="Rechercher">

                </td>
            </tr>
        </table>
    </form>
    </div>
  

</body>

</html>