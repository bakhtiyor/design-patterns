<?php

namespace AbstractFactory\Sample2;

// This is the only class that needs to change, if you
// want to determine which enemy ships you want to
// provide as an option to build
class UFOEnemyShipBuilding extends EnemyShipBuilding
{
    protected function makeEnemyShip(string $typeOfShip): EnemyShip
    {
        $theEnemyShip = null;
        // If UFO was sent grab use the factory that knows
        // what types of weapons and engines a regular UFO
        // needs. The EnemyShip object is returned & given a name

        if($typeOfShip == "UFO"){
            $shipPartsFactory = new UFOEnemyShipFactory();
			$theEnemyShip = new UFOEnemyShip($shipPartsFactory);
			$theEnemyShip->setName("UFO Grunt Ship");
		}else if($typeOfShip == "UFO BOSS"){
            $shipPartsFactory = new UFOBossEnemyShipFactory();
			$theEnemyShip = new UFOBossEnemyShip($shipPartsFactory);
			$theEnemyShip->setName("UFO Boss Ship");

		}
        return $theEnemyShip;
    }
}