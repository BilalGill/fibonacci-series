<?php

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);

require ROOT . 'vendor/autoload.php';

use Flix\Fibonacci;

/*
 * Usage Example of Fibonacci Library
 * $argv[1] receives the command line passed value for this file e.g php src/index.php 10
 */

$obj = new Fibonacci();

if(!isset($argv[1])) {
    echo "Please give valid integer input. \n";
}
else {
    $number = $obj->getNumber($argv[1]);
    echo $number . "\n";
}

