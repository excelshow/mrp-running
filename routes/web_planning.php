<?php

Route::group(['middleware' => 'auth', 'namespace'=>'Admin', 'prefix' => 'planning', 'as' => 'planning.'], function(){
	Route::resource('labors', 'LaborsController');
	Route::resource('machines', 'MachinesController');
});