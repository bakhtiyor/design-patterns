<?php

namespace Bridge;

class TVDevice extends EntertainmentDevice
{

    public function __construct(int $newDeviceState, int $newMaxSetting)
    {
        $this->deviceState = $newDeviceState;
        $this->maxSetting = $newMaxSetting;
    }

    public function buttonFivePressed()
    {
        print ("Channel Down".PHP_EOL);
        $this->deviceState--;
    }

    public function buttonSixPressed()
    {
        print ("Channel Up".PHP_EOL);
        $this->deviceState++;
    }
}