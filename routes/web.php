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

    Route::get('/', 'ReportsController@index');

    /**
     * Main reporting function which will accept a number
     * of parameters, parse them and attempt to return data.
     */
    Route::get('/report/{queryParams}', 'ReportsController@report');


    Route::get('/uncovered', 'DemoController@uncovered');

