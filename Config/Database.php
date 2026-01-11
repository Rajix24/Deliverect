<?php
namespace Config;
use PDO;
class Database{
    private static $conn = null;
    private function __construct(){}

    public static function connect(){
        if (self::$conn == null) {
        self::$conn = new PDO("mysql:host=127.0.0.1;dbname=deliverect", 'root', '');
        }
        return self::$conn;
    } 

}
