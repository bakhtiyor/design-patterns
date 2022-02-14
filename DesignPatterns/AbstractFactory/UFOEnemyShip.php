<?php

namespace AbstractFactory;

class UFOEnemyShip extends EnemyShip
{
    // We define the type of ship we want to create
    // by stating we want to use the factory that
    // makes enemy ships

    public EnemyShipFactory $shipFactory;

    // The enemy ship required parts list is sent to
    // this method. They state that the enemy ship
    // must have a weapon and engine assigned. That
    // object also states the specific parts needed
    // to make a regular UFO versus a Boss UFO
    public function __construct(EnemyShipFactory $shipFactory)
    {
        $this->shipFactory = $shipFactory;
    }

    // EnemyShipBuilding calls this method to build a
    // specific UFOEnemyShip
    public function makeShip(): void
    {
        print("Making enemy ship " . $this->getName().PHP_EOL);

        // The specific weapon & engine needed were passed in
        // shipFactory. We are assigning those specific part
        // objects to the UFOEnemyShip here
        $this->weapon = $this->shipFactory->addESGun();
        $this->engine = $this->shipFactory->addESEngine();
    }
}