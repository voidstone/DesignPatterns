<?php


namespace App\DesignPatterns\Creational\FactoryMethod;


use App\DesignPatterns\Creational\AbstractFactory\interfaces\GuiFactoryInterface;
use App\DesignPatterns\Creational\FactoryMethod\interfaces\FormInterface;

abstract class AbstractForm implements FormInterface
{
    public function render()
    {
        $guiKit = $this->createGuiKit();
        $result[] = $guiKit->buildCheckbox()->draw();
        $result[] = $guiKit->buildButton()->draw();

        return $result;

    }

    abstract public function createGuiKit() : GuiFactoryInterface;

}
