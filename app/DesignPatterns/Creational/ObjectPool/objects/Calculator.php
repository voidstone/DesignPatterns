<?php

namespace App\DesignPatterns\Creational\ObjectPool\objects;

use App\DesignPatterns\Creational\ObjectPool\interfaces\ObjectPullableInterface;

class Calculator implements ObjectPullableInterface
{

    /**
     * @return mixed
     */
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}
