<?php

Route::group(['middleware' => 'auth', 'namespace'=>'Admin', 'prefix' => 'planning', 'as' => 'planning.'], function(){

	/* labors */
	Route::resource('labors', 'LaborsController');

	/* machines */
	Route::resource('machines', 'MachinesController');

	/* locations */
	Route::resource('locations', 'LocationsController');

	/* work center */
	Route::resource('work-center', 'WorkCenterController');

});