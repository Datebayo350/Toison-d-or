<?php
namespace ToisonDor\Model;
use ToisonDor\Utils\Database;
require_once '../../vendor/autoload.php';

class ArgaunotModel {
    
    protected $id;
    protected $name;
    protected $adjective;
    private $pdo;

    public function __construct(){
        $this->pdo = Database::getPDO();
    }

    public function getAllArgaunotes() {
    
        $pdo = $this->pdo;
        $sql = "SELECT * FROM `Argaunotes`";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        // $results = $statement->fetchObject('\ToisonDor\Model\ArgaunotModel');
        $results = $statement->fetchAll(\PDO::FETCH_CLASS, '\ToisonDor\Model\ArgaunotModel');
        
        return $results; 



    }
    
    
    
    
}

$argaunotModel = new ArgaunotModel();
$resultat = $argaunotModel->getAllArgaunotes();
print_r($resultat);
var_dump($resultat);

// var_dump(Database::getPDO());

