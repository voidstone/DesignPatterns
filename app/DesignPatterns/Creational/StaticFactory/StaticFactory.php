<?php

namespace App\DesignPatterns\Creational\StaticFactory;

use Exception;
use App\DesignPatterns\Creational\StaticFactory\interfaces\MessengerStaticFactoryInterface;
use App\Http\Controllers\Delegation\AppMessenger;
use http\Exception\UnexpectedValueException;

class StaticFactory implements MessengerStaticFactoryInterface
{

    public static function build(string $type = 'email')
    {
        $messenger = new AppMessenger();

        switch ($type) {
            case 'email':
                $messenger->toEmail();
                $sender = 'admin@example.com';
                break;

            case 'sms':
                $messenger->toSms();
                $sender = '89171340506';
                break;

            default:
                throw new UnexpectedValueException("неизвестный тип [{$type}]");
        }

        $messenger->setSender($sender)
            ->setMessage('default message');

        return $messenger;

    }

}
