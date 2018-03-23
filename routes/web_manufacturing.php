<?php

Route::group(['middleware' => 'auth', 'namespace'=>'Admin'], function(){
	Route::resource('manufacturing', 'ManufacturingController');
});