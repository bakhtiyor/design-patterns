<?php

namespace Bridge;

class DVDRemote extends RemoteButton
{
    private $play = true;

    public function __construct(EntertainmentDevice $newDevice)
    {
        parent::__construct($newDevice);
    }

    public function buttonNinePressed()
    {
        $this->play = !$this->play;
        print("DVD is Playing: ".(($this->play) ? ' true ' : ' false ').PHP_EOL);
    }
}