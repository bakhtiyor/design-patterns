<?php

use Facade\YouTubeDownloader;

require_once 'vendor/autoload.php';
$facade = new YouTubeDownloader("APIKEY-XXXXXXXXX");
$facade->downloadVideo("https://www.youtube.com/watch?v=QH2-TGUlwu4");