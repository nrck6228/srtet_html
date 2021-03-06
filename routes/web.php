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
//     return view('index');
// });

Route::get('/', function()
{
    return View::make('_home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/history', function () {
    return View::make('_history');
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

Route::get('/fare-table', function () {
    return View::make('_fare-table');
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

// Route::get('/procurement', function () {
//     return View::make('_procurement');
// });

Route::get('/survey', function () {
    return View::make('_survey');
});

Route::get('/survey-detail', function () {
    return View::make('_survey-detail');
});

Route::get('/activity', function () {
    return View::make('_activity');
});

Route::get('/activity-detail', function () {
    return View::make('_activity-detail');
});

Route::get('/lostfound', function () {
    return View::make('_lostfound');
});

Route::get('/lostfound-detail', function () {
    return View::make('_lostfound-detail');
});

Route::get('/report', function () {
    return View::make('_report');
});

Route::get('/contact', function () {
    return View::make('_contact');
});
Route::get('/contact2', function () {
    return View::make('_contact2');
});


Route::get('/career/listcareer', function () {
    return View::make('career._list');
});

Route::get('/career/form1', function () {
    return View::make('career._form_1');
});
Route::get('/career/form2', function () {
    return View::make('career._form_2');
});
Route::get('/career/form3', function () {
    return View::make('career._form_3');
});
Route::get('/career/jobApplication', function () {
    return View::make('career._job_application');
});

Route::get('/question', function () {
    return View::make('_question');
});

Route::get('/faq', function () {
    return View::make('_faq');
});

Route::get('/procurement/index', function () {
    return View::make('procurement._index');
});
Route::get('/procurement/detail1', function () {
    return View::make('procurement._detail-01');
});
Route::get('/procurement/detail3', function () {
    return View::make('procurement._detail-03');
});
Route::get('/procurement/detail4', function () {
    return View::make('procurement._detail-04');
});
Route::get('/procurement/detail6', function () {
    return View::make('procurement._detail-06');
});

Route::get('/ITA', function () {
    return View::make('_ita');
});

Route::get('/suggession', function () {
    return View::make('_suggession');
});

Route::get('/events', function () {
    return View::make('_events');
});

Route::get('/events-detail', function () {
    return View::make('_events-detail');
});

Route::get('/institute', function () {
    return View::make('_institute');
});

Route::get('/search', function () {
    return View::make('_search');
});

Route::get('/responsibility', function () {
    return View::make('_responsibility');
});

Route::get('/strategic', function () {
    return View::make('_strategic');
});

Route::get('/declaration', function () {
    return View::make('_declaration');
});

Route::get('/boards', function () {
    return View::make('_boards');
});