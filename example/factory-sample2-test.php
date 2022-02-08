<?php
require_once 'vendor/autoload.php';

use Factory\Sample2\EnemyShip;
use Factory\Sample2\EnemyShipFactory;

$typeOfShip = readline("What type of ship (U/R/B)?");
$shipFactory = new EnemyShipFactory();
$theEnemy = $shipFactory->makeEnemyShip($typeOfShip);

doStuffEnemy($theEnemy);

function doStuffEnemy(EnemyShip $anEnemyShip){
    $anEnemyShip->displayEnemyShip();
    $anEnemyShip->followHeroShip();
    $anEnemyShip->enemyShipShoots();
}