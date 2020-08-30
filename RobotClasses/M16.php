<?php

namespace Robot;

class M16 extends Weapon{
    public function chargeBullet($bulletNum)
    {
        $this->bullet = $bulletNum;
    }
}