<?php

namespace State;

class HasPin implements ATMState
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
        print("Already Entered PIN".PHP_EOL);
    }

    public function requestCash(int $cashToWithdraw)
    {
        if ($cashToWithdraw > $this->atmMachine->getCashInMachine()){
            print("Don't have that cash".PHP_EOL);
            print("Card Ejected".PHP_EOL);
            $this->atmMachine->setATMState($this->atmMachine->getNoCardState());
        }else{
            print("$cashToWithdraw is provided by the machine".PHP_EOL);
            $this->atmMachine->setCashInMachine($this->atmMachine->getCashInMachine() - $cashToWithdraw);
            print("Card Ejected".PHP_EOL);
            $this->atmMachine->setATMState($this->atmMachine->getNoCardState());

            if ($this->atmMachine->getCashInMachine() <= 0){
                print("No cash left in ATM".PHP_EOL);
                $this->atmMachine->setATMState($this->atmMachine->getNoCashState());
            }
        }
    }
}