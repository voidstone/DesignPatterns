<?php

namespace App\DesignPatterns\Behavioral\bridge\WithBridge\classes;

use App\DesignPatterns\Behavioral\bridge\Entities\Product;

class ProductWidgetRealization implements WidgetRealizationInterface
{

    private $entity;

    public function __construct(Product $product)
    {
        $this->entity = $product;
    }

    public function getId()
    {
        return $this->entity->id;
    }

    public function getTitle()
    {
        return $this->entity->name;
    }

    public function getDescription()
    {
        return $this->entity->description;
    }


}
