<?php


namespace App\Http\Controllers\EventChannel;


interface EventChannelInterface
{
    /*
     *
     * Издатель уведомляет канал о том что надо
     * всех кто подписан на тему $topic уведомлять данными $data
     */
    public function publish($topic, $data);

    /*
     *
     * Подписчик $subscriber подписывается на события ( данные, инфу и тд) $topic
     */

    public function subscribe($topic, SubscriberInterface $subscriber);

}
