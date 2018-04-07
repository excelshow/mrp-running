<?php

Route::group(['middleware' => 'auth', 'namespace'=>'Admin', 'prefix' => 'engineering', 'as' => 'engineering.'], function(){

	/* master materials */
	Route::group(['prefix' => 'master-materials', 'as' => 'master-materials.'], function(){
		Route::get('approval', 'MasterMaterialController@approval');
		Route::get('approval/{id}', 'MasterMaterialController@editApproval')->name('approval.edit');
		Route::put('approval/{id}', 'MasterMaterialController@updateApproval')->name('approval.update');
		Route::resource('maintenance-data', 'MasterMaterialController');
	});
	
	/*  bill of materials */
	Route::group(['prefix' => 'bill-of-materials', 'as' => 'bill-of-materials.'], function(){
		Route::get('approval', 'BillOfMaterialController@approval');
		Route::get('approval/{id}', 'BillOfMaterialController@editApproval')->name('approval.edit');
		Route::put('approval/{id}', 'BillOfMaterialController@updateApproval')->name('approval.update');
		Route::resource('maintenance-data', 'BillOfMaterialController');
	});

	/* engineering bill of materials */
	Route::group(['prefix' => 'e-bom', 'as' => 'e-bom.'], function(){
		Route::get('approval', 'EBOMAssyController@approval');
		Route::get('approval/{id}', 'EBOMAssyController@editApproval')->name('approval.edit');
		Route::put('approval/{id}', 'EBOMAssyController@updateApproval')->name('approval.update');
		Route::resource('assy', 'EBOMAssyController');
		Route::resource('single-parts', 'EBOMSinglePartController');
	});

	/* manufacturing bill of materials */
	Route::group(['prefix' => 'm-bom', 'as' => 'm-bom.'], function(){
		Route::get('approval', 'MBOMAssyController@approval');
		Route::get('approval/{id}', 'MBOMAssyController@editApproval')->name('approval.edit');
		Route::put('approval/{id}', 'MBOMAssyController@updateApproval')->name('approval.update');
		Route::resource('assy', 'MBOMAssyController');
		Route::resource('single-parts', 'MBOMSinglePartController');
	});

	/* routing master */
	Route::group(['prefix' => 'routing-master', 'as' => 'routing-master.'], function(){
		Route::get('approval', 'RoutingMasterController@approval');
		Route::get('approval/{id}', 'RoutingMasterController@editApproval')->name('approval.edit');
		Route::put('approval/{id}', 'RoutingMasterController@updateApproval')->name('approval.update');
		Route::resource('maintenance-data', 'RoutingMasterController');
	});

});