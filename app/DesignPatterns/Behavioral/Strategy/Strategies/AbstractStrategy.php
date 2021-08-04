<?php

namespace App\DesignPatterns\Behavioral\Strategy\Strategies;

use App\DesignPatterns\Behavioral\Strategy\Interfaces\SalaryStrategyInterface;
use App\Models\User;

abstract class AbstractStrategy implements SalaryStrategyInterface
{
    /**
     * @param array $period
     * @param User $user
     * @return int
     */
    public function calc(array $period, User $user): int
    {
        return random_int(500,2000);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return class_basename(static::class);
    }


}
