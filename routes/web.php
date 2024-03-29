<?php

// Mail
Route::get('/email','MailController@email');
Route::post('/send','MailController@send');

/* auth */
Auth::routes();

include('web_sales.php');
include('web_engineering.php');
include('web_planning.php');
include('web_purchasing.php');
include('web_master.php');

Route::group(['middleware' => 'auth'], function(){
  
  Route::get('/home', 'HomeController@index');
  Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/home', 'AdminController@index');
  });

  // Users
  // Route::resource('user', 'Admin\UsersController');
  Route::group( ['prefix' => 'user'], function()  {
    Route::get( 'getData', [ 'as' => 'user.getdata', 'uses' => 'Admin\UsersController@getData' ] );
    Route::get( '/' , [ 'as' => 'user.index', 'uses' => 'Admin\UsersController@index' ]);
    Route::get( 'create' , [ 'as' => 'user.create', 'uses' => 'Admin\UsersController@create' ]);
    Route::post( 'store' , [ 'as' => 'user.store', 'uses' => 'Admin\UsersController@store' ]);
    Route::get( 'edit/{id}' , [ 'as' => 'user.edit', 'uses' => 'Admin\UsersController@edit' ]);
    Route::post( 'update/' , [ 'as' => 'user.update', 'uses' => 'Admin\UsersController@update' ]);
    Route::post( 'destroy' , [ 'as' => 'user.destroy', 'uses' => 'Admin\UsersController@destroy' ]);
  });

  // Role Management
  // Route::resource('role', 'Admin\RoleController');
  Route::group( ['prefix' => 'role'], function()  {
    Route::get( 'getData', [ 'as' => 'role.getdata', 'uses' => 'Admin\RoleController@getData' ] );
    Route::get( '/' , [ 'as' => 'role.index', 'uses' => 'Admin\RoleController@index' ]);
    Route::get( 'create' , [ 'as' => 'role.create', 'uses' => 'Admin\RoleController@create' ]);
    Route::post( 'store' , [ 'as' => 'role.store', 'uses' => 'Admin\RoleController@store' ]);
    Route::get( 'edit/{id}' , [ 'as' => 'role.edit', 'uses' => 'Admin\RoleController@edit' ]);
    Route::put( 'update/{id}' , [ 'as' => 'role.update', 'uses' => 'Admin\RoleController@update' ]);
    Route::delete( 'destroy/{id}' , [ 'as' => 'role.destroy', 'uses' => 'Admin\RoleController@destroy' ]);
  });

  Route::resource('profile', 'Admin\ProfileController');
  Route::group( ['prefix' => 'profile'], function()  {
    Route::get( 'getData', [ 'as' => 'profile.getdata', 'uses' => 'Admin\ProfileController@getData' ] );
    Route::get( '/' , [ 'as' => 'profile.index', 'uses' => 'Admin\ProfileController@index' ]);
    Route::get( 'create' , [ 'as' => 'profile.create', 'uses' => 'Admin\ProfileController@create' ]);
    Route::post( 'store' , [ 'as' => 'profile.store', 'uses' => 'Admin\ProfileController@store' ]);
    Route::get( 'edit/{id}' , [ 'as' => 'profile.edit', 'uses' => 'Admin\ProfileController@edit' ]);
    Route::put( 'update/{id}' , [ 'as' => 'profile.update', 'uses' => 'Admin\ProfileController@update' ]);
  });

  Route::group( ['prefix' => 'module'], function()  {
    Route::get( 'getData', [ 'as' => 'module.getdata', 'uses' => 'Admin\ModuleController@getData' ] );
    Route::get( '/' , [ 'as' => 'module.index', 'uses' => 'Admin\ModuleController@index' ]);
    Route::get( 'create' , [ 'as' => 'module.create', 'uses' => 'Admin\ModuleController@create' ]);
    Route::post( 'store' , [ 'as' => 'module.store', 'uses' => 'Admin\ModuleController@store' ]);
    Route::get( 'edit/{id}' , [ 'as' => 'module.edit', 'uses' => 'Admin\ModuleController@edit' ]);
    Route::post( 'update/{id}' , [ 'as' => 'module.update', 'uses' => 'Admin\ModuleController@update' ]);
    Route::delete( 'destroy/{id}' , [ 'as' => 'module.destroy', 'uses' => 'Admin\ModuleController@destroy' ]);
  });

});
