<?php

use State\ATMMachine;

require_once 'vendor/autoload.php';

$atmMachine = new ATMMachine();
$atmMachine->insertCard();
$atmMachine->ejectCard();
$atmMachine->insertCard();
$atmMachine->insertPin(1234);
$atmMachine->requestCash(2000);
$atmMachine->insertCard();
$atmMachine->insertPin(12234);