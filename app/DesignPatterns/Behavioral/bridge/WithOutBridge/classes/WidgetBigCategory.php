<?php

namespace App\DesignPatterns\Behavioral\bridge\WithOutBridge\classes;

use App\DesignPatterns\Behavioral\bridge\Entities\Category;

class WidgetBigCategory extends WidgetAbstact
{
    public function run(Category $category)
    {
        $viewData = $this->getRealizationLogic($category);

        $this->viewLogic($viewData);

    }

    private function getRealizationLogic(Category $category)
    {
        $id = $category->id;
        $fullTitle = $category->id . '::::' . $category->title;
        $description = $category->description;

        return compact('id', 'fullTitle', 'description');
    }

}
