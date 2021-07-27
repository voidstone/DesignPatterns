<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Classes\Bootstrap;


use App\DesignPatterns\Creational\AbstractFactory\interfaces\CheckBoxInterface;

class CheckBoxBootstrap implements CheckBoxInterface
{

    public function draw()
    {
        return __METHOD__;
    }
}
