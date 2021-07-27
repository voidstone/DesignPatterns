<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Classes\Bootstrap;


use App\DesignPatterns\Creational\AbstractFactory\interfaces\ButtonInterface;

class ButtonBootstrap implements ButtonInterface
{

    /**
     * @return string
     */
    public function draw()
    {
        return __CLASS__;
    }
}
