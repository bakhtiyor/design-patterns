<?php

use Bridge\DVDDevice;
use Bridge\DVDRemote;
use Bridge\TVDevice;
use Bridge\TVRemoteMute;
use Bridge\TVRemotePause;

require_once 'vendor/autoload.php';

$theTV = new TVRemoteMute(new TVDevice(1, 200));
$theTV2 = new TVRemotePause(new TVDevice(1, 200));
$theDVD = new DVDRemote(new DVDDevice(1, 14));

print("Test TV with Mute".PHP_EOL);
$theTV->buttonFivePressed();
$theTV->buttonSixPressed();
$theTV->buttonNinePressed();
$theTV->buttonSevenPressed();
$theTV->buttonEightPressed();
$theTV->buttonEightPressed();
$theTV->deviceFeedback();
print("*********".PHP_EOL);

print("Test TV with Pause".PHP_EOL);
$theTV2->buttonFivePressed();
$theTV2->buttonSixPressed();
$theTV2->buttonSixPressed();
$theTV2->buttonSixPressed();
$theTV2->buttonSixPressed();
$theTV2->buttonNinePressed();
$theTV2->deviceFeedback();
print("*********".PHP_EOL);

print("Test DVD".PHP_EOL);
$theDVD->buttonFivePressed();
$theDVD->buttonSixPressed();
$theDVD->buttonNinePressed();
$theDVD->buttonNinePressed();
print("*********".PHP_EOL);