<?php
// Déclaration des constantes pour stocker les informations de connexion à la base de données
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'Site');

// Connexion à la base de données
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Vérification de la connexion à la base de données
if (!$conn) {
    die('Erreur de connexion : '. mysqli_connect_error());
}

// Requête SQL pour récupérer les informations sur les produits
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

// Vérification si la requête a abouti
if (!$result) {
    die('Erreur de requête : '. mysqli_error($conn));
}

// Création d'un tableau vide pour stocker les informations sur les produits
$products = array();

// Parcours des résultats de la requête et ajout des informations sur les produits au tableau
while ($product = mysqli_fetch_assoc($result)) {
    $products[] = $product;
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Produits.css">
    <title>Document</title>
</head>
<body>
    <!-- Tableau des produits -->
<table class="table">
    <thead>
        <div class="container">
            <h1>Categories</h1>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Prix</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product) :?>
        <tr>
            <td><?php echo $product['id'];?></td>
            <td><img src="src/<?= $product['img'] ?>" alt="<?= $product['name'] ?>"></td>
            <td><?php echo $product['price'];?>Fcfa</td>
            <td><?php echo $product['name'];?></td>
            <td>
                <a href="../editer/editer.php?id=<?php echo $product['id'];?>" class="btn btn-primary">Editer</a>
                <a href="#" class="btn btn-danger delete-product" data-id="<?= $product['id'] ?>">Supprimer</a>
                <a href="../ajouter/ajouter.php?id=<?php echo $product['id'];?>" class="btn btn-ajouter">Ajouter</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.delete-product');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const productId = this.dataset.id;
            
            fetch('../supprimer/supprimer.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: id=$_productId
        });
            then(response => response.text())
            then(data => {
                console.log(data);
                // Faire quelque chose avec la réponse, comme recharger la page
                location.reload();
            })
            .catch(error => console.error('Erreur lors de la suppression du produit : ', error));
        });
    });
});
</script>


</body>
</html>


