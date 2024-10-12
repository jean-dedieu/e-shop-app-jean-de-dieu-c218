<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre panier</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1>Votre panier</h1>
    <ul>
        <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
                <li>
                    <?php echo $product['titre']; ?> (Quantité : <?php echo $_SESSION['cart'][$product['id_dvd']]; ?>)
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Votre panier est vide.</p>
        <?php endif; ?>
    </ul>
    <a href="/checkout">Passer la commande</a>
    <a href="/">Retour aux produits</a>
</body>
</html>