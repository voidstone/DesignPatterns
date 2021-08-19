<?php

namespace App\DesignPatterns\Behavioral\bridge\WithOutBridge\classes;

use App\DesignPatterns\Behavioral\bridge\Entities\Category;

class WidgetMiddleCategory extends WidgetAbstact
{
    public function run(Category $category)
    {
        $viewData = $this->getRealizationLogic($category);

        $this->viewLogic($viewData);

    }

    private function getRealizationLogic(Category $category)
    {
        $id = $category->id;
        $middleCategory = $category->id . '=>' . $category->title;
        $description = $category->description;

        return compact('id', 'middleCategory', 'description');
    }


}
