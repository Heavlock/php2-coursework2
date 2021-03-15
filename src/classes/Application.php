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
            $controller = (new Controller())->routeBooks();
            $this->router->dispatch()->render();
            $controller->render();
        } catch (\Exception $e) {
            $this->renderException($e);
        }
    }

    public function renderException($e)
    {
        if ($e instanceof Renderable) {
            $e->render();
        } else {
            (new View('', ['title' => $e->getMessage()]))->render();
        }
    }

    public function initialize()
    {
        $capsule = new Capsule();
        $capsule->setEventDispatcher(new Dispatcher(new Container()));
        $config = Config::getInstance();
        $capsule->addConnection($config->getConfig('db.mysql'));
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}
