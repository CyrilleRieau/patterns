<?php   

namespace strategie\comportement;

use strategie\comportement\Action;

class ActionMenage implements Action {
    public function doAction(){
        echo "Le robot fait le ménage.<br \>";
    }
}