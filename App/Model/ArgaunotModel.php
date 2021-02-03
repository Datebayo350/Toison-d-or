<?php
namespace ToisonDor\Model;
use ToisonDor\Utils\Database;
require '../../vendor/autoload.php';

class ArgaunotModel {
    
    protected $id;
    protected $name;
    protected $adjective;
    private $pdo;
    protected $argoName;
    protected $argoAdjective;

    public function __construct(){
        $this->pdo = Database::getPDO();
    }

    /**
     * Return an array with objects for each row of the Argaunotes table
     *
     * @return array 
     */
    public function getAllArgaunotes() {
    
        $pdo = $this->pdo;
        $sql = "SELECT * FROM `Argaunotes`";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll(\PDO::FETCH_GROUP);
        return $results; 

    }

    /**
     * Insert a new Argaunot in Database
     *
     */
    public function insertArgaunot() {
        if(!empty($_POST['charachterName'])){
            $argoName = $_POST['charachterName'];
        };
        if(!empty($_POST['charachterAdjective'])){
            $argoAdjective = $_POST['charachterAdjective'];
        };
        

        $pdo = $this->pdo;
        $sql = "INSERT INTO Argaunotes(`name`, `adjective`) VALUES (:name, :adjective)";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':name', $argoName);
        $statement->bindParam(':adjective', $argoAdjective);
        $results = $statement->execute();
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("Location: http://$host$uri/");
    }
    
}


