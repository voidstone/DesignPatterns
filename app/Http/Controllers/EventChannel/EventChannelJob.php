<?php


namespace App\Http\Controllers\EventChannel;


class EventChannelJob
{
    public function run()
    {

        $newsChannel = new EventChannel();

        $higngardenGroup = new Publisher('highgarden-news', $newsChannel);
        $winteFellNews = new Publisher('winterfell-news', $newsChannel);
        $winterFellDaily = new Publisher('winterfell-news', $newsChannel);

        $sansa = new Subscriber('Sansa Start');
        $arya = new Subscriber('Arya Start');
        $cersei = new Subscriber('Cersei Lannister');
        $snow = new Subscriber('John Snow');


        $newsChannel->subscribe('highgarden-news', $cersei);
        $newsChannel->subscribe('winterfell-news', $sansa);

        $newsChannel->subscribe('highgarden-news', $arya);
        $newsChannel->subscribe('winterfell-news', $arya);

        $newsChannel->subscribe('winterfell-news', $snow);

        $higngardenGroup->publish('New highgarden post');
        $winteFellNews->publish('New winteFell post');
        $winterFellDaily->publish('New alternative winterfell post post');



    }

}
