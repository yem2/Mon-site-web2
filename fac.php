<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fac.css">
    <title>Facture</title>
</head>
<body>
<form method="post" action="panier.php">
    <?php foreach ($panier as $product): ?>
        <p><?= $product['name'] ?> - <?= $product['prix'] ?>Fcfa</p>
    <?php endforeach; ?>

    <p>Total : <?= array_sum(array_column($panier, 'prix')) ?>Fcfa</p>

    <label for="mode_paiement">Choisissez votre mode de paiement :</label><br>
    <?php foreach ($optionsPaiement as $option => $frais): ?>
        <input type="radio" name="mode_paiement" value="<?= $option ?>"> <?= $option ?> (+<?= $frais ?> Fcfa)<br>
    <?php endforeach; ?>

    <br>

    <label for="mode_livraison">Choisissez votre mode de livraison :</label><br>
    <?php foreach ($optionsLivraison as $option => $frais): ?>
        <input type="radio" name="mode_livraison" value="<?= $option ?>"> <?= $option ?> (+<?= $frais ?> Fcfa)<br>
    <?php endforeach; ?>

    <br>
    <button type="submit" name="generer_facture">Générer la facture</button>
</form>
</body>
</html>
