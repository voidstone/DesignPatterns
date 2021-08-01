<?php


namespace App\Http\Controllers;


use App\DesignPatterns\Creational\AbstractFactory\GuiKitFactory;
use App\DesignPatterns\Creational\FactoryMethod\classes\BootstrapDialogForm;
use App\DesignPatterns\Creational\FactoryMethod\classes\SemanticUiDialogForm;
use App\DesignPatterns\Creational\SimpleFactory\MessengerSimpleFactory;
use App\DesignPatterns\Creational\StaticFactory\StaticFactory;
use DebugBar\DebugBar;

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

    public function staticFactory()
    {

        $appMailMessenger = StaticFactory::build('email');
        $appPhoneMessenger = StaticFactory::build('sms');

        \Debugbar::info($appMailMessenger,$appPhoneMessenger);

        return view('welcome');
    }

    public function simpleFactory()
    {

        $factory = new MessengerSimpleFactory();

        $appMailMessenger = $factory->build('email');
        $appPhoneMessenger = $factory->build('sms');

        \Debugbar::info($appMailMessenger,$appPhoneMessenger);

        return view('welcome');
    }
}
