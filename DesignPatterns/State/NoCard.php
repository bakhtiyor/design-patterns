<?php

namespace State;

class NoCard implements ATMState
{
    private ATMMachine $atmMachine;

    public function __construct(ATMMachine $newATMMachine)
    {
        $this->atmMachine = $newATMMachine;
    }

    public function insertCard()
    {
        print("Please Enter a PIN".PHP_EOL);
        // change the state to hasCard, because now we have a card in ATM
        $this->atmMachine->setATMState($this->atmMachine->getYesCardState());
    }

    public function ejectCard()
    {
        print("Enter a card first".PHP_EOL);
    }

    public function insertPin(int $pinEntered)
    {
        print("Enter a card first".PHP_EOL);
    }

    public function requestCash(int $cashToWithdraw)
    {
        print("Enter a card first".PHP_EOL);
    }
}