<?php

use Builder\ModernRobotBuilder;
use Builder\OldRobotBuilder;
use Builder\RobotEngineer;

require_once 'vendor/autoload.php';

$oldStyleRobot = new OldRobotBuilder();
$robotEngineer = new RobotEngineer($oldStyleRobot);
$robotEngineer->makeRobot();

$firstRobot = $robotEngineer->getRobot();
print("Robot Build".PHP_EOL);
print("Robot Head Type: ".$firstRobot->getRobotHead().PHP_EOL);
print("Robot Torso Type: ".$firstRobot->getRobotTorso().PHP_EOL);
print("Robot Arm Type: ".$firstRobot->getRobotArms().PHP_EOL);
print("Robot Leg Type: ".$firstRobot->getRobotLegs().PHP_EOL);

$modernStyleRobot = new ModernRobotBuilder();
$modernRobotEngineer = new RobotEngineer($modernStyleRobot);
$modernRobotEngineer->makeRobot();
$secondRobot = $modernRobotEngineer->getRobot();

print("Modern Robot Build".PHP_EOL);
print("Modern Robot Head Type: ".$secondRobot->getRobotHead().PHP_EOL);
print("Modern Robot Torso Type: ".$secondRobot->getRobotTorso().PHP_EOL);
print("Modern Robot Arm Type: ".$secondRobot->getRobotArms().PHP_EOL);
print("Modern Robot Leg Type: ".$secondRobot->getRobotLegs().PHP_EOL);
