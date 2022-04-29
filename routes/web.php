<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', function()
{
    return View::make('_home');
});

Route::get('/vision-mission', function () {
    return View::make('_vision-mission');
});

Route::get('/organization-chart', function () {
    return View::make('_organization-chart');
});

Route::get('/news', function () {
    return View::make('_news');
});

Route::get('/facilities', function () {
    return View::make('_facilities');
});


