<?php

 
require_once   dirname(__FILE__) . '/../vendor/autoload.php';

\vsapp\AutoLoad::addDirectory(  dirname(__FILE__) . '/../src/' );

$app = \vsapp\App::current();
$app->setClassNameAliases('resource', '\app\Resource');

$app->run();