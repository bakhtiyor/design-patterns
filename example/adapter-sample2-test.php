<?php

use Adapter\Sample2\EnemyRobot;
use Adapter\Sample2\EnemyRobotAdapter;
use Adapter\Sample2\EnemyTank;

require_once 'vendor/autoload.php';

$rx7Tank = new EnemyTank();
$fredTheRobot = new EnemyRobot();
$robotAdapter = new EnemyRobotAdapter($fredTheRobot);

print("The Robot".PHP_EOL);
$fredTheRobot->reactToHuman("Paul");
$fredTheRobot->walkForwad();
$fredTheRobot->smashWithHands();

print(PHP_EOL."The Enemy Tank".PHP_EOL);
$rx7Tank->assignDriver("Frank");
$rx7Tank->driveForward();
$rx7Tank->fireWeapon();

print(PHP_EOL."The Robot with Adapter".PHP_EOL);
$robotAdapter->assignDriver("Mark");
$robotAdapter->driveForward();
$robotAdapter->fireWeapon();