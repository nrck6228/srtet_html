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

Route::get('/executive', function () {
    return View::make('_executive');
});

Route::get('/ticket-information', function () {
    return View::make('_ticket-information');
});

Route::get('/fare-information', function () {
    return View::make('_fare-information');
});

Route::get('/fare-calculated', function () {
    return View::make('_fare-calculated');
});

Route::get('/route-information', function () {
    return View::make('_route-information');
});

Route::get('/station-information', function () {
    return View::make('_station-information');
});

Route::get('/bangsur-station', function () {
    return View::make('_bangsur-station');
});

Route::get('/chatuchak-station', function () {
    return View::make('_chatuchak-station');
});

Route::get('/facilities', function () {
    return View::make('_facilities');
});

Route::get('/news', function () {
    return View::make('_news');
});

Route::get('/news-detail', function () {
    return View::make('_news-detail');
});

Route::get('/shopstation', function () {
    return View::make('_shopstation');
});

Route::get('/vote', function () {
    return View::make('_vote');
});

Route::get('/vote-detail', function () {
    return View::make('_vote-detail');
});




