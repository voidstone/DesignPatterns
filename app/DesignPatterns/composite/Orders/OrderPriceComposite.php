<?php

namespace App\DesignPatterns\composite\Orders;

use App\DesignPatterns\composite\Orders\Classes\ObjectFactory;

class OrderPriceComposite
{

    /**
     * @var ObjectFactory
     */

    private $factory;

    private $ingredientsCnt = 10;
    private $ingredients = [];

    private $productsCnt = 5;
    private $products = [];

    private $ordersCnt = 2;
    private $orders = [];

    public function __construct()
    {
        $this->factory = new ObjectFactory();
    }

    public function run()
    {
        $this->initObjects();

        $this->calcPrices();
    }

    private function initObjects()
    {
        $this->ingredients = $this->factory->createIngredients($this->ingredientsCnt);
        $this->products = $this->factory->createProducts($this->productsCnt, $this->ingredients);
        $this->orders = $this->factory->createOrders($this->ordersCnt, $this->products);
    }

    private function calcPrices()
    {
        $result = [];

        /** @var OrderComposite $order */
        foreach ($this->orders as $order) {
            $result[] = [
                'order_id' => $order->id,
                'order_price' => $order->calcPrice(),
            ];
        }

        \Debugbar::info($result, $this->orders);
    }


}
