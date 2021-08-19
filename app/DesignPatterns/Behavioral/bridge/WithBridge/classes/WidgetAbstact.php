<?php

namespace App\DesignPatterns\Behavioral\bridge\WithBridge\classes;

/**
 *
 */
class WidgetAbstact
{

    /**
     * @var
     */
    protected $realization;

    /**
     * @param WidgetRealizationInterface $realization
     */
    public function setRealization(WidgetRealizationInterface $realization)
    {
        $this->realization = $realization;
    }


    /**
     * @return mixed
     */
    public function getRealization()
    {
        return $this->realization;
    }


    /**
     * @param $viewData
     */
    protected function viewLogic($viewData)
    {
        $method = class_basename(static::class) . '::' . __FUNCTION__;
        \Debugbar::info($method, $viewData);
    }
}
