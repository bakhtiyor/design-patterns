<?php
namespace Adapter\Sample2;

class EnemyRobot
{
    public function smashWithHands(){
        $attackDamage = random_int(1, 10);
        print("Enemy Robot Causes $attackDamage Damage With Its Hands".PHP_EOL);
    }

    public function walkForwad(){
        $movement = random_int(1, 5);
        print("Enemy Robot Walks Forward $movement Spaces".PHP_EOL);
    }

    public function reactToHuman(string $driverName){
        print("Enemy Robot Tramps on $driverName".PHP_EOL);
    }
}