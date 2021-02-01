<?php
namespace ToisonDor\Controller;
use ToisonDor\Model\ArgaunotModel;
use PDO;

class ArgaunotController {
    protected $model;
        public function test(){
            $this->model = new ArgaunotModel();
        }
}

