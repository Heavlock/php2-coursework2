<?php

namespace App;


use App\Exception\NotFoundException;

class Router
{
    public array $routerData = [];

    public function get($path, $page)
    {
        if (is_string($page) && is_int(strpos($page, 'Controller'))) {
            $this->routerData[$path] = new Controller($path,$page);
        } elseif ($page instanceof \Closure) {
            $uriArr = explode('/', $path);
            $pathArr = explode('/', $_SERVER['REQUEST_URI']);
            $paramKeys = [];
            foreach ($uriArr as $key => $param) {
                if (is_int(strpos($param, '*'))) {
                    array_push($paramKeys, $key);
                } elseif ($pathArr[$key] !== $param) {
                    array_unshift($paramKeys, false);
                    break;
                }
            }
            $this->routerData[$path][] = $page;
            $this->routerData[$path][] = $paramKeys;
            $this->routerData[$path][] = $pathArr;
        }
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
        $route = new Route($uri);

        if ($path = $route->match($this->routerData, 'POST')) {
            if (!is_bool($path)) {
                return new View('body', ['title' => $route->run($this->routerData[$path])]);
            } elseif ($this->routerData[$route->getPath()]) {
                return new View('body', ['title' => $route->run($this->routerData[$route->getPath()])]);
            }
        }

        return (new NotFoundException());
    }
}