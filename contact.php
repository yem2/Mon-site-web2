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
$sql = "SELECT * FROM contacts";
$result = mysqli_query($conn, $sql);

// Vérification si la requête a abouti
if (!$result) {
    die('Erreur de requête : '. mysqli_error($conn));
}

// Création d'un tableau vide pour stocker les informations sur les produits
$products = array();

// Parcours des résultats de la requête et ajout des informations sur les produits au tableau
while ($contact = mysqli_fetch_assoc($result)) {
    $contacts[] = $contact;
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>Contacts</title>
</head>
<body>
    <h1>Liste des Contacts</h1>

    <section>
        <table>
            <tr>
                <th>ID</th>
                <th>Nom complet</th>
                <th>Email</th>
                <th>Numéro de téléphone</th>
                <th>Sujet de l'email</th>
                <th>Message</th>
            </tr>
            <?php foreach ($contacts as $contact) :?>
            <tr>
                <td><?php echo $contact['id'];?></td>
                <td><?php echo $contact['full_name'];?></td>
                <td><?php echo $contact['email'];?></td>
                <td><?php echo $contact['mobile_number'];?></td>
                <td><?php echo $contact['email_subject'];?></td>
                <td><?php echo $contact['message'];?></td>
            </tr>
            <?php endforeach;?>
        </table>
    </section>

</body>
</html>

