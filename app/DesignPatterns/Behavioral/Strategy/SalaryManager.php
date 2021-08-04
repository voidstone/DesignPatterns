<?php

namespace App\DesignPatterns\Behavioral\Strategy;

use App\DesignPatterns\Behavioral\Strategy\Interfaces\SalaryStrategyInterface;
use App\Models\User;
use Illuminate\Support\Collection;

class SalaryManager
{

    private $salaryStrategy;

    private $period;

    private $users;

    /**
     * @param  array $period
     * @param Collection $users
     */
    public function __construct(array $period,Collection $users)
    {
        $this->period = $period;
        $this->users = $users;
    }


    public function handle()
    {
        $usersSalary = $this->calculatedSalary();

        $this->saveSalary($usersSalary);

        return $usersSalary;

    }

    private function calculatedSalary() :Collection
    {
        $usersSalary = $this->users->map(
            function (User $user) {
                $strategy = $this->getStrategyByUser($user);
                $salary = $this
                    ->setCalculatedSalary($strategy)
                    ->calculatedUserSalary($this->period, $user);

                $strategyName = $strategy->getName();
                $userId = $user->id;

                $newItem = compact('userId', 'salary', 'strategyName');

                return $newItem;
            }
        );

        return $usersSalary;
    }

    private function saveSalary($usersSalary)
    {
    }

    private function getStrategyByUser(User $user) : SalaryStrategyInterface
    {
        $strategyName = $user->departmentName() . 'Strategies';
        $strategyClass = __NAMESPACE__ . '\\Strategies\\'
            .ucwords($strategyName);

        throw_if(!class_exists($strategyClass), \Exception::class,
        "Класс не существует [{$strategyClass}]");

        return new $strategyClass;

    }

    private function setCalculatedSalary(SalaryStrategyInterface $strategy)
    {
        $this->salaryStrategy = $strategy;

        return $this;
    }

    private function calculatedUserSalary(array $period, User $user)
    {
        return $this->salaryStrategy->calc($period, $user);
    }


}
