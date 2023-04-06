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

// Récupération des données du formulaire
$pseudo = $_POST['pseudo'];
$mail = $_POST['mail'];
$mot_de_passe = $_POST['mot_de_passe'];

// Connexion à la base de données
$servername = "minecra0311.mysql.db";
$username = "minecra0311";
$password = "Yanis0311";
$dbname = "minecra0311";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification si l'utilisateur est déjà dans la base de données
$sql = "SELECT * FROM utilisateurs WHERE pseudo='$pseudo' OR mail='$mail'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // L'utilisateur est déjà dans la base de données, redirection vers la page de connexion
    header("Location: login.html");
} else {
    // Ajout de l'utilisateur dans la base de données
    $sql = "INSERT INTO utilisateurs (pseudo, mail, mot_de_passe) VALUES ('$pseudo', '$mail', '$mot_de_passe')";
    mysqli_query($conn, $sql);

    // Redirection vers une autre page
    header("Location: Page accueil 2.html");
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);

?>
</body>
</html>