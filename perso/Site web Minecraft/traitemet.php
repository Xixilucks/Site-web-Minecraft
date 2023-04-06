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
$dsn = "mysql:host=minecra0311.mysql.db;dbname=minecra0311";
$user = "minecra0311";
$password = "Yanis0311";
$pdo = new PDO($dsn, $user, $password);

// Vérification si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des informations du formulaire
    $email = $_POST['email'];
    $password = $_POST['mot_de_passe'];

    // Requête pour vérifier si l'email et le mot de passe sont présents dans la table "utilisateurs"
    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = :email AND password = :password");
    $stmt->execute(['email' => $email, 'mot_de_passe' => $password]);
    $utilisateur = $stmt->fetch();

    if ($utilisateur) {
        // Si l'utilisateur est trouvé dans la base de données, redirection vers une autre page HTML
        header('Location: Page accueil 2.html');
        exit;
    } else {
        // Si l'utilisateur n'est pas trouvé dans la base de données, redirection vers la page de connexion HTML
        header('Location: login.html');
        exit;
    }
}
?>
</body>
</html>
    



