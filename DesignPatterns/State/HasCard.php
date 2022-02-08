<?php

namespace State;

class HasCard implements ATMState
{
    private ATMMachine $atmMachine;

    public function __construct(ATMMachine $newATMMachine)
    {
        $this->atmMachine = $newATMMachine;
    }

    public function insertCard()
    {
        print("You can't enter more than one card".PHP_EOL);
    }

    public function ejectCard()
    {
        print("Card Ejected".PHP_EOL);
        $this->atmMachine->setATMState($this->atmMachine->getNoCardState());
    }

    public function insertPin(int $pinEntered)
    {
        if ($pinEntered == 1234){
            print("Correct PIN".PHP_EOL);
            $this->atmMachine->setCorrectPinEntered(true);
            $this->atmMachine->setATMState($this->atmMachine->getHasPin());
        }else{
            print("Wrong PIN".PHP_EOL);
            $this->atmMachine->setCorrectPinEntered(false);
            print("Card Ejected".PHP_EOL);
            $this->atmMachine->setATMState($this->atmMachine->getNoCardState());
        }
    }

    public function requestCash(int $cashToWithdraw)
    {
        print("Enter PIN First".PHP_EOL);
    }
}