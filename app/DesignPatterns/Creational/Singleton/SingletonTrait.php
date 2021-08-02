<?php

namespace App\DesignPatterns\Creational\Singleton;

trait SingletonTrait
{
    private static $instance = null;

    private function __construct()
    {
    }


    private function __clone()
    {

    }

    //закрыть десерелеализацию

    private function __wakeup() {

    }


    public static function getInstance()
    {

        return static::$instance ?? (static::$instance = new static());
    }






}
