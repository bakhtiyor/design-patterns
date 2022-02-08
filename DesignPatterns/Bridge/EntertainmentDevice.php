<?php
namespace Bridge;

abstract class EntertainmentDevice
{
    public int $deviceState;
    public int $maxSetting;
    public int $volumeLevel = 0;

    public abstract function buttonFivePressed();
    public abstract function buttonSixPressed();

    public function deviceFeedback(){
        if ($this->deviceState > $this->maxSetting || $this->deviceState < 0)
            $this->deviceState = 0;
        print("On ".$this->deviceState.PHP_EOL);
    }

    public function buttonSevenPressed()
    {
        $this->volumeLevel ++;
        print("Volume at:".$this->volumeLevel.PHP_EOL);
    }

    public function buttonEightPressed()
    {
        $this->volumeLevel --;
        print("Volume at:".$this->volumeLevel.PHP_EOL);
    }
}