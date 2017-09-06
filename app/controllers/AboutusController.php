<?php

namespace App\controllers;

use App\models\Users;
use Engine\Controller;

class AboutusController extends Controller
{
    public function index()
    {
        $user = new Users();
        $info = $user->getUser();  
        var_dump($info);
        $this->view->render('aboutus/index',[
            
            "user" => $info
        ]);
        
    }
}