<?php

namespace Robot;

abstract class Weapon{
    public $bullet;
    function __construct($bulletNum)
    {
        $this->chargeBullet($bulletNum);
    }

    abstract function chargeBullet($bulletNum);
}