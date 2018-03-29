<?php

Route::group(['middleware' => 'auth', 'namespace'=>'Admin\Master', 'prefix' => 'master', 'as' => 'master.'], function(){

	/* master material */
	Route::group(['prefix' => 'master-materials', 'as' => 'master-materials.'], function(){
		Route::get('approval', 'MasterMaterialController@approval');
		Route::get('approval/{id}', 'MasterMaterialController@editApproval')->name('approval.edit');
		Route::put('approval/{id}', 'MasterMaterialController@updateApproval')->name('approval.update');
		Route::resource('maintenance-data', 'MasterMaterialController');
	});

	/* data reference */
	Route::group(['prefix' => 'reference', 'as' => 'reference.'], function(){
		Route::resource('kurs', 'KursController');
		Route::resource('koding', 'KodingController');
		Route::resource('stores', 'StoresController');
		Route::resource('part-class', 'PartClassController');
	});

});