<?php

namespace App\DesignPatterns\Behavioral\bridge\WithOutBridge\classes;

class WidgetAbstact
{
    protected function viewLogic($viewData)
    {
        $method = class_basename(static::class) . '::' . __FUNCTION__;
        \Debugbar::info($method, $viewData);
    }
}
