<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Site";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Récupération de l'ID du produit à supprimer
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $productId = $_POST['id'];

    // Requête de suppression du produit
    $sql = "DELETE FROM products WHERE id = $productId";

    if ($conn->query($sql) === TRUE) {
        echo "Le produit a été supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression du produit : " . $conn->error;
    }
}

$conn->close();
?>
