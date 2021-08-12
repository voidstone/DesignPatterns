<?php

namespace App\DesignPatterns\Creational\prototype;

use Carbon\Carbon;

class PrototypeDemo
{

    public function run()
    {

        $client = new Client(2, 'Клиент');

        $deliveryDt = Carbon::parse('31.12.2046 15:00:02');
        $order = new Order(11, $deliveryDt, $client);


        $client->addOrder($order);

        $cloneOrder = clone $order;
        $cloneOrder->deliveryDt->addDay();

        return compact('client', 'order', 'cloneOrder');

    }

}
