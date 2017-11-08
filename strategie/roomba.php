<?php   
namespace strategie;

use strategie\comportement\ActionMenage;
use strategie\comportement\CommunicationLed;

class Roomba extends Robot {
    function __construct() {
        parent::__construct(new ActionMenage(), new CommunicationLed());
    }
}
