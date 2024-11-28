<?php
$publicPath = __DIR__ . '/public';

// Ensure the file exists
if (is_dir($publicPath)) {
    require_once $publicPath . '/index.php';
} else {
    http_response_code(404);
    echo "Public directory not found.";
    exit;
}
