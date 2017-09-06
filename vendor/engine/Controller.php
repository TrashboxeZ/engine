<?php

namespace Engine;

use Engine\View;
use Engine\Request;

class Controller
{
    public $view;
    protected $request;
    
    public function __construct()
    {
        $this->view = new View();
        $this->request = new Request;
    }
    
}