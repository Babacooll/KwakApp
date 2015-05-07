<?php

$routing = $application->getDependencyManager()->get('routingDefinition');

$routing->addGet('home', '/welcome/{name}.{_format}', 'App\Controller\FrontController:test');
$routing->addPost('welcome', '/welcome', 'Controller:welcome');
