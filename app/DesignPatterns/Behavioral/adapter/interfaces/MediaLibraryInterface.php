<?php

namespace App\DesignPatterns\Behavioral\adapter\interfaces;

interface MediaLibraryInterface
{

    public function upload($pathToFile) : string;


    public function get($fileCode) : string;

}
