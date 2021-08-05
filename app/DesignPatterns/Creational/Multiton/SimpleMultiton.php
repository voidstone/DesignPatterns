<?php

namespace App\DesignPatterns\Creational\Multiton;

use App\DesignPatterns\Creational\Multiton\MultitonInterface;

class SimpleMultiton implements MultitonInterface
{
    use MultitonTrait;

    /**
     * @var string
     */
    private $test;

    /**
     * @param $value
     * @return $this
     */
    public function setTest($value)
    {
        $this->test = $value;

        return $this;

    }


}
