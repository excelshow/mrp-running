<?php

Route::group(['middleware' => 'auth', 'namespace'=>'Admin', 'prefix' => 'operations'], function(){
	Route::resource('manufacturing', 'ManufacturingOrdersController');
	Route::resource('unbuild', 'UnbuildOrdersController');
	Route::resource('scrap', 'ScrapOrdersController');
});