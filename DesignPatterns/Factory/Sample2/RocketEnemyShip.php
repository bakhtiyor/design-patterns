<?php

namespace Factory\Sample2;

class RocketEnemyShip extends EnemyShip
{
    public function __construct()
    {
        $this->setName("Rocket Enemy Ship");
        $this->setDamage(10);
    }
}