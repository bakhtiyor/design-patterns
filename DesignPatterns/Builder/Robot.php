<?php

namespace Builder;

class Robot implements RobotPlan
{
    private string $robotHead;
    private string $robotTorso;
    private string $robotArms;
    private string $robotLegs;

    public function setRobotHead(string $head): void
    {
        $this->robotHead = $head;
    }

    public function getRobotHead(): string
    {
        return $this->robotHead;
    }

    public function setRobotTorso(string $torso): void
    {
        $this->robotTorso = $torso;
    }

    public function getRobotTorso(): string
    {
        return $this->robotTorso;
    }

    public function setRobotArms(string $arms): void
    {
        $this->robotArms = $arms;
    }

    public function getRobotArms(): string
    {
        return $this->robotArms;
    }

    public function setRobotLegs(string $legs): void
    {
        $this->robotLegs = $legs;
    }

    public function getRobotLegs(): string
    {
        return $this->robotLegs;
    }
}