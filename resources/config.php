<?php


// ob_start();

session_start();
// session_destroy();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);


defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");


defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", __DIR__ . DS . "uploads");


defined("DB_HOST") ? null : define("DB_HOST", "e7qyahb3d90mletd.chr7pe7iynqr.eu-west-1.rds.amazonaws.com");
defined("DB_USER") ? null : define("DB_USER","hhxix97i153a8gn0");



defined("DB_PASS") ? null : define("DB_PASS", "j6aj08bi9xdazdug");

defined("DB_NAME") ? null : define("DB_NAME",  "qnrmqtu379xet78q");



$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);


require_once __DIR__ . '/../vendor/autoload.php';

\Dotenv\Dotenv::createImmutable(__DIR__)->load();


require_once("functions.php");
require_once("cart.php");


 ?>
