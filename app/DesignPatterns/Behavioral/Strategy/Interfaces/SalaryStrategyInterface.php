<?php

namespace App\DesignPatterns\Behavioral\Strategy\Interfaces;

use App\Models\User;

interface SalaryStrategyInterface
{

    /**
     * @param array $period
     * @param User $user
     * @return int
     */
    public function calc(array $period, User $user) : int;

    /**
     * @return string
     */
    public function getName() : string;
}
