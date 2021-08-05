<?php

namespace App\DesignPatterns\Creational\Multiton;


interface MultitonInterface
{

    public static function getInstance(string $instanceName) : self;

}
