<?php

namespace Bridge;

class TVRemoteMute extends RemoteButton
{

    public function __construct(EntertainmentDevice $newDevice)
    {
        parent::__construct($newDevice);
    }

    public function buttonNinePressed()
    {
        print("TV was Muted".PHP_EOL);
    }
}