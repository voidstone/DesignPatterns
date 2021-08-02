<?php

namespace App\Providers;

use App\DesignPatterns\Creational\Singleton\AnotherConnection;
use App\DesignPatterns\Creational\Singleton\LaravelSingleton;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    //при создании подставить экземпляр класса
    public $singletons = [
        AnotherConnection::class => LaravelSingleton::class,
    ];
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
