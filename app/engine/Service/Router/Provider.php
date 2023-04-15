<?php

namespace Engine\Service\Router;

use Engine\Core\Router\Router;
use Engine\Service\AbstractProvider;

class Provider extends AbstractProvider
{
	public $serviceName = 'router';

	function init()
	{
		$service = new Router('http://172.19.0.4/');
		$this->di->set($this->serviceName, $service);
	}
}