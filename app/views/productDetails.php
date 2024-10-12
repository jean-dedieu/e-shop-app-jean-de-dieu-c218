<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['titre']; ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1><?php echo $product['titre']; ?></h1>
    <p><?php echo $product['description']; ?></p>
    <p>Genre : <?php echo $product['genre']; ?></p>
    <p>Année de sortie : <?php echo $product['annee_sortie']; ?></p>
    <a href="/add-to-cart/<?php echo $product['id_dvd']; ?>">Ajouter au panier</a>
    <a href="/">Retour aux produits</a>
</body>
</html>
