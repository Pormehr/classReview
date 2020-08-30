<?php

namespace Robot;

include_once __DIR__ . '/Weapon.php';

class Robot{

    public $name;

    function __construct($name, $weapon = null){
        $this->name = $name;
        $this->shoot($weapon);
    }

    function shoot(Weapon $weapon = null){
        if (isset($weapon)){
            echo "Boom!" . PHP_EOL;
        } else{
            echo "-\(\" \")/-" . PHP_EOL;
        }
    }
}