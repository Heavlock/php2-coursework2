<?php

namespace App;

use App\Exception\NotFoundException;

class Router
{
    public array $routerData = [];

    public function get($path, $page)
    {
        $this->routerData[$path] = new Route($page, $path);
    }

    public function dispatch()
    {
        $uri = $_SERVER['REQUEST_URI'];
        if (is_int(strpos($uri, '?'))) {
            $uri = explode('?', $_SERVER['REQUEST_URI'])[0];
        }
        if (is_int(strpos($uri, 'index.php')) || $uri === '/') {
            $uri = '/';
        } elseif (substr('uri', -1) === '/') {
            $uri = substr($_SERVER['REQUEST_URI'], 0, -1);
        }
        if (array_key_exists($uri, $this->routerData)) {
         return   $this->routerData[$uri]->run();
//            return new View('body', ['title' => $this->routerData[$uri]->run()]);

        } else {
            foreach ($this->routerData as $key => $route) {
                if ($route->match($uri, $key, $method = 'POST')) {
                    return new View('body', ['title' => $this->routerData[$key]->run($uri)]);
                }

            }
        }

        return (new NotFoundException());
    }
}