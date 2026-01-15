<?php
namespace   App\Config;
use Exception;
use PDO;
class Database{
    protected static $conn = null;

    public function __construct(){}

    public static function ccontact(){
        try {
            if (self::$conn == null) {
                self::$conn = new PDO("mysql:host=127.0.1;dbname=biblio", 'root', '');
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch (Exception $e) {
          echo 'connect with database is faile '.$e->getMessage();  
        }
        return self::$conn;
    }
}