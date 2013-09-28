#!/usr/bin/env php
<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use Tophsic\RotateWallpaper\Command as Command;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new Command());
$application->run();