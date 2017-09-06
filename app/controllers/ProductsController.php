<?php

namespace App\controllers;

use Engine\Controller;
use App\models\Products;

class ProductsController extends Controller
{
    public function index()
    {
    	$model = new Products();
    	$products = $model->findAll();
        
        $this->view->render('products/index', [
        	'products' => $products
        ]);
    }
}