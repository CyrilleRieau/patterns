<?php

namespace adaptateur;

class Humain {
    private $nom;
    private $prenom;

    function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function allerSurYoutube() {
        echo "Regarde le joueur du Grenier et kiffe.";
    }

    public function raconterSaVie():string {
        return "Je m'appelle ".$this->nom.' '.$this->prenom.'.';
    }
    public function sePlaintDeSonTravail():string{
        return "Ma vie pue la merde. ";
    }
}