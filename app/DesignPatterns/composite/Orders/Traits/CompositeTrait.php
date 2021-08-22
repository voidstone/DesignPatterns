<?php

namespace App\DesignPatterns\composite\Orders\Traits;

use App\DesignPatterns\composite\Orders\Interfaces\CompositeItemInterface;

trait CompositeTrait
{

    private $compositeItems = [];

    public function setChildrenItem(CompositeItemInterface $item)
    {
        $this->compositeItems[] = $item;
    }

    public function calcPrice(): float
    {
        if($this->price) return $this->price;


        $this->price = 0;
        /** @var CompositeItemInterface $compositeItem */

        foreach($this->compositeItems as $compositeItem) {
            $this->price += $compositeItem->calcPrice();
        }


        \Debugbar::info("[$this->id] {$this->type} ::  {$this->name} = {$this->price}");

        return $this->price;

    }

}
