<?php   

namespace strategie\comportement;

use strategie\comportement\Communication;

class CommunicationVocale implements Communication {
    public function doCommunication():string{
        return "Le temps est incroyable.<br \>";
    }
}