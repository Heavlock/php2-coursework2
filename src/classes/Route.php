<?php


namespace App;


class Route
{
    private $method;
    private $uri;

    public function __construct($uri, $method = 'POST')
    {
        $this->method = $method;
        $this->uri = $uri;
    }

    private function prepareCallback($callback)
    {
        if ($callback instanceof Controller) {
            if ($this->getPath() === $callback->uri) {
                $func = explode('@', $callback->page)[1];
                return $callback->$func();
            }
        } else {
            return call_user_func_array($callback[0], [$callback[2][$callback[1][0]], $callback[2][$callback[1][1]]]);
        }
    }

    public function getPath()
    {
        if ($this->uri === '/') {
            return $this->uri;
        }
        return str_replace('/', '', $this->uri);
    }

    public function match($routerData, $method)
    {
        if ($method !== $this->method) {
            return false;
        }
        if (array_key_exists($this->getPath(), $routerData)) {
            return true;
        }
        foreach ($routerData as $key => $elem) {
            if (preg_match('/^' . str_replace(['*', '/'], ['\w+', '\/'], $key) .
                '$/', $this->uri)) {
                $path = $key;
                break;
            }
        }
        return $path ?? false;
    }

    public function run($callback)
    {
        return $this->prepareCallback($callback);
    }
}