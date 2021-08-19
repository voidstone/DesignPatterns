<?php

namespace App\DesignPatterns\Behavioral\bridge\WithOutBridge\classes;

use App\DesignPatterns\Behavioral\bridge\Entities\Category;
use Illuminate\Support\Str;

class WidgetSmallCategory extends WidgetAbstact
{
    public function run(Category $category)
    {
        $viewData = $this->getRealizationLogic($category);

        $this->viewLogic($viewData);

    }

    private function getRealizationLogic(Category $category)
    {
        $id = $category->id;
        $smallCategory = Str::limit($category->title,5);
        $description = $category->description;

        return compact('id', 'smallCategory', 'description');
    }


}
