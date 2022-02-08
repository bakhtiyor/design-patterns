<?php

namespace Bridge;

class DVDDevice extends EntertainmentDevice
{
    public function __construct(int $newDeviceState, int $newMaxSetting)
    {
        $this->deviceState = $newDeviceState;
        $this->maxSetting = $newMaxSetting;
    }

    public function buttonFivePressed()
    {
        $this->deviceState--;
        print("DVD Skips to Chapter".PHP_EOL);
    }

    public function buttonSixPressed()
    {
        $this->deviceState++;
        print("DVD Skips to Next Chapter".PHP_EOL);
    }
}