<?php


namespace App\Http\Controllers;


use App\DesignPatterns\Creational\AbstractFactory\GuiKitFactory;

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

}
