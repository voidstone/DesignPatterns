<?php

namespace App\DesignPatterns\Behavioral\bridge\WithOutBridge;

use App\DesignPatterns\Behavioral\bridge\Entities\Category;
use App\DesignPatterns\Behavioral\bridge\Entities\Product;
use App\DesignPatterns\Behavioral\bridge\WithOutBridge\classes\WidgetBigCategory;
use App\DesignPatterns\Behavioral\bridge\WithOutBridge\classes\WidgetBigProduct;
use App\DesignPatterns\Behavioral\bridge\WithOutBridge\classes\WidgetMiddleCategory;
use App\DesignPatterns\Behavioral\bridge\WithOutBridge\classes\WidgetMiddleProduct;
use App\DesignPatterns\Behavioral\bridge\WithOutBridge\classes\WidgetSmallCategory;
use App\DesignPatterns\Behavioral\bridge\WithOutBridge\classes\WidgetSmallProduct;

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
