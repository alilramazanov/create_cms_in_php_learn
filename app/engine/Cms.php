<?php

namespace Engine;

// Класс CMS это точка запуска приложения, которая будет принимать только DI контейнер
class Cms
{

    private $DI;


    public function __construct($di)
    {
        $this->DI = $di;
    }

    /**
     * Run cms
     * @return void
     */
    public function run(){
        echo "Hello CMS";
    }

}