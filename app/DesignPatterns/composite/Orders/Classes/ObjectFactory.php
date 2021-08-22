<?php

namespace App\DesignPatterns\composite\Orders\Classes;

use App\DesignPatterns\composite\Orders\Models\Ingredient;
use App\DesignPatterns\composite\Orders\Models\Order;
use App\DesignPatterns\composite\Orders\Models\Product;
use Illuminate\Support\Arr;
use Faker\Generator as Faker;

class ObjectFactory
{

    /**
     * @var Faker
     *
     */

    private $faker;

    public function __construct()
    {
        $this->faker = app(Faker::class);
    }


    public function createIngredients(int $cnt) :array
    {
        $result = [];

        for ($i = 0; $i < $cnt;$i++) {
            $result[] = $this->createIngredient($i);
        }

        return $result;
    }

    private function createIngredient(int $id)
    {
        $obj = new Ingredient();
        $obj->id = $id;
        $obj->name = $this->faker->colorName;

        return $obj;
    }

    public function createProducts(int $cnt, $ingredients) : array
    {
        $result = [];

        for($i = 0; $i < $cnt; $i++) {
            $productIngredients = Arr::random($ingredients, rand(2,3));

            $result[] = $this->createProduct($i, $productIngredients);
        }

        return $result;
    }


    private function createProduct(int $id, $ingredients)
    {
        $obj = new Product();
        $obj->id = $id;
        $obj->name = $this->faker->company;

        foreach($ingredients as $ingredient) {
            $obj->setChildrenItem($ingredient);
        }

        return $obj;
    }

    public function createOrders(int $cnt, $products) :array
    {
        $result = [];
        for( $i = 0; $i < $cnt;$i++) {
            $orderProducts = Arr::random($products, rand(1,3));

            $result[] = $this->createOrder($i, $orderProducts);
        }

        return $result;
    }

    private function createOrder(int $id, $children)
    {
        $obj = new Order();
        $obj->id = $id;
        $obj->name = "order{$id}";

        foreach ($children as $child) {
            $obj->setChildrenItem($child);
        }

        return $obj;
    }


}
