<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['auth:api'],  'as' => 'reports.'], function () {

    Route::get('/reports/groups', 'ReportsController@groups')->name('reports.groups');
    Route::resource('/reports', 'ReportsController');

});
