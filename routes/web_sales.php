<?php

Route::group(['middleware' => 'auth', 'namespace'=>'Admin', 'prefix' => 'sales', 'as' => 'sales.'], function(){
	Route::resource('orders', 'KursController');
	Route::resource('contracts', 'KodingController');
	Route::resource('purchases', 'StoresController');
});