<?php

Route::group(['middleware' => 'auth', 'namespace'=>'Admin\Master', 'prefix' => 'master', 'as' => 'master.'], function(){

	/* data reference */
	Route::group(['prefix' => 'reference', 'as' => 'reference.'], function(){
		Route::resource('kurs', 'KursController');
		Route::resource('koding', 'KodingController');
	});
});