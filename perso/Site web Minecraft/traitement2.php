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

// Les informations de connexion à la base de données
$servername = "minecra0311.mysql.db"; // Le nom de votre serveur
$username = "minecra0311"; // Le nom d'utilisateur de votre base de données
$password = "Yanis0311"; // Le mot de passe de votre base de données
$dbname = "minecra0311"; // Le nom de votre base de données
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué: " . $conn->connect_error);
}

// Récupération des données du formulaire
$email = $_POST["email"];
$mdp = $_POST["mot_de_passe"];
$pseudo = $_POST["pseudo"];

// Vérification de l'existence de l'email et du pseudo dans la table "utilisateurs"
$sql = "SELECT * FROM utilisateurs WHERE email='$email' OR pseudo='$pseudo'";
$result = $conn->query($sql);

// Si l'email est trouvé, redirige vers la page de connexion
if ($result->num_rows > 0) {
    header("Location: login.html");
} 
// Si ni l'email ni le pseudo ne sont trouvés, ajoute les données dans la table "utilisateurs" et redirige vers une autre page
else {
    $sql = "INSERT INTO utilisateurs (email, mot_de_passe, pseudo) VALUES ('$email', '$mdp', '$pseudo')";
    if ($conn->query($sql) === TRUE) {
        header("Location: Page accueil 2.html");
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
</body>
</html>