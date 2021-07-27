<?php

namespace App\DesignPatterns\Creational\AbstractFactory;


use App\DesignPatterns\Creational\AbstractFactory\Factories\BootstrapFactory;
use App\DesignPatterns\Creational\AbstractFactory\Factories\SemanticUiFactory;
use App\DesignPatterns\Creational\AbstractFactory\interfaces\GuiFactoryInterface;

class GuiKitFactory
{
    public function getFactory($type) : GuiFactoryInterface
    {

        switch($type){
            case  'bootstrap':
                $factory = new BootstrapFactory();
                break;
            case 'semanticui':
                $factory = new SemanticUIFactory();
                break;
            default:
                throw new \Exception("Неизвестный тип фабрики [{$type}]");
        }

        return $factory;

    }
}
