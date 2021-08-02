<?php

namespace App\DesignPatterns\Creational\Singleton;

class SimpleSingleton
{
    private static $instance;


    private $test;

    public static function getInstance()
    {
        return static::$instance ?? (static::$instance = new static());
    }


    public function setTest($val)
    {
        $this->test = $val;
    }
}
