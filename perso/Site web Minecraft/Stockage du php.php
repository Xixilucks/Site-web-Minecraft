connexion
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

insciption

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
