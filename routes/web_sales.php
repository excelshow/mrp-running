<?php

Route::group(['middleware' => 'auth', 'namespace'=>'Admin', 'prefix' => 'sales', 'as' => 'sales.'], function(){

	/* orders */
	Route::resource('orders', 'SalesOrdersController');

	/* order items */
	Route::resource('orders-items', 'SalesOrderItemController');

	/* contracts */
	Route::resource('contracts', 'SalesContractsController');
	
});