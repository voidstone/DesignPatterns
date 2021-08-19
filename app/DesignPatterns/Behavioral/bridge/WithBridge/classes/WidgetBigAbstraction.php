<?php

namespace App\DesignPatterns\Behavioral\bridge\WithBridge\classes;

class WidgetBigAbstraction extends WidgetAbstact
{
    public function run(WidgetRealizationInterface $realization)
    {

        $this->setRealization($realization);

        $viewData = $this->getViewData();

        $this->viewLogic($viewData);

    }

    private function getRealizationLogic(Category $category)
    {
        $id = $category->id;
        $fullTitle = $category->id . '::::' . $category->title;
        $description = $category->description;

        return compact('id', 'fullTitle', 'description');
    }

    private function getViewData()
    {
        $id = $this->getRealization()->getId();
        $fullTitle = $this->getFullTitle();
        $description = $this->getRealization()->getDescription();

        return compact('id', 'fullTitle', 'description');
    }

    private function getFullTitle()
    {

        return $this->getRealization()->getId()
            . ':::::'
            . $this->getRealization()->getTitle();
    }

}
