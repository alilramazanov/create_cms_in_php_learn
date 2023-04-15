<?php

namespace Engine;

use Engine\Core\Router\Router;
use Engine\DI\DI;

/**
 * Класс CMS это точка запуска приложения, которая будет принимать только DI контейнер
 * @property DI $di
 * @property Router $router
 */
class Cms
{
    private DI $di;

	public Router $router;


    public function __construct(DI $di)
    {
        $this->di = $di;
		$this->router = $this->di->get('router');
    }

    /**
     * Run cms
     * @return void
     */
    public function run(){
        $this->router->add('home', '/','HomeController:index');
        $this->router->add('product', '/product/{id}','ProductController:index');

		dump($this->di);
    }

}