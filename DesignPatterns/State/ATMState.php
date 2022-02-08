<?php
namespace State;

interface ATMState
{
    public function insertCard();
    public function ejectCard();
    public function insertPin(int $pinEntered);
    public function requestCash(int $cashToWithdraw);
}