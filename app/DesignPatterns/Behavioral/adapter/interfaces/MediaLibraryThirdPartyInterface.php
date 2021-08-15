<?php

namespace App\DesignPatterns\Behavioral\adapter\interfaces;

interface MediaLibraryThirdPartyInterface
{
    public function addMedia($pathToFile) : string;

    public function getMedia($fileCode) : string;

}
