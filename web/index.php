<?php

require __DIR__ . '/../bootstrap/boostrap.php';

$response = $application->run();

$application->output($response);
