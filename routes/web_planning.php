<?php

Route::group(['middleware' => 'auth', 'namespace'=>'Admin', 'prefix' => 'purchasing', 'as' => 'purchasing.'], function(){
	Route::resource('purchase-orders', 'PurchaseOrdersController');
});