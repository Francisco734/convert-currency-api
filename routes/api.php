<?php

use App\Http\Controllers\HistoricalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'convert-currency'], function(){
    Route::resource('historical', HistoricalController::class);
});
