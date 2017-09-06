<?php

namespace Engine;

use Engine\Db;

abstract class Db
{
    /**
     * @return Singleton
     */

    final public static function getInstance()
    {
        static $instance = null;
        
        if (null === $instance)
        {
            $instance = new static();
        }

        return $instance;
    }

    final protected function __clone() {}
    protected function __construct() {}
}