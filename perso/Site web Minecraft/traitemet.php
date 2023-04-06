<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="tete.png"/>
    <title>Minecraft Manship Wiki</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
<?php

// Connexion à la base de données
$servername = "minecra0311.mysql.db";
$username = "minecra0311";
$password = "Yanis0311";
$dbname = "minecra0311";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupération des données du formulaire
$email = $_POST["email"];
$password = $_POST["mot_de_passe"];

// Requête pour vérifier si l'utilisateur existe dans la base de données
$sql = "SELECT * FROM users WHERE email='$email' AND mot_de_passe='$password'";
$result = $conn->query($sql);

// Vérification du résultat de la requête
if ($result->num_rows == 1) {
    // Redirection vers la page de succès
    header("Location: Page accueil 2.html");
} else {
    // Redirection vers la page de connexion
    header("Location: login.html");
}

$conn->close();

?>
</body>
</html>
    



