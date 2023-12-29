<?php

require __DIR__ . '/../vendor/autoload.php';

use Wild\Composer\Hello;

$talk = new Hello();

echo $talk->talk();
