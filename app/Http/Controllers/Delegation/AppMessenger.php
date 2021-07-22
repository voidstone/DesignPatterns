<?php


namespace App\Http\Controllers\Delegation;


use App\Http\Controllers\Delegation\Interfaces\MessengerInterface;
use App\Http\Controllers\Delegation\Messengers\EmailMessenger;
use App\Http\Controllers\Delegation\Messengers\SmsMessenger;

class AppMessenger implements MessengerInterface
{

    private $messenger;

    /**
     * AppMessenger constructor.
     *
     */
    public function __construct()
    {
        $this->toEmail();
    }

    public function toEmail()
    {
        $this->messenger = new EmailMessenger();

        return $this;
    }

    public function toSms()
    {
        $this->messenger = new SmsMessenger();

        return $this;

    }


    public function setSender($value): MessengerInterface
    {
        $this->messenger->setSender($value);

        return $this->messenger;
    }

    public function setRecipient($value): MessengerInterface
    {
        $this->messenger->setRecipient($value);

        return $this->messenger;
    }

    public function setMessage($value): MessengerInterface
    {
        $this->messenger->setMessage($value);

        return $this->messenger;
    }

    public function send(): bool
    {
        return $this->messenger->send();
    }


}
