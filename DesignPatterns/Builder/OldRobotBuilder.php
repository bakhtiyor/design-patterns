<?php

namespace Builder;

class OldRobotBuilder implements RobotBuilder
{
    private Robot $robot;

    public function __construct()
    {
        $this->robot = new Robot();
    }

    public function buildRobotHead(): void
    {
        $this->robot->setRobotHead("Tin Head");
    }

    public function buildRobotTorso(): void
    {
        $this->robot->setRobotTorso("Tin Torso");
    }

    public function buildRobotArms(): void
    {
        $this->robot->setRobotArms("Blowtorch Arms");
    }

    public function buildRobotLegs(): void
    {
        $this->robot->setRobotLegs("Roller Skates");
    }

    public function getRobot(): Robot
    {
        return $this->robot;
    }
}