<?php

Route::group(['middleware' => 'auth', 'namespace'=>'Admin\Master', 'prefix' => 'master', 'as' => 'master.'], function(){

	/* master material */
	Route::group(['prefix' => 'master-materials', 'as' => 'master-materials.'], function(){
		Route::get('approval', 'MasterMaterialController@approval');
		Route::get('approval/{id}', 'MasterMaterialController@editApproval')->name('approval.edit');
		Route::put('approval/{id}', 'MasterMaterialController@updateApproval')->name('approval.update');
		Route::resource('maintenance-data', 'MasterMaterialController');
	});

	/* master material */
	Route::group(['prefix' => 'bill-of-materials', 'as' => 'bill-of-materials.'], function(){
		Route::get('approval', 'BillOfMaterialController@approval');
		Route::get('approval/{id}', 'BillOfMaterialController@editApproval')->name('approval.edit');
		Route::put('approval/{id}', 'BillOfMaterialController@updateApproval')->name('approval.update');
		Route::resource('maintenance-data', 'BillOfMaterialController');
	});

	/* data reference */
	Route::group(['prefix' => 'reference', 'as' => 'reference.'], function(){
		Route::resource('units', 'UnitController');
		Route::resource('kurs', 'KursController');
		Route::resource('koding', 'KodingController');
		Route::resource('stores', 'StoresController');
		Route::resource('labors', 'LaborsController');
		Route::resource('machines', 'MachinesController');
		Route::resource('part-class', 'PartClassController');
		Route::resource('shop-code', 'ShopCodeController');
		Route::resource('sales-document-type', 'SalesDocumentTypeController');
		Route::resource('operation-status', 'OperationStatusController');
		Route::resource('customers', 'CustomersController');
	});

});