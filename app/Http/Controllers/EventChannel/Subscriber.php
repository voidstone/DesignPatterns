<?php


namespace App\Http\Controllers\EventChannel;


class Subscriber implements SubscriberInterface
{

    private $name;

    /**
     * Subscriber constructor.
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function notify($data)
    {
        $msg = "{$this->getName()} оповещен(а) данными [{$data}]";

        \Debugbar::info($msg);
    }

    public function getName()
    {
        return $this->name;
    }
}
