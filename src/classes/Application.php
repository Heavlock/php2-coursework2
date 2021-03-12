<?php

namespace App;


use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class Application
{
    public Router $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
        $this->initialize();
    }

    public function run()
    {
        try {
            $controller = new Controller();
//            $controller->routBooks();
            $dispatchResult = $this->router->dispatch();
            return $dispatchResult->render();
        } catch (\Exception $e) {
            $this->renderException($e);
        }
    }

    public function renderException($e)
    {
        if ($e instanceof Renderable) {
            $e->render();
        } else {
            return (new View('', ['title' => $e->getMessage()]))->render();
        }
    }

    public function initialize()
    {

        $capsule = new Capsule;
        $capsule->setEventDispatcher(new Dispatcher(new Container));
        $config = Config::getInstance();
        $capsule->addConnection($config->getConfig('db.mysql'));

// Make this Capsule instance available globally via static methods... (optional)
        $capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $capsule->bootEloquent();
    }
}