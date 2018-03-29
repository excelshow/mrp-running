<?php

Route::group(['middleware' => 'auth', 'namespace'=>'Admin', 'prefix' => 'sales', 'as' => 'sales.'], function(){
	Route::resource('orders', 'SalesOrdersController');
	Route::resource('orders-items', 'SalesOrderItemController');
	Route::resource('contracts', 'SalesContractsController');
	Route::resource('purchases', 'SalesPurchasesController');
});