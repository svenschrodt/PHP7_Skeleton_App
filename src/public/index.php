<?php declare(strict_types = 1);


// Enabling full error reporting for dev environment
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require_once '../../Bootstrap.php';

$foo = new \ProjectName\ExampleClass();
print_r($foo);