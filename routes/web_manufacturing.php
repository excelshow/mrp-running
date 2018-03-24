<?php

Route::group(['middleware' => 'auth', 'namespace'=>'Admin', 'prefix' => 'manufacturing', 'as' => 'manufacturing'], function(){

	/* operations */
	Route::group(['prefix' => 'operations', 'as' => 'operations'], function(){
		Route::get('/', 'ManufactureController@operations');
		Route::resource('manufacturing-orders', 'ManufacturingOrdersController');
		Route::resource('unbuild-orders', 'UnbuildOrdersController');
		Route::resource('scrap-orders', 'ScrapOrdersController');
	});

	/* reporting */
	Route::group(['prefix' => 'reporting', 'as' => 'reporting'], function(){
		Route::get('/', 'ManufactureController@reporting');
	});
});