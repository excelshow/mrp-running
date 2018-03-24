<?php

/* manufacturing */
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
		Route::get('manufacturing-orders', 'ReportingManufacturingOrdersController@index');
	});
});

/* planning */
Route::group(['namespace'=>'Admin', 'prefix' => 'planning', 'as' => 'planning'], function(){
	Route::resource('maintenance-data-day-off', 'MaintenanceDataDayOffController');
	Route::resource('maintenance-data-planning', 'MaintenanceDataPlanningController');
	Route::resource('maintenance-data-work-center', 'MaintenanceDataWorkCenterController');
});