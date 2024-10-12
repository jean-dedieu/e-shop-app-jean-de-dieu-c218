<?php
require __DIR__ . '/../app/controllers/ProductController.php';
require __DIR__ . '/../app/models/Database.php';

$controller = new ProductController();

$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Routing simple
if ($request == '/' && $method == 'GET') {
    $controller->index();
} elseif (preg_match('/^\/product\/(\d+)$/', $request, $matches)) {
    $controller->show($matches[1]);
} elseif (preg_match('/^\/add-to-cart\/(\d+)$/', $request, $matches)) {
    $controller->addToCart($matches[1]);
} elseif ($request == '/cart' && $method == 'GET') {
    $controller->showCart();
} elseif ($request == '/checkout' && $method == 'GET') {
    $controller->checkout();
} else {
    echo "404 - Page non trouvée";
}
?>