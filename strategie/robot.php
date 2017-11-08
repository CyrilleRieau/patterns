<?php 

namespace strategie;

abstract class Robot {
    private $action;
    private $communiquer;

    public function __construct(){
        
    }

    public function actionner(){
        $this->action->doAction();
    }

    public function communiquer(){
        $this->communiquer->doCommunication();
    }
}





?>