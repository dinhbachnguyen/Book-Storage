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
        <a href="home_admin.php" class="active">Home</a>
        <a href="recherche_admin.php">Recherche</a>
        <a href="creation_admin.php">Creation</a>
        <a href="visualisation_admin.php">Visualisation</a>
        <a href="suppression_admin.php">Suppression</a>
        <a href="miseajour_admin.php">Mise a jour</a>
        <a href="gestion_admin.php">Gestion</a>
        <b></b>
        <c>Welcome <?php echo $_SESSION['login'] ?></c>
        <a href="register.html">Deconnexion</a>
    </div>

</head>

<body style="background: url(../pic/background.jpg); background-size:cover">

    <div style="padding-left:20%" style="padding-right:20%">

    <br><br>
        <h1>Hello, <?php echo $_SESSION['login'] ?></h1>
        <br>
        <p>Welcome to my website, you can manage all your infomation here</p>
    </div>
  

</body>

</html>