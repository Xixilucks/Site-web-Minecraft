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
// Se connecter à la base de données
$conn = mysqli_connect("localhost", "nom_utilisateur", "mot_de_passe", "nom_de_la_base_de_donnees");

// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Récupérer les valeurs du formulaire
    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mot_de_passe = mysqli_real_escape_string($conn, $_POST['mot_de_passe']);

    // Vérifier si l'utilisateur existe déjà dans la base de données
    $result = mysqli_query($conn, "SELECT * FROM utilisateurs WHERE email='$email'");
    $count = mysqli_num_rows($result);

    if ($count == 0) {
        // Ajouter l'utilisateur à la base de données
        $sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES ('$nom', '$email', '$mot_de_passe')";
        
        if (mysqli_query($conn, $sql)) {
            echo "L'utilisateur a été ajouté avec succès à la base de données.";
        } else {
            echo "Une erreur s'est produite : " . mysqli_error($conn);
        }
    } else {
        echo "L'utilisateur existe déjà dans la base de données.";
    }
}

// Fermer la connexion
mysqli_close($conn);
?>
    </div>
</body>
</html>