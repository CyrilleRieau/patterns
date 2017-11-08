<?php

function myLoader($className){
    $class = str_replace('\\', '/', $className);
    $class = strtolower($class);
    require($class .'.php');

}

spl_autoload_register('myLoader');

use adaptateur\Humain;
use adaptateur\HumainToRobot;
use adaptateur\Piece;

$piece = new Piece();

$humain = new Humain("Hashtag", "Bogoss");

$adaptateur = new HumainToRobot($humain);

$piece->ouvrirPorte($adaptateur);