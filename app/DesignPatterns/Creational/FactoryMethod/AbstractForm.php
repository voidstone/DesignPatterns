<?php


namespace App\DesignPatterns\Creational\FactoryMethod;


use App\DesignPatterns\Creational\FactoryMethod\interfaces\FormInterface;

class AbstractForm implements FormInterface
{
    public function render()
    {
        $guiKit = $this->createGuiKit();
        $result[] = $guiKit->buildCheckbox()->draw();
        $result[] = $guiKit->buildButton()->draw();

    }

}
