<?php

namespace Factory\Sample2;

class BigUFOEnemyShip extends UFOEnemyShip
{
    public function __construct()
    {
        $this->setName("Big UFO Enemy Ship");
        $this->setDamage(40);
    }
}