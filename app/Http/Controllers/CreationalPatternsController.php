<?php


namespace App\Http\Controllers;


use App\DesignPatterns\Creational\AbstractFactory\GuiKitFactory;
use App\DesignPatterns\Creational\FactoryMethod\classes\BootstrapDialogForm;
use App\DesignPatterns\Creational\FactoryMethod\classes\SemanticUiDialogForm;

class CreationalPatternsController extends Controller
{

    private $guiKit;
    /**
     * CreationalPatternsController constructor.
     */
    public function __construct()
    {
        $this->guiKit = (new GuiKitFactory())->getFactory('semanticui');
    }

    public function abstractFactory()
    {
        $result[] = $this->guiKit->buildButton()->draw();
        $result[] = $this->guiKit->buildCheckbox()->draw();

        \Debugbar::info($result);

        return view('welcome');
    }


    public function factoryMethod()
    {
        $dialogForm = new SemanticUiDialogForm();
        $result = $dialogForm->render();

        \Debugbar::info($result);

        return view('welcome');


    }
}
