<?php
namespace Adapter\Sample2;

class EnemyTank implements EnemyAttacker
{

    public function fireWeapon(): void
    {
        $attackDamage = random_int(1, 10);
        print("Enemy Tank Does $attackDamage Damage".PHP_EOL);
    }

    public function driveForward(): void
    {
        $movement = random_int(1, 5);
        print("Enemy Tank moves $movement spaces".PHP_EOL);
    }

    public function assignDriver(string $driverName): void
    {
        print("$driverName is driving the Tank".PHP_EOL);
    }
}