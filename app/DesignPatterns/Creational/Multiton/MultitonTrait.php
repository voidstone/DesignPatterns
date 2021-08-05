<?php

namespace App\DesignPatterns\Creational\Multiton;

use App\DesignPatterns\Creational\Multiton\MultitonInterface;


trait MultitonTrait
{

    /**
     * @var array
     */
    protected static $instances = [];


    /**
     * @var
     */
    private $name;

    /**
     *
     */
    private function __construct() {

    }

    /**
     *
     */
    private function __clone() {

    }


    /**
     *
     */
    private function __wakeup() {

    }

//    /**
//     * @param string $instanceName
//     * @return static
//     */
//    public static function getInstance(string $instanceName): MultitonInterface
//    {
//        // TODO: Implement getInstance() method.
//    }

    /**
     * @param string $instanceName
     * @return static
     */
    public static function getInstance(string $instanceName): MultitonInterface {
        if(isset(static::$instances[$instanceName])) {
            return static::$instances[$instanceName];
        }
        static::$instances[$instanceName] = new static();
        static::$instances[$instanceName]->setName($instanceName);

        return static::$instances[$instanceName];

    }

    /**
     * @param $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;

    }


}
