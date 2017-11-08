<?php   

namespace strategie\comportement;

use strategie\comportement\Action;

class ActionCuisine implements Action {
    public function doAction(){
        echo "Le robot cuisine.<br \>";
    }
}