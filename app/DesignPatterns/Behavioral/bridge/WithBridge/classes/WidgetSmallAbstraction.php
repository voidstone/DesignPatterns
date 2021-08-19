<?php

namespace App\DesignPatterns\Behavioral\bridge\WithBridge\classes;

use Illuminate\Support\Str;

class WidgetSmallAbstraction extends WidgetAbstact
{
    public function run(WidgetRealizationInterface $realization)
    {

        $this->setRealization($realization);

        $viewData = $this->getViewData();

        $this->viewLogic($viewData);

    }

    private function getViewData()
    {
        $id = $this->getRealization()->getId();
        $smallTitle = $this->getSmallTitle();
        $description = $this->getRealization()->getDescription();

        return compact('id', 'smallTitle', 'description');
    }


    private function getSmallTitle()
    {

        return Str::limit($this->getRealization()->getTitle(),5);
    }
}

{

}
