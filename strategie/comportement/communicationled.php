<?php   

namespace strategie\comportement;

use strategie\comportement\Communication;

class CommunicationLed implements Communication {
    public function doCommunication():string{
        return "Clignote sauvagement.<br \>";
    }
}