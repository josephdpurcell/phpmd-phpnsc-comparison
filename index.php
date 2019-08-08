<?php

use PhpmdPhpnscComparison\Controller\Spaceship;
use Symfony\Component\HttpFoundation\Request;

require_once 'vendor/autoload.php';

$request = Request::createFromGlobals();
$controller = new Spaceship();

$response = $controller->launch($request);

$response->send();

