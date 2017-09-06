<?php

namespace App\controllers;

use App\models\News;
use Engine\Controller;
<<<<<<< HEAD
=======
use Carbon\Carbon;
>>>>>>> ad5b6de5d3f92dddb59cb2e574612b9445d56585

class IndexController extends Controller
{
    public function index()
    {
        $news = new News();
        $allNews = $news->getNews();

        $this->view->render('default/index', [
            'news' => $allNews,
<<<<<<< HEAD
            'hello' => 'World'
=======
            'hello' => Carbon::now()
>>>>>>> ad5b6de5d3f92dddb59cb2e574612b9445d56585
        ]);
    }
}