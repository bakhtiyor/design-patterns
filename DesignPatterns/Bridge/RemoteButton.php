<?php

namespace Bridge;

abstract class RemoteButton
{
    private EntertainmentDevice $theDevice;

    /**
     * @param EntertainmentDevice $theDevice
     */
    public function __construct(EntertainmentDevice $newDevice)
    {
        $this->theDevice = $newDevice;
    }

    public function buttonFivePressed()
    {
        $this->theDevice->buttonFivePressed();
    }

    public function buttonSixPressed()
    {
        $this->theDevice->buttonSixPressed();
    }

    public function buttonSevenPressed()
    {
        $this->theDevice->buttonSevenPressed();
    }

    public function buttonEightPressed()
    {
        $this->theDevice->buttonEightPressed();
    }

    public function deviceFeedback()
    {
        $this->theDevice->deviceFeedback();
    }

    public abstract function buttonNinePressed();
}