<?php

namespace App\DesignPatterns\composite\Orders\Interfaces;

interface CompositeInterface extends CompositeItemInterface
{
    public function setChildrenItem(CompositeItemInterface $item);
}
