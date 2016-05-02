<?php


Route::group(['namespace' => 'Quaker\Authmeal\Controllers', 'prefix' => 'demo'], function(){
	Route::get('foo', 'AuthmealController@foo');
});