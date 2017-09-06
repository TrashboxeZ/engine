<?php

$loader = require 'vendor/autoload.php';
<<<<<<< HEAD
=======

>>>>>>> ad5b6de5d3f92dddb59cb2e574612b9445d56585
$loader->addPsr4('Engine\\', __DIR__ . '/vendor/engine');
$loader->addPsr4('App\\', __DIR__ . '/app');

use Engine\Route;

define('APP', __DIR__ . '/app/');

<<<<<<< HEAD
Route::run();
=======
Route::run();
>>>>>>> ad5b6de5d3f92dddb59cb2e574612b9445d56585
