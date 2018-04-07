<?php

Route::group(['middleware' => 'auth', 'namespace'=>'Admin', 'prefix' => 'purchasing', 'as' => 'purchasing.'], function(){

	/* purchase orders */
	Route::resource('purchase-orders', 'PurchaseOrdersController');
});