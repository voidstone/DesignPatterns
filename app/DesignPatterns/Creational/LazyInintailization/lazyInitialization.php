<?php

namespace App\DesignPatterns\Creational\LazyInintailization;

use App\Models\User;

class lazyInitialization
{

    private $user = null;


    public function __construct()
    {
        //выпиливаем из конструктора потому, что обращений может быть куча
//        $this->user = User::first();
    }


    public function getUser()
    {

//        return $this->user ?? ($this->user = User::first());

        if(is_null($this->user)) {
            $this->user = User::first();
            \Debugbar::info($this->user);
        }

        return $this->user;
    }

}
