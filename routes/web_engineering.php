<?php

Route::group(['middleware' => 'auth', 'namespace'=>'Admin', 'prefix' => 'engineering', 'as' => 'engineering.'], function(){

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

});