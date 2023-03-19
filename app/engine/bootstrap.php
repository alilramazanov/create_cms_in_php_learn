<?php

require __DIR__ . '/../vendor/autoload.php';

use Engine\Cms;
use Engine\DI\DI;

try {

    // Dependency Injection
    $di = new DI();

    $cms = new Cms($di);
    $cms->run();


} catch (ErrorException $e){
    echo $e->getMessage();
}