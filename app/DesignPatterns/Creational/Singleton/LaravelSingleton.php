<?php

namespace App\DesignPatterns\Creational\Singleton;

class LaravelSingleton implements AnotherConnection
{
    private $test;


    public function setTest($test)
    {
        $this->test = $test;

    }

}
