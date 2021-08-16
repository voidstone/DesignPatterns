<?php

namespace App\DesignPatterns\Behavioral\facade;

use App\DesignPatterns\Behavioral\facade\classes\Order;
use App\DesignPatterns\Behavioral\facade\classes\OrderSaveDates;
use App\DesignPatterns\Behavioral\facade\classes\OrderSaveProducts;
use App\DesignPatterns\Behavioral\facade\classes\OrderSaveUsers;

class OrderSaveFacade
{


    public function save(Order $order, array $data)
    {
        //вся логика тут из множества классов
        (new OrderSaveProducts($order,$data))->run();

        (new OrderSaveDates($order,$data))->run();

        (new OrderSaveUsers($order,$data))->run();

        return true;
    }

}
