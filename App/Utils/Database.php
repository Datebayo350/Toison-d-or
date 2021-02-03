<?php
namespace ToisonDor\Utils;
require "../../vendor/autoload.php";
use PDO;

class Database {
    
    protected static $databaseConnection;
    protected static $instance;

    public function __construct() {
     
        $configData = parse_ini_file(__DIR__.'/../../config.ini'); 
        try{
            static::$databaseConnection = new PDO(
                "mysql:host={$configData['DB_HOST']};port=3306;dbname={$configData['DB_NAME']};charset=utf8",
                $configData['DB_USERNAME'],
                $configData['DB_PASSWORD'],
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                )
            );
        }catch (\Exception $e) {
            echo 'Erreur de connexion...<br>';
            echo $e->getMessage().'<br>';
        }
    }

    public static function getPDO() {
        
        if (empty(static::$instance)) {
            static::$instance = new Database();
        }
        
        return static::$instance::$databaseConnection;
    }
}
