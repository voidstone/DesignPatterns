<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Behavioral\adapter\classes\MediaLibraryAdapter;
use App\DesignPatterns\Behavioral\adapter\interfaces\MediaLibraryInterface;
use App\DesignPatterns\Behavioral\adapter\MediaLibrarySelfWritten;
use App\DesignPatterns\Behavioral\bridge\WithBridge\BridgeDemo;
use App\DesignPatterns\Behavioral\bridge\WithOutBridge\WithOutBridgeDemo;
use App\DesignPatterns\Behavioral\facade\classes\Order;
use App\DesignPatterns\Behavioral\facade\OrderSaveFacade;
use App\DesignPatterns\Behavioral\Strategy\SalaryManager;
use App\DesignPatterns\composite\Orders\OrderPriceComposite;
use App\Models\User;
use Carbon\Carbon;

class BehavioralPatternsController extends Controller
{
    public function Strategy()
    {
        $period = [
            Carbon::now()->subMonth()->startofMonth(),
            Carbon::now()->subMonth()->endOfMonth(),

        ];

        $user = User::all();

        $result = (new SalaryManager($period, $user))->handle();

        \Debugbar::info($result);


        return view('welcome');

    }

    public function adapter()
    {

//        $mediaLibrary = app( MediaLibrarySelfWritten::class);

//        $mediaLibrary = app(MediaLibraryAdapter::class);


        $mediaLibrary = app(MediaLibraryInterface::class);

        $result[] = $mediaLibrary->upload('ImageFile');

        $result[] = $mediaLibrary->get('ImageFile');


        return view('welcome');


    }

    public function facade()
    {
        $order = new Order();

//        $data = request()->all(); //данные из реквеста
        $data = [];

        (new OrderSaveFacade())->save($order, $data);

        return view('welcome');
    }

    public function bridge()
    {

//        (new WithOutBridgeDemo())->run();
        (new BridgeDemo())->run();

        return view('welcome');
    }

    public function composite()
    {
        (new OrderPriceComposite())->run();

        return view('welcome');

    }

}
