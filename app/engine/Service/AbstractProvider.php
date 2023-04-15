<?php

namespace Engine\Service;

use Engine\DI\DI;

abstract class AbstractProvider
{
    protected $di;

    public function __construct(DI $di)
    {
        $this->di = $di;
    }

    /**
     * @return mixed
     *
     * Инициализация нового сервиса (то есть добавление объекта в di контейнер. ключ (название сервиса) => значение(объект готовый))
     */
    abstract function init();

}