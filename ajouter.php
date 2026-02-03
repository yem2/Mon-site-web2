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

// Récupération des données du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $img = $_POST['img'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    isset($_FILES['img']);
    

    // Requête d'insertion des données dans la table products (en utilisant des requêtes préparées pour sécuriser les données)
    $stmt = $conn->prepare("INSERT INTO products (img, price, name) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $img, $price, $name);
    
    if ($stmt->execute()) {
        echo "";
    } else {
        echo "Erreur lors de l insertion des donnees : " . $conn->error;
    }
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ajouter.css">
    <title>Ajouter au Panier</title>
</head>
<body>
    <h1 align="center">Ajouter au Panier</h1>
    <form action="" method="post">
    <div class="form-group">
        <label for="img">IMAGE:</label>
        <input type="file" class="form-control" enctype="multipart/form-data" name="img" accept="image/*" onchange="displayFileName(this)">

  </div><br><br>
  <div class="form-group">
        <label for="price">PRIX:</label>
    <input type="number" class="form-control"  name="price" value="<?php echo isset($product['price']) ? $product['price'] : ''; ?>">
  </div><br><br>
  <div class="form-group">
         <label for="name">NOM:</label>
    <input type="text" class="form-control" name="name" value="<?php echo isset($product['name']) ? $product['name'] : ''; ?>">
  </div><br><br>
        <button type="submit">Ajouter au Panier</button>
    </form>
<script>
    function displayFileName(input) {
    if (input.files && input.files[0]) {
        var file = input.files[0];
        
        // Affichage du nom du fichier
        console.log("Nom du fichier : " + file.name);

        // Extraction de l'extension du fichier
        var extension = file.name.split('.').pop();
        console.log("Extension du fichier : " + extension);

        // Affichage du type de fichier
        console.log("Type de fichier : " + file.type);

        // Affichage de l'image si le fichier est une image
        if (file.type.startsWith('image/')) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var imgElement = document.createElement('img');
                imgElement.src = e.target.result;
                imgElement.style.maxWidth = '100%'; // Définir la largeur maximale de l'image
                document.body.appendChild(imgElement); // Ajouter l'image à la page
            }
            reader.readAsDataURL(file);
        } else {
            console.log("Le fichier sélectionné n'est pas une image.");
        }
    }
}
</script>   
</body>
</html>

