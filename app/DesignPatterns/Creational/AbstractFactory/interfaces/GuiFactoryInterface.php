<?php


namespace App\DesignPatterns\Creational\AbstractFactory\interfaces;


interface GuiFactoryInterface
{

    public function buildButton() : ButtonInterface;

    public function buildCheckbox() : CheckboxInterface;

}
