<?php


namespace App\Http\Controllers\EventChannel;


interface SubscriberInterface
{

    public function notify($data);

    public function getName();
}
