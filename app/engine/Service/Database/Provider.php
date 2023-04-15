<?php

namespace Engine\Service\Database;

use Engine\Core\Database\Connection;
use Engine\Service\AbstractProvider;

class Provider extends AbstractProvider
{
    public $serviceName = 'db';

    function init()
    {
        $db = new Connection();
        $this->di->set($this->serviceName, $db);
    }
}