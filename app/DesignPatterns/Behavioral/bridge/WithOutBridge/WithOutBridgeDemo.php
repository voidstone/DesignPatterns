<?php

namespace App\DesignPatterns\Behavioral\bridge\WithOutBridge\classes;

use App\DesignPatterns\Behavioral\bridge\Entities\Category;
use App\DesignPatterns\Behavioral\bridge\Entities\Product;

class WithOutBridgeDemo
{
    public function run()
    {
        $product = new Product();
        (new WidgetBigProduct())->run($product);
        (new WidgetMiddleProduct())->run($product);
        (new WidgetSmallProduct())->run($product);

        $category = new Category();
        (new WidgetBigCategory())->run($category);
        (new WidgetMiddleCategory())->run($category);
        (new WidgetSmallCategory())->run($category);

    }

}
