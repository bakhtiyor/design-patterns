<?php
namespace Factory\Sample2;

abstract class EnemyShip
{
    private string $name;
    private $amtDamage;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDamage()
    {
        return $this->amtDamage;
    }

    public function setDamage($amtDamage): void
    {
        $this->amtDamage = $amtDamage;
    }

    public function followHeroShip(){
        print($this->getName()." is following the hero".PHP_EOL);
    }

    public function displayEnemyShip()
    {
        print($this->getName()." is on the screen".PHP_EOL);
    }

    public function enemyShipShoots()
    {
        print($this->getName()." attacks and does ".$this->getDamage().PHP_EOL);
    }
}