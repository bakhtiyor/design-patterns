<?php

namespace Factory\Sample2;

class UFOEnemyShip extends EnemyShip
{
    public function __construct()
    {
        $this->setName("UFO Enemy Ship");
        $this->setDamage(20);
    }
}