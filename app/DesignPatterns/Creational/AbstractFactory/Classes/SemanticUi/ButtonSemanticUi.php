<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Classes\SemanticUi;


use App\DesignPatterns\Creational\AbstractFactory\interfaces\ButtonInterface;

class ButtonSemanticUi implements ButtonInterface
{
    public function draw()
    {
        return __METHOD__;
    }
}
