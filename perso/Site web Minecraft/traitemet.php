<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Minecraft Manship Wiki</title>
    <style>
        #connexion-section {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            }

        #connexion-section {
            backdrop-filter: blur(5px);
            background-color: rgba(0, 0, 0, 0.5);
            }

        
        label{
            color: white;
            }
        

        h2 {
            text-align: center;
            font-size: 2em;
            margin-top: 0;
            margin-bottom: 20px;
            color: white;
            }
        
        body{
            background-image: url("fond_login.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Roboto', sans-serif;
            background-attachment: fixed;
            color: white;
            }
        a {
            background-color: black;
            color: white;
            border-radius: 20px; 
            padding: 10px 20px; 
            border: none;
            text-decoration: none;
            }

        a:hover {
            background-color: white;
            color: black;
            border-radius: 20px; 
            padding: 10px 20px; 
            border: none;
            text-decoration: none;
            }

        form{
            text-align: center;
            align-items: center;
        }
        
    </style>
</head>
<body>
    <div id="connexion-section">
    
<?php
// Connexion à la base de données MySQL
$servername = "mysqld";
$username = "root";
$password = "Yanis.0311";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connexion à la base de données échouée: " . $conn->connect_error);
}

// Vérification des données du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    // Vérification dans la base de données
    $sql = "SELECT * FROM utilisateurs WHERE email='$email' AND mot_de_passe='$mot_de_passe'";
    $resultat = $conn->query($sql);

    if ($resultat->num_rows == 1) {
        // Si les données correspondent, renvoie une page HTML de succès
        echo "<a href='#'>Retoutner à la page d'accuei</a>";
    } else {
        // Si les données ne correspondent pas, renvoie une page HTML d'erreur
        echo "<a href='#'>Retoutner à la page de connexion</a>";
    }
}

// Fermeture de la connexion à la base de données
$conn->close();
?>

    </div>
</body>
</html>
    



