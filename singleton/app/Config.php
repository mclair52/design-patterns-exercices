<?php

# TODO: Créer une classe Config en Singleton

namespace App;
final class Config
{
    private static $instance = null;
    private $config = null;

    private function __construct()
    {
        $this->config = require('../config/config.php');
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    public function get($key)
    {
        return $this->config[$key];
    }
}

namespace App;