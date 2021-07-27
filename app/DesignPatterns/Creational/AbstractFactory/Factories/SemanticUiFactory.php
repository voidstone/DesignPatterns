<?php


namespace App\DesignPatterns\Creational\AbstractFactory\Factories;

use App\DesignPatterns\Creational\AbstractFactory\Classes\SemanticUi\ButtonSemanticUi;
use App\DesignPatterns\Creational\AbstractFactory\Classes\SemanticUi\CheckboxSemanticUi;
use App\DesignPatterns\Creational\AbstractFactory\interfaces\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\interfaces\CheckboxInterface;
use App\DesignPatterns\Creational\AbstractFactory\interfaces\GuiFactoryInterface;

class SemanticUiFactory implements GuiFactoryInterface
{

    public function buildButton(): ButtonInterface
    {
        return new ButtonSemanticUi();
    }

    public function buildCheckbox(): CheckboxInterface
    {
        return new CheckboxSemanticUi();
    }
}
