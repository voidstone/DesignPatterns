<?php


namespace App\DesignPatterns\Creational\FactoryMethod\classes;


use App\DesignPatterns\Creational\AbstractFactory\Factories\BootstrapFactory;
use App\DesignPatterns\Creational\AbstractFactory\interfaces\GuiFactoryInterface;
use App\DesignPatterns\Creational\FactoryMethod\AbstractForm;

class BootstrapDialogForm extends AbstractForm
{

    public function createGuiKit(): GuiFactoryInterface
    {
        return new BootstrapFactory();
    }
}
