<?php

namespace Factory\Sample2;

class EnemyShipFactory
{
    public function makeEnemyShip($newShipType){
        if ($newShipType=='U')
            return new UFOEnemyShip();
        else if ($newShipType=='B')
            return new BigUFOEnemyShip();
        else if ($newShipType=='R')
            return new RocketEnemyShip();
        else
            return null;
    }
}