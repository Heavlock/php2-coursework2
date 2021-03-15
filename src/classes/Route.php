<?php


namespace App;


class Route
{
    private $method;
    private $path;
    private $callback;

    public function __construct($callback, $path, $method = 'POST')
    {
        $this->path = $path;
        $this->method = $method;
        $this->callback = $callback;
    }

    private function prepareCallback($uri)
    {
        if (is_string($this->callback) && strpos($this->callback, 'Controller')) {
            $controller = new Controller();
            $func = explode('@', $this->callback)[1];
            return $controller->$func();
        } else {
            $arguments = explode('/', $uri);
            return call_user_func_array($this->callback, [$arguments[2], $arguments[4]]);
        }
    }

    public function getPath()
    {
        return $this->path;
    }

    public function match($uri, $key, $method)
    {
        if ($method !== $this->method) {
            return false;
        }

        if (preg_match('/^' . str_replace(['*', '/'], ['\w+', '\/'], $key) .
            '$/', $uri)) {
            return true;
        }
    }

    public function run($uri = '')
    {
        return $this->prepareCallback($uri);
    }
}