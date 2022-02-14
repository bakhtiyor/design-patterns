<?php

namespace AbstractFactory\Sample2;

abstract class EnemyShip
{
    private string $name;
    // Newly defined objects that represent weapon & engine
    // These can be changed easily by assigning new parts
    // in UFOEnemyShipFactory or UFOBossEnemyShipFactory

    public ESWeapon $weapon;
    public ESEngine $engine;

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $newName)
    {
        $this->name = $newName;
    }
    public abstract function makeShip():void;

    // Because I defined the toString method in engine
    // when it is printed the String defined in toString goes
    // on the screen
    public function followHeroShip():void{
        print($this->getName() . " is following the hero at " . $this->engine.PHP_EOL);
	}

    public function displayEnemyShip():void{
        print($this->getName() . " is on the screen".PHP_EOL);
	}

    public function enemyShipShoots():void{
        print($this->getName() . " attacks and does " . $this->weapon.PHP_EOL);
	}

    public function __toString()
    {
        return "The " . $this->name . " has a top speed of " . $this->engine . " and an attack power of " . $this->weapon;
    }
}