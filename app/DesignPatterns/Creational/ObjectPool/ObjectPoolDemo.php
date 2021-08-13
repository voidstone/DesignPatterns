<?php

namespace App\DesignPatterns\Creational\ObjectPool;



use App\DesignPatterns\Creational\ObjectPool\objects\Calculator;
use App\DesignPatterns\Creational\ObjectPool\objects\CreditCard;
use App\DesignPatterns\Creational\ObjectPool\objects\User;

class ObjectPoolDemo
{

    private $objectPool;

    /**
     * @param $objectPool
     */
    public function __construct()
    {
        $this->objectPool = ObjectPool::getInstance();

        $user = new User();
        $creditCard = new CreditCard();
        $calculator = new Calculator();

        $this->objectPool
            ->addObject($user)
            ->addObject($creditCard)
            ->addObject($calculator);
    }


    public function run()
    {
//        dd(__METHOD__, 1, $this->objectPool);

        $creditCard = $this->objectPool->getObject(CreditCard::class);
        $creditCard->cardId = '11111111-1111-1111-1111';
        $creditCard->cardHolder = 'CARD HOLDER';
        $creditCard->cardPwd = '123';

        $user =  $this->objectPool->getObject(User::class);
        $user->name = 'USER NAME';

        $user2 = $this->objectPool->getObject(User::class);


//        dd(__METHOD__,2,$this->objectPool, [$user,$user2]);

        $this->objectPool->release($creditCard);
        $this->objectPool->release($user);

//        dd(__METHOD__,3,$this->objectPool);

        $creditCard2 = $this->objectPool->getObject(CreditCard::class);
        $creditCard2->cardId = '777777-1111-1111-1111';
        $creditCard2->cardHolder = 'CARD HOLDER X';
        $creditCard2->cardPwd = '5555';


        dd(__METHOD__, $this->objectPool, [$creditCard, $user], $creditCard2);

    }


}
