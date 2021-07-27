<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Classes\SemanticUi;


use App\DesignPatterns\Creational\AbstractFactory\interfaces\CheckBoxInterface;

class CheckboxSemanticUi implements CheckBoxInterface
{
    public function draw()
    {
        return __METHOD__;
    }
}
