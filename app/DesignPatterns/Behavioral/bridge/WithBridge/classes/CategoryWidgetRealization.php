<?php

namespace App\DesignPatterns\Behavioral\bridge\WithBridge\classes;

use App\DesignPatterns\Behavioral\bridge\Entities\Category;

class CategoryWidgetRealization implements WidgetRealizationInterface
{

    private $entity;

    public function __construct(Category $entity)
    {
        $this->entity = $entity;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->entity->id;
    }

    public function getTitle()
    {
        return $this->entity->title;
    }

    public function getDescription()
    {
        return $this->entity->description;
    }
}
