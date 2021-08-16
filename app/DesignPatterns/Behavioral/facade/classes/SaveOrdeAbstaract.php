<?php

namespace App\DesignPatterns\Behavioral\facade\classes;

abstract class SaveOrdeAbstaract
{
    protected $order;

    protected $data;

    /**
     * @param $order
     * @param $data
     */
    public function __construct($order, $data)
    {
        $this->order = $order;
        $this->data = $data;
    }


    public function run()
    {
        \Debugbar::info(static::class);

    }


}
