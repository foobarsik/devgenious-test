<?php

namespace App\Services;

use Symfony\Component\EventDispatcher\EventDispatcher;

class Dispatcher
{
    private static $instance = null;

    private function __construct() {}

    public static function get()
    {
        if (self::$instance == null) {
            self::$instance = new EventDispatcher();
        }

        return self::$instance;
    }
}