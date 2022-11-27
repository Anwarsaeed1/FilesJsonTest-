<?php

use Illuminate\Support\Facades\Route;


/**
 * Group DataW
 */
Route::group(['prefix' => 'data-w'], function () {

    Route::get('list', 'DataWController@getDataW'); 

});


/**
 * Group DataX
 */
Route::group(['prefix' => 'data-x'], function () {

    Route::get('list', 'DataXController@getDataX'); 

});


/**
 * Group DataY
 */
Route::group(['prefix' => 'data-y'], function () {

    Route::get('list', 'DataYController@getDataY'); 

});
