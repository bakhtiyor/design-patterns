<?php
namespace Adapter\Sample2;

class EnemyRobotAdapter implements EnemyAttacker
{
    public EnemyRobot $theRobot;

    public function __construct(EnemyRobot $newRobot)
    {
        $this->theRobot = $newRobot;
    }


    public function fireWeapon(): void
    {
        $this->theRobot->smashWithHands();
    }

    public function driveForward(): void
    {
        $this->theRobot->walkForwad();
    }

    public function assignDriver(string $driverName): void
    {
        $this->theRobot->reactToHuman($driverName);
    }
}