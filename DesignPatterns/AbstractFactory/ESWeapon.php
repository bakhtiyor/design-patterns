<?php

namespace AbstractFactory;

// Any part that implements the interface ESWeapon can replace that part in any ship
interface ESWeapon{
    // User is forced to implement this method
    // It outputs the string returned when the
    // object is printed
    public function __toString();
}