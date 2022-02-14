<?php

use AbstractFactory\Sample2\UFOEnemyShipBuilding;

require_once 'vendor/autoload.php';

// EnemyShipBuilding handles orders for new EnemyShips
// You send it a code using the orderTheShip method &
// it sends the order to the right factory for creation

$MakeUFOs = new UFOEnemyShipBuilding();
$theGrunt = $MakeUFOs->orderTheShip("UFO");
print($theGrunt.PHP_EOL);

print("****************".PHP_EOL);

$theBoss = $MakeUFOs->orderTheShip("UFO BOSS");
print($theBoss.PHP_EOL);