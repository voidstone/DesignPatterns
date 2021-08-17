<?php

namespace App\DesignPatterns\Behavioral\bridge\WithOutBridge\classes;

use App\DesignPatterns\Behavioral\bridge\Entities\Product;

class WidgetMiddleProduct extends WidgetAbstact
{
    public function run(Product $product)
    {
        $viewData = $this->getRealizationLogic($product);

        $this->viewLogic($viewData);

    }

    private function getRealizationLogic(Product $product)
    {
        $id = $product->id;
        $middleTitle = $product->id . '::::' . $product->name;
        $description = $product->description;

        return compact('id', 'middleTitle', 'description');
    }

}
