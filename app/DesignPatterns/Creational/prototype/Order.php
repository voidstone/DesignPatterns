<?php

namespace App\DesignPatterns\Creational\prototype;

class Order
{

    public $id;

    public $deliveryDt;

    private $client;

    /**
     * @param $id
     * @param $deliveryDt
     * @param $client
     */
    public function __construct($id, $deliveryDt, $client)
    {
        $this->id = $id;
        $this->deliveryDt = $deliveryDt;
        $this->client = $client;
    }

    //с ней производится правильное клонирование
    public function __clone()
    {
        $this->id = $this->id . '_copy';
        $this->deliveryDt = $this->deliveryDt->copy();

        $this->client->addOrder($this);

    }


}
