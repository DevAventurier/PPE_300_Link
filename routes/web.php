<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

# j'ai remplacer la vue par defaut de notre projet par la page d'acceuil de notre projet
#evidement j'ai importe le index de notre projet dans Ressource>views

Route::get('/', function () {
    return view('index');
});

# 
