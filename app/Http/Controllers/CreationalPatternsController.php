<?php


namespace App\Http\Controllers;


use App\DesignPatterns\Creational\AbstractFactory\GuiKitFactory;
use App\DesignPatterns\Creational\FactoryMethod\classes\BootstrapDialogForm;
use App\DesignPatterns\Creational\FactoryMethod\classes\SemanticUiDialogForm;
use App\DesignPatterns\Creational\SimpleFactory\MessengerSimpleFactory;
use App\DesignPatterns\Creational\Singleton\AdvancedSingleton;
use App\DesignPatterns\Creational\Singleton\AnotherConnection;
use App\DesignPatterns\Creational\Singleton\LaravelSingleton;
use App\DesignPatterns\Creational\Singleton\SimpleSingleton;
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

    public function Singleton()
    {
        $result['simpleSingleton1'] = SimpleSingleton::getInstance();
        $result['simpleSingleton1']->setTest('simpleSingleton1');
        $result['simpleSingleton2'] = SimpleSingleton::getInstance();

        $result[] = $result['simpleSingleton1'] === $result['simpleSingleton2'];



        $result['AdvancedSingleton1'] = AdvancedSingleton::getInstance();
        $result['AdvancedSingleton1']->setTest('AdvancedSingleton1');
        $result['AdvancedSingleton2'] = AdvancedSingleton::getInstance();

        $result[] = $result['AdvancedSingleton1'] === $result['AdvancedSingleton2'];


        //laravel-way
        $result['laravelSingleton1'] = app(AnotherConnection::class);
        $result['laravelSingleton1']->setTest('laravelSingleton1');
        $result['laravelSingleton2'] = app(AnotherConnection::class);
        $result['laravelSingleton3'] = new laravelSingleton();

        $result[] = $result['laravelSingleton1'] === $result['laravelSingleton2'];
        $result[] = $result['laravelSingleton1'] === $result['laravelSingleton3'];

        \Debugbar::info($result);
        return view('welcome');
    }
}
