<?php


namespace App\Http\Controllers\Delegation\Messengers;


class SmsMessenger extends AbstractMessenger
{
    public function send() : bool
    {
        \Debugbar::info('Sent by '. __METHOD__);

        return parent::send();

    }

}
