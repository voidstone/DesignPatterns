<?php

namespace App\DesignPatterns\Creational\Singleton;

class AdvancedSingleton
{
    use SingletonTrait;


    private $test;

    public function setTest($test)
    {
        $this->test = $test;

    }
}
