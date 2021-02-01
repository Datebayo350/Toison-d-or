<?php
namespace ToisonDor\Model;

try {
    require '../vendor/autoload.php';
}catch( \Error $e){
    echo $e->getFile();
}

use ToisonDor\Utils\Database;

class ArgaunotModel {
    protected $id;
    protected $name;
    protected $adjective;

    public function __construct(){
        echo "ça fonctionne bien";
        $this->name = new Database;
        var_dump($this->name);
    }

}

$model = new Database();
// Error: Class 'ToisonDor\Utils\Database' not found in /var/www/html/wild-cod-school/Toison-d-or/ToisonDor/Model/ArgaunotModel.php on line 25
// Fatal error: Uncaught Error: Class 'ToisonDor\Utils\Database' not found in /var/www/html/wild-cod-school/Toison-d-or/ToisonDor/Model/ArgaunotModel.php on line 25