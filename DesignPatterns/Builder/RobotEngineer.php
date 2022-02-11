<?php

namespace Builder;

class RobotEngineer
{
    private RobotBuilder $robotBuilder;

    public function __construct(RobotBuilder $robotBuilder)
    {
        $this->robotBuilder = $robotBuilder;
    }

    public function getRobot(): Robot
    {
        return $this->robotBuilder->getRobot();
    }

    public function makeRobot(): void
    {
        $this->robotBuilder->buildRobotHead();
        $this->robotBuilder->buildRobotTorso();
        $this->robotBuilder->buildRobotArms();
        $this->robotBuilder->buildRobotLegs();
    }

}