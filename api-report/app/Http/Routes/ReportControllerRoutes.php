<?php

namespace App\Http\Routes;

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api/reports'], function () {
    Route::get('', 'ReportController@index');
});