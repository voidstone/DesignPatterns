<?php

namespace App\DesignPatterns\Behavioral\adapter\classes;

use App\DesignPatterns\Behavioral\adapter\interfaces\MediaLibraryInterface;

class MediaLibrarySelfWritten implements MediaLibraryInterface
{

    public function upload($pathToFile) : string
    {
        \Debugbar::info(__METHOD__);

        return md5(__METHOD__ . $pathToFile);

    }

    public function get($fileCode) : string
    {
        \Debugbar::info(__METHOD__);

        return '';

    }

}
