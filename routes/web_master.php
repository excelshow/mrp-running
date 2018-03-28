<?php

Route::group(['middleware' => 'auth', 'namespace'=>'Admin/Admin', 'prefix' => 'master', 'as' => 'master'], function(){
	Route::resource('kurs', 'KursController');
	Route::resource('koding', 'KodingController');
});