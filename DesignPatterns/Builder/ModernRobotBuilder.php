<?php

namespace Builder;

class ModernRobotBuilder implements RobotBuilder
{
    private Robot $robot;

    public function __construct()
    {
        $this->robot = new Robot();
    }

    public function buildRobotHead(): void
    {
        $this->robot->setRobotHead("Modern Tin Head");
    }

    public function buildRobotTorso(): void
    {
        $this->robot->setRobotTorso("Modern Tin Torso");
    }

    public function buildRobotArms(): void
    {
        $this->robot->setRobotArms("Modern Blowtorch Arms");
    }

    public function buildRobotLegs(): void
    {
        $this->robot->setRobotLegs("Modern Roller Skates");
    }

    public function getRobot(): Robot
    {
        return $this->robot;
    }
}