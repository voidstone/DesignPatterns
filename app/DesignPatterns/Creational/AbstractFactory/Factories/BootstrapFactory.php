<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Factories;


use App\DesignPatterns\Creational\AbstractFactory\interfaces\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\interfaces\CheckboxInterface;
use App\DesignPatterns\Creational\AbstractFactory\interfaces\GuiFactoryInterface;

class BootstrapFactory implements GuiFactoryInterface
{

    public function buildButton(): ButtonInterface
    {
        return new ButtonBootstrap();
    }

    public function buildCheckbox(): CheckboxInterface
    {
        return new CheckBoxBootstrap();
    }
}
