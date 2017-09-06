<?php

namespace Engine;

class Db
{
    private static $instance = null;
    private function __construct(){
        $this->connection = new mysqli['localhost','root','','db'];
    }
    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __clone(){}
}