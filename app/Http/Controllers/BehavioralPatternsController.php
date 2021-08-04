<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Behavioral\Strategy\SalaryManager;
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

}
