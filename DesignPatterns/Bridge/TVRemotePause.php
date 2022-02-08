<?php

namespace Bridge;

class TVRemotePause extends RemoteButton
{

    public function __construct(EntertainmentDevice $newDevice)
    {
        parent::__construct($newDevice);
    }

    public function buttonNinePressed()
    {
        print("TV was Paused".PHP_EOL);
    }
}