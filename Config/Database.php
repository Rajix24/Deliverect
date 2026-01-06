<?php
namespace Config;
use \PDO;
class Database{

    // private static ?Database $instance = null;
    // private ?PDO $pdo;

    // private function __construct(){
    //     $this->pdo = new PDO("mysql:host=localhost;dbname=deliverect", 'root', '');
    // }

    // public static function getInstance(): Database{
    //     if(self::$instance == null){
    //         self::$instance = new Database();
    //     }
    //     return self::$instance;
    // }


    //     public function getConnection(): PDO{
            
    //     return $this->pdo;
    // }

    private static $conn = null;
    private function __construct(){}

    public static function connect(){
        if (self::$conn == null) {
        self::$conn = new PDO("mysql:host=127.0.0.1;dbname=deliverect", 'root', '');
        }
        return self::$conn;
    } 

}
