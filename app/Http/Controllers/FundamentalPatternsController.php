<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Delegation\AppMessenger;
use App\Http\Controllers\EventChannel\EventChannel;
use App\Http\Controllers\EventChannel\EventChannelJob;
use App\Models\BlogPost;

class FundamentalPatternsController extends Controller
{

    public function PropertyContainer() {


        $item = new BlogPost();

        $item->setTitle('Заголовок статьи');
        $item->setCategoryId(10);

        $item->addProperty('view_count',100);

        $item->addProperty('last_update','2030-02-01');
        $item->addProperty('last_update','2030-02-02');

        $item->addProperty('read_only', true);

        $item->deleteProperty('read_only');

        dd($item);
    }

    public function delegation()
    {

        $name = 'Делегирование (Delegation';

        $item = new AppMessenger();

        $item->setSender('sender@imail.net')
            ->setRecipient('recipient@imail.net')
            ->setMessage('Hello email messenger')
            ->send();

        $item->toSms()
            ->setSender('89614324342')
            ->setRecipient('89174324344')
            ->setMessage('Hello SMS messenger')
            ->send();


//        dd($item);

        \Debugbar::info($item);

        return view('welcome');
    }

    public function EventChannel()
    {

        $item = new EventChannelJob();
        $item->run();

        \Debugbar::info($item);

        return view('welcome');

    }

    public function interface()
    {

        /*
         *
         * Шаблон проектирования интерфейс, примерно можно посмотреть в рреализации предыдущего
         * шаблона (Канал событий)
         * $item->run()
         * вызов функции run и является интерфейсом, как бы это
         * хвост который позволяет на взаимодействовать
         */

    }

}
