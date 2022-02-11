<?php
namespace Builder;

interface RobotPlan
{
    public function setRobotHead(string $head): void;
    public function setRobotTorso(string $torso): void;
    public function setRobotArms(string $arms): void;
    public function setRobotLegs(string $legs): void;
}