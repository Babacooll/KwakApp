<?php

require __DIR__ . '/../vendor/autoload.php';

use Kwak\Application;

$application = new Application();

$application->init();

require __DIR__ . '/../config/routes.php';
