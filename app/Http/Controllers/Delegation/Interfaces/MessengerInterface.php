<?php


namespace App\Http\Controllers\Delegation\Interfaces;


use phpDocumentor\Reflection\Types\Boolean;

interface MessengerInterface {

    /**
     * @param $value
     * @return MessengerInterface
     */
    public function setSender($value) : MessengerInterface;

    /**
     * @param $value
     * @return MessengerInterface
     */
    public function setRecipient($value) : MessengerInterface;

    /**
     * @param $value
     * @return MessengerInterface
     */
    public function setMessage($value) : MessengerInterface;


    public function send() : bool;

}
