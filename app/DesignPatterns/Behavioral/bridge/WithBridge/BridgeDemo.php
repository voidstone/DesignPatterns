<?php

namespace App\DesignPatterns\Behavioral\bridge\WithBridge;

use App\DesignPatterns\Behavioral\bridge\Entities\Category;
use App\DesignPatterns\Behavioral\bridge\Entities\Product;
use App\DesignPatterns\Behavioral\bridge\WithBridge\classes\CategoryRealization;
use App\DesignPatterns\Behavioral\bridge\WithBridge\classes\CategoryWidgetRealization;
use App\DesignPatterns\Behavioral\bridge\WithBridge\classes\ProductWidgetRealization;
use App\DesignPatterns\Behavioral\bridge\WithBridge\classes\WidgetBigAbstraction;
use App\DesignPatterns\Behavioral\bridge\WithBridge\classes\WidgetMiddleAbstraction;
use App\DesignPatterns\Behavioral\bridge\WithBridge\classes\WidgetSmallAbstraction;

class BridgeDemo
{

    public function run()
    {

        $productRealization = new ProductWidgetRealization(new Product());
        $categoryRealization = new CategoryWidgetRealization(new Category());


        $views = [
            new WidgetBigAbstraction(),
            new WidgetMiddleAbstraction(),
            new WidgetSmallAbstraction(),
        ];

        foreach ($views as $view) {
            $view->run($productRealization);
            $view->run($categoryRealization);
        }
    }

}
