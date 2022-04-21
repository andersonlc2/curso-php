<?php
require "vendor/autoload.php";

use \classes\matematica\MatematicaBasica;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('teste.log', Logger::WARNING));

$m = new MatematicaBasica();
echo $m->somar(10, 10);

// add records to the log
$log->warning('Foo');
$log->error('Bar');