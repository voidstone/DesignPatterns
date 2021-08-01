<?php

namespace App\DesignPatterns\Creational\SimpleFactory;

use App\DesignPatterns\Creational\SimpleFactory\interfaces\MessengerSimpleFactoryInterface;
use App\Http\Controllers\Delegation\Interfaces\MessengerInterface;
use App\Http\Controllers\Delegation\Messengers\EmailMessenger;
use App\Http\Controllers\Delegation\Messengers\SmsMessenger;

class MessengerSimpleFactory implements MessengerSimpleFactoryInterface
{


    public function build($type) : MessengerInterface
    {
        switch ($type) {
            case 'email':
                $messenger = new EmailMessenger();
                $messenger->setSender('admin@example.com')
                    ->setMessage('Default Email Message');
                break;

            case 'sms':
                $messenger = new SmsMessenger();

                $messenger->setSender('89170432324')
                    ->setMessage('Default PHONE message');
                break;
            default:
                throw new \Exception('не верный тип обьекта');
        }

        return $messenger;

    }
}
