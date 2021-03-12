<?php

namespace App;


class Config
{
    protected static $_instance;
    public array $config;

    private function __construct()
    {
        require_once APP_DIR . 'configs/' . 'db.php';
        $this->config = CONFIG;
    }

    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    public function getConfig($key, $default = null): array
    {
        $config = $this->config;
        return array_get($config, $key, $default);
    }
}
