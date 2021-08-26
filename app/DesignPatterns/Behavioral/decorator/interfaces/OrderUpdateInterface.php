<?php

namespace App\DesignPatterns\Behavioral\decorator\interfaces;

use App\DesignPatterns\Behavioral\decorator\Models\Order;

interface OrderUpdateInterface
{
    public function run(Order $order,array $orderData) : Order;

}
