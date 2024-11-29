<?php
/**
 * connexion à la base de données
 */
class Database {
    private static $instance = null;
    private $pdo;

    private function __construct() {
        $config = include(__DIR__ . '/../config.php');
        $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['dbname'];
        $this->pdo = new PDO($dsn, $config['db']['user'], $config['db']['password']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->pdo;
    }
}
?>