<?php


namespace App\DesignPatterns\Creational\AbstractFactory\interfaces;


interface GuiFactoryInterface
{

    /**
     * @return ButtonInterface
     */
    public function buildButton() : ButtonInterface;

    /**
     * @return CheckboxInterface
     */
    public function buildCheckbox() : CheckboxInterface;

}
