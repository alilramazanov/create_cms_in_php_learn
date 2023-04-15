<?php

require __DIR__.'/../vendor/autoload.php';

use Engine\Cms;
use Engine\Core\Database\Connection;
use Engine\DI\DI;

try {
    // Dependency Injection
    $di = new DI();

    $services = require __DIR__.'/Config/Service.php';

    foreach ($services as $service) {
        /**
         * @var \Engine\Service\AbstractProvider $provider
         */
        $provider = new $service($di);

        $provider->init();
    }

    $cms = new Cms($di);
    $cms->run();

    $connection = new Connection();
    var_dump($connection);
} catch (ErrorException $e) {
    echo $e->getMessage();
}