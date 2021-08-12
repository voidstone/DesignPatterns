<?php

namespace App\DesignPatterns\Creational\prototype;

class Client
{

    /**
     * @var
     */
    public $id;


    /**
     * @var
     */
    public $name;

    /**
     * @var
     */
    private $orders;

    /**
     * @param $id
     * @param $name
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }


    public function addOrder(Order $order)
    {
        $this->orders[$order->id] = $order;
    }


}
