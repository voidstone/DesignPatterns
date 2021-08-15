<?php

namespace App\DesignPatterns\Behavioral\adapter\classes;

use App\DesignPatterns\Behavioral\adapter\interfaces\MediaLibraryInterface;

class MediaLibraryAdapter implements MediaLibraryInterface
{

    private $adapterObj;


    public function __construct()
    {
        $this->adapterObj = new MediaLibraryThirdParty();
    }


    /**
     * @param $pathToFile
     * @return string
     */
    public function upload($pathToFile): string
    {
        return $this->adapterObj->addMedia($pathToFile);
    }

    /**
     * @param $fileCode
     * @return string
     */
    public function get($fileCode): string
    {
        return $this->adapterObj->getMedia($fileCode);
    }

    public function __call($name, $arguments)
    {
        if( method_exists($this->adapterObj, $name)) {
            return call_user_func_array([$this->adapterObj, $name], $arguments);
        } else {
            throw new \Exception("Метод {$name} не найден");
        }

    }
}
