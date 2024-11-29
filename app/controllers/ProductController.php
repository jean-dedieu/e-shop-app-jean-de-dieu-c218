<?php

class ProductController {

    // Liste des produits (page d'accueil)
    public function index() {
        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->query("SELECT * FROM dvd");
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include __DIR__ . '/../views/productList.php';  // Affichage de la vue
    }

    // Affichage d'un produit spécifique
    public function show($id) {
        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->prepare("SELECT * FROM dvd WHERE id_dvd = ?");
        $stmt->execute([$id]);
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($product) {
            include __DIR__ . '/../views/productDetails.php';  // Affichage de la vue
        } else {
            echo "Produit non trouvé";
        }
    }

    // Ajout au panier
    public function addToCart($id) {
        session_start();
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (!isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id] = 1;
        } else {
            $_SESSION['cart'][$id]++;
        }

        header('Location: /cart');
    }

    // Affichage du panier
    public function showCart() {
        session_start();
        $cart = $_SESSION['cart'] ?? [];

        $pdo = Database::getInstance()->getConnection();
        $products = [];

        if (!empty($cart)) {
            $ids = implode(',', array_keys($cart));
            $stmt = $pdo->query("SELECT * FROM dvd WHERE id_dvd IN ($ids)");
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        include __DIR__ . '/../views/cart.php';  // Affichage de la vue
    }

    // Simulation du passage de commande
    public function checkout() {
        session_start();
        $_SESSION['cart'] = [];  // Vider le panier après commande
        echo "Commande passée avec succès.";
    }
}
?>