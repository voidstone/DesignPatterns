<?php


namespace App\Http\Controllers\EventChannel;


class EventChannel implements EventChannelInterface
{
    private $topics = [];


    public function publish($topic, $data)
    {
        if( empty($this->topics[$topic])) {
            return;
        }

        foreach ($this->topics[$topic] as $subscriber) {
            /*
             * @var SubscriberInterface $subscriber
             */
            $subscriber->notify($data);

        }
    }

    public function subscribe($topic, SubscriberInterface $subscriber)
    {
        $this->topics[$topic][] = $subscriber;

        $msg = "{$subscriber->getName()} подписан на [{$topic}]";
        \Debugbar::debug($msg);
    }
}
