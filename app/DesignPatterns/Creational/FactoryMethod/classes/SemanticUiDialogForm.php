<?php


namespace App\DesignPatterns\Creational\FactoryMethod\classes;


use App\DesignPatterns\Creational\AbstractFactory\Factories\SemanticUiFactory;
use App\DesignPatterns\Creational\AbstractFactory\interfaces\GuiFactoryInterface;
use App\DesignPatterns\Creational\FactoryMethod\AbstractForm;

class SemanticUiDialogForm extends AbstractForm
{

    public function createGuiKit(): GuiFactoryInterface
    {
        return new SemanticUiFactory();
    }
}
