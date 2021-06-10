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
        <a href="home_guest.php">Home</a>
        <a href="recherche_guest.php">Recherche</a>
        <a href="visualisation_guest.php" class="active">Visualisation</a>
        <b></b>
        <c>Welcome Guest</c>
        <a href="register.html">Deconnexion</a>
    </div>
    
</head>

<body style="background: url(../pic/background.jpg); background-size:cover">

    <div style="padding-left:40%" style="padding-right:20%">
    <br><br>
    <h1>Tableau de livre </h1>
    <br>
    </div>

<table>
<tr>
<th>Id</th>
<th>Titre</th>
<th>Auteur</th>
<th>Annee</th>
<th>Editeur</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "books");
// Verifier connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM livre";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"] . "</td><td>" . $row["titre"] . "</td><td>"
. $row["auteur"] . "</td><td>". $row["annee"] . "</td><td>". $row["editeur"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
background-color: white;
}
th {
background-color: #F7941D;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>

</body>

</html>