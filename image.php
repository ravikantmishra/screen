<?php 
include_once "vendor/autoload.php";
use Screen\Capture;

//uses how to capture a screenshot dynamically
$url = 'http://beta.eworksys.net';

// or
$screenCapture = new Capture();
$screenCapture->setUrl($url);

$screenCapture->setWidth(1200);
$screenCapture->setHeight(800);

// You also need to set the width and height.
$screenCapture->setClipWidth(1200);
$screenCapture->setClipHeight(800);

//$screenCapture->setBackgroundColor('#ffffff');

//$screenCapture->setUserAgentString('Some User Agent String');

$fileLocation = 'screenshots/';
$screenCapture->output->setLocation($fileLocation);

$filename = 'file.png';
$screenCapture->save($filename);