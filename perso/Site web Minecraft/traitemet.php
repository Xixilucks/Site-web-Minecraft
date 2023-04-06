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
// informations de connexion à la base de données
$host = 'minecra0311.mysql.db'; // ou l'adresse IP du serveur MySQL
$username = 'minecra0311'; // le nom d'utilisateur de la base de données
$password = 'Yanis0311'; // le mot de passe de la base de données
$dbname = 'minecra0311'; // le nom de la base de données

// établir la connexion à la base de données
$conn = mysqli_connect($host, $username, $password, $dbname);

// vérifier si la connexion est établie
if (!$conn) {
    die("La connexion a échoué : " . mysqli_connect_error());
}

// vérifier si le formulaire a été soumis
if (isset($_POST['email']) && isset($_POST['mot_de_passe'])) {
    // récupérer les informations de connexion depuis le formulaire
    $email = $_POST['email'];
    $password = $_POST['mot_de_passe'];
    
    // requête SQL pour vérifier si les informations sont correctes
    $sql = "SELECT * FROM utilisateurs WHERE email = '$email' AND mot_de_passe = '$password'";
    $result = mysqli_query($conn, $sql);
    
    // vérifier si la requête a renvoyé un résultat
    if (mysqli_num_rows($result) > 0) {
        // redirection vers la page de succès
        header('Location: Page accueil 2.html');
    } else {
        // redirection vers la page de connexion
        header('Location: login.html');
    }
}

// fermer la connexion à la base de données
mysqli_close($conn);
?>
</body>
</html>
    



