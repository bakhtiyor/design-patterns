<?php

namespace Builder;

interface RobotBuilder
{
    public function buildRobotHead(): void;
    public function buildRobotTorso(): void;
    public function buildRobotArms(): void;
    public function buildRobotLegs(): void;
    public function getRobot(): Robot;
}