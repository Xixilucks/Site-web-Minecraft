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
// Récupération des informations du formulaire
$email = $_POST['email'];
$password = $_POST['password'];

// Connexion à la base de données
$conn = mysqli_connect('minecra0311.mysql.db', 'minecra0311', 'Yanis0311', 'minecra0311');

// Vérification de l'adresse e-mail dans la base de données
$result = mysqli_query($conn, "SELECT * FROM utilisateurs WHERE email = '$email'");
if (mysqli_num_rows($result) > 0) {
    // L'adresse e-mail existe dans la base de données, rediriger l'utilisateur vers une autre page HTML
    header('Location: Page accueil 2.html');
} else {
    // L'adresse e-mail n'existe pas dans la base de données, rediriger l'utilisateur vers la page de connexion HTML
    header('Location: login.html');
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>
</body>
</html>
    



