<?php

namespace App\DesignPatterns\Behavioral\adapter\classes;

use App\DesignPatterns\Behavioral\adapter\interfaces\MediaLibraryThirdPartyInterface;

class MediaLibraryThirdParty implements MediaLibraryThirdPartyInterface
{
    public function addMedia($pathToFile) : string
    {
        \Debugbar::info(__METHOD__);

        return md5(__METHOD__ . $pathToFile);

    }

    public function getMedia($fileCode) : string
    {
        \Debugbar::info(__METHOD__);

        return '';

    }

    public function newMethod()
    {
        \Debugbar::info(__METHOD__);
    }

}
