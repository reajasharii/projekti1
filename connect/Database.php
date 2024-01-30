<?php 

class Database {
    private static $instance = null;
    private $connection = null;

    public function __construct() {
        $this->connection = new mysqli("localhost", "root", "", "shop");
    }

    public static function getInstance() {
        if(!self::$instance) 
            self::$instance = new self();
        
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}
//testim a eshte lidhur me sukses
/*$databaseInstance = Database::getInstance();
$connection = $databaseInstance->getConnection();

if ($connection && $connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} else {
    echo "Connection successful!";
}*/      
?>