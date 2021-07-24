<?php


namespace App\Http\Controllers\EventChannel;


interface PublisherInterface
{

    /*
     *
     * Уведомления подписчика
     */
    /**
     * @param string $data Данные которыми уведомляются подписчики
     * @return mixed
     */
    public function publish($data);

}
