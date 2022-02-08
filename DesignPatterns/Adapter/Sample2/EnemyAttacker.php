<?php
namespace Adapter\Sample2;

interface EnemyAttacker
{
    public function fireWeapon():void;
    public function driveForward():void;
    public function assignDriver(string $driverName):void;
}