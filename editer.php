<?php
$host = 'localhost';
$dbname = 'Site';
$user = 'root';
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user);
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
    exit;
}

if(isset($_GET['id'])){
  $id = $_GET['id'];

  // Préparez votre requête SQL en utilisant la méthode prepare() de l'objet de connexion à la base de données
  $query = $db->prepare("SELECT * FROM products WHERE id = ?");
  $query->execute([$id]);
  $libelle_produit = $query->fetch(PDO::FETCH_OBJ);

  if(isset($_POST['modifier'])){
      $libelle = $_POST['libelle'];

      // Préparez votre requête SQL pour mettre à jour le libellé du produit
      $requete = $db->prepare("UPDATE products SET libelle_products = ? WHERE id = ?");
      $requete->execute([$libelle, $id]);

      header('location: index.php?p=editer.php');
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editer.css">
    <title>Modifier le produit</title>
</head>
<body>
<form action="" method="post">
  <div class="form-group">
    <label for="img">Image:</label>
    <input type="file" class="form-control" id="img" name="img" accept="image/*"> <!-- Champ d'entrée d'image -->
  </div><br><br>
  <div class="form-group">
    <label for="price">Prix:</label>
    <input type="number" class="form-control" id="price" name="price" value="<?php echo isset($product['price']) ? $product['price'] : ''; ?>">
  </div><br><br>
  <div class="form-group">
    <label for="name">Nom:</label>
    <input type="text" class="form-control" name="name" value="<?php echo isset($product['name']) ? $product['name'] : ''; ?>">
  </div><br><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
