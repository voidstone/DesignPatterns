<?php

namespace App\DesignPatterns\composite\Orders\Models;

use App\DesignPatterns\composite\Orders\Interfaces\CompositeInterface;
use App\DesignPatterns\composite\Orders\Traits\CompositeTrait;
use Illuminate\Database\Eloquent\Model;

class Order extends Model implements CompositeInterface
{
    use CompositeTrait;

    public $type = 'Заказ';

}
