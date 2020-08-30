<?php

namespace Robot;

include_once __DIR__ . '/Weapon.php';

class Snipe extends Weapon{
    public function chargeBullet($bulletNum)
    {
        $this->bullet = $bulletNum;
    }
}