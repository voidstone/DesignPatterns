<?php

namespace App\DesignPatterns\Behavioral\decorator\Classes\inheritance;

use App\DesignPatterns\Behavioral\decorator\interfaces\OrderUpdateInterface;
use App\DesignPatterns\Behavioral\decorator\Models\Order;

class OrderUpdate implements OrderUpdateInterface
{


    /**
     * @param Order $order
     * @param array $orderData
     * @return Order
     */
    public function run(Order $order, array $orderData): Order
    {
        \Debugbar::info('Base update');

        return $order;
    }
}
