<?php

namespace State;

class NoCash implements ATMState
{

    private ATMMachine $atmMachine;

    public function __construct(ATMMachine $newATMMachine)
    {
        $this->atmMachine = $newATMMachine;
    }

    public function insertCard()
    {
        print("We Don't Have Money".PHP_EOL);
    }

    public function ejectCard()
    {
        print("We Don't Have Money. You didn't enter a card".PHP_EOL);
    }

    public function insertPin(int $pinEntered)
    {
        print("We Don't Have Money".PHP_EOL);
    }

    public function requestCash(int $cashToWithdraw)
    {
        print("We Don't Have Money".PHP_EOL);
    }
}