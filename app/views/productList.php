<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique de location de DVD</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1>Nos DVDs</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <a href="/product/<?php echo $product['id_dvd']; ?>">
                    <?php echo $product['titre']; ?>
                </a>
                <a href="/add-to-cart/<?php echo $product['id_dvd']; ?>">Ajouter au panier</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="/cart">Voir le panier</a>
</body>
</html>
