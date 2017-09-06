<?php

namespace App\controllers;

use Engine\Controller;
use App\models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $products = new Products();
        $all = $products->findAll();
        $this->view->render('product/index',[
            'products'=>$all
        ]); 
    }
    public function insert()
    {
        $products = new Products();
        $products->insert([
           'title'=>'Apple',
           'description'=>'Iphone 6s',
           'price'=>'21500'
        ]);
    }
    public function update()
    {
        $products = new Products();
        $products->update(6,[
           'title'=>'Apple',
           'description'=>'Iphone 6s',
           'price'=>'21500'
        ]);
    }
    public function delete(){     
        $products = new Products();
        $products->delete(7);
    }
}