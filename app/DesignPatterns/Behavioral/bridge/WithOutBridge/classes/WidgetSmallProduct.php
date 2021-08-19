<?php

namespace App\DesignPatterns\Behavioral\bridge\WithOutBridge\classes;

use App\DesignPatterns\Behavioral\bridge\Entities\Product;
use Illuminate\Support\Str;

class WidgetSmallProduct extends WidgetAbstact
{
    public function run(Product $product)
    {
        $viewData = $this->getRealizationLogic($product);

        $this->viewLogic($viewData);

    }

    private function getRealizationLogic(Product $product)
    {
        $id = $product->id;
        $smallTitle = Str::limit($product->name,7);
        $description = $product->description;

        return compact('id', 'smallTitle', 'description');
    }

}
