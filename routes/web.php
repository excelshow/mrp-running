<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
|  Backend
|--------------------------------------------------------------------------
*/
// Mail
Route::get('/email','MailController@email');
Route::post('/send','MailController@send');

// Dashboard
Auth::routes();

include('web_manufacturing.php');
include('web_engineering.php');
include('web_planning.php');
include('web_sales.php');
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

  Route::group( ['prefix' => 'unit'], function()  {
    Route::get( 'getData', [ 'as' => 'master.unit.getdata', 'uses' => 'Admin\Master\UnitController@getData' ] );
    Route::get( '/' , [ 'as' => 'master.unit.index', 'uses' => 'Admin\Master\UnitController@index' ]);
    Route::get( 'create' , [ 'as' => 'master.unit.create', 'uses' => 'Admin\Master\UnitController@create' ]);
    Route::post( 'store' , [ 'as' => 'master.unit.store', 'uses' => 'Admin\Master\UnitController@store' ]);
    Route::get( 'edit/{id}' , [ 'as' => 'master.unit.edit', 'uses' => 'Admin\Master\UnitController@edit' ]);
    Route::post( 'update/{id}' , [ 'as' => 'master.unit.update', 'uses' => 'Admin\Master\UnitController@update' ]);
    Route::delete( 'destroy/{id}' , [ 'as' => 'master.unit.destroy', 'uses' => 'Admin\Master\UnitController@destroy' ]);
  });


  Route::group( ['prefix' => 'bom'], function()  {
    Route::get( 'getData', [ 'as' => 'bom.getdata', 'uses' => 'Admin\BomController@getData' ] );
    Route::get( '/' , [ 'as' => 'bom.index', 'uses' => 'Admin\BomController@index' ]);
    Route::get( 'create' , [ 'as' => 'bom.create', 'uses' => 'Admin\BomController@create' ]);
    Route::post( 'store' , [ 'as' => 'bom.store', 'uses' => 'Admin\BomController@store' ]);
    Route::get( 'edit/{id}' , [ 'as' => 'bom.edit', 'uses' => 'Admin\BomController@edit' ]);
    Route::put( 'update/{id}' , [ 'as' => 'bom.update', 'uses' => 'Admin\BomController@update' ]);
  });
  Route::group( ['prefix' => 'responsible'], function()  {
    Route::get( 'getData', [ 'as' => 'master.responsible.getdata', 'uses' => 'Admin\Master\ResponsibleController@getData' ] );
    Route::get( '/' , [ 'as' => 'master.responsible.index', 'uses' => 'Admin\Master\ResponsibleController@index' ]);
    Route::get( 'create' , [ 'as' => 'master.responsible.create', 'uses' => 'Admin\Master\ResponsibleController@create' ]);
    Route::post( 'store' , [ 'as' => 'master.responsible.store', 'uses' => 'Admin\Master\ResponsibleController@store' ]);
    Route::get( 'edit/{id}' , [ 'as' => 'master.responsible.edit', 'uses' => 'Admin\Master\ResponsibleController@edit' ]);
    Route::put( 'update/{id}' , [ 'as' => 'master.responsible.update', 'uses' => 'Admin\Master\ResponsibleController@update' ]);
    Route::delete( 'destroy/{id}' , [ 'as' => 'master.responsible.destroy', 'uses' => 'Admin\Master\ResponsibleController@destroy' ]);
  });
  Route::group( ['prefix' => 'warehouse'], function()  {
    Route::get( 'getData', [ 'as' => 'master.warehouse.getdata', 'uses' => 'Admin\Master\WarehouseController@getData' ] );
    Route::get( '/' , [ 'as' => 'master.warehouse.index', 'uses' => 'Admin\Master\WarehouseController@index' ]);
    Route::get( 'create' , [ 'as' => 'master.warehouse.create', 'uses' => 'Admin\Master\WarehouseController@create' ]);
    Route::post( 'store' , [ 'as' => 'master.warehouse.store', 'uses' => 'Admin\Master\WarehouseController@store' ]);
    Route::get( 'edit/{id}' , [ 'as' => 'master.warehouse.edit', 'uses' => 'Admin\Master\WarehouseController@edit' ]);
    Route::put( 'update/{id}' , [ 'as' => 'master.warehouse.update', 'uses' => 'Admin\Master\WarehouseController@update' ]);
    Route::delete( 'destroy/{id}' , [ 'as' => 'master.warehouse.destroy', 'uses' => 'Admin\Master\WarehouseController@destroy' ]);
  });

  Route::resource('customer', 'Admin\CustomerController');
  Route::group( ['prefix' => 'customer'], function()  {
    Route::get( 'getData', [ 'as' => 'customer.getdata', 'uses' => 'Admin\CustomerController@getData' ] );
    Route::get( '/' , [ 'as' => 'customer.index', 'uses' => 'Admin\CustomerController@index' ]);
    Route::get( 'create' , [ 'as' => 'customer.create', 'uses' => 'Admin\CustomerController@create' ]);
    Route::post( 'store' , [ 'as' => 'customer.store', 'uses' => 'Admin\CustomerController@store' ]);
    Route::get( 'edit/{id}' , [ 'as' => 'customer.edit', 'uses' => 'Admin\CustomerController@edit' ]);
    Route::put( 'update/{id}' , [ 'as' => 'customer.update', 'uses' => 'Admin\CustomerController@update' ]);
  });

  Route::resource('custorder', 'Admin\CustOrderController');
  Route::group( ['prefix' => 'custorder'], function()  {
    Route::get( 'getData', [ 'as' => 'custorder.getdata', 'uses' => 'Admin\CustOrderController@getData' ] );
    Route::get( '/' , [ 'as' => 'custorder.index', 'uses' => 'Admin\CustOrderController@index' ]);
    Route::get( 'create' , [ 'as' => 'custorder.create', 'uses' => 'Admin\CustOrderController@create' ]);
    Route::get( 'konfirmasi' , [ 'as' => 'custorder.konfirmasi', 'uses' => 'Admin\CustOrderController@konfirmasi' ]);
    Route::post( 'store' , [ 'as' => 'custorder.store', 'uses' => 'Admin\CustOrderController@store' ]);
    Route::post( 'confirm' , [ 'as' => 'custorder.confirm', 'uses' => 'Admin\CustOrderController@confirm' ]);
    Route::post( 'cancel' , [ 'as' => 'custorder.cancel', 'uses' => 'Admin\CustOrderController@cancel' ]);
    Route::get( 'edit/{id}' , [ 'as' => 'custorder.edit', 'uses' => 'Admin\CustOrderController@edit' ]);
    Route::put( 'update/{id}' , [ 'as' => 'custorder.update', 'uses' => 'Admin\CustOrderController@update' ]);
  });

  Route::resource('retorder', 'Admin\RetOrderController');
  Route::group( ['prefix' => 'retorder'], function()  {
    Route::get( 'getData', [ 'as' => 'retorder.getdata', 'uses' => 'Admin\RetOrderController@getData' ] );
    Route::get( '/' , [ 'as' => 'retorder.index', 'uses' => 'Admin\RetOrderController@index' ]);
    Route::get( 'create' , [ 'as' => 'retorder.create', 'uses' => 'Admin\RetOrderController@create' ]);
    Route::get( 'konfirmasi' , [ 'as' => 'retorder.konfirmasi', 'uses' => 'Admin\RetOrderController@konfirmasi' ]);
    Route::post( 'store' , [ 'as' => 'retorder.store', 'uses' => 'Admin\RetOrderController@store' ]);
    Route::post( 'confirm' , [ 'as' => 'retorder.confirm', 'uses' => 'Admin\RetOrderController@confirm' ]);
      Route::post( 'cancel' , [ 'as' => 'custorder.cancel', 'uses' => 'Admin\CustOrderController@cancel' ]);
    Route::post( 'store' , [ 'as' => 'retorder.store', 'uses' => 'Admin\RetOrderController@store' ]);
    Route::get( 'edit/{id}' , [ 'as' => 'retorder.edit', 'uses' => 'Admin\RetOrderController@edit' ]);
    Route::put( 'update/{id}' , [ 'as' => 'retorder.update', 'uses' => 'Admin\RetOrderController@update' ]);
  });

  Route::resource('reportorder', 'Admin\ReportOrderController');
  Route::group( ['prefix' => 'reportorder'], function()  {
    Route::get('pdf', [ 'as' =>'reportorder.pdf','uses'=>'Admin\ReportOrderController@pdfview']);
    Route::get('getData', [ 'as' => 'reportorder.getdata', 'uses' => 'Admin\ReportOrderController@getData' ] );
    Route::get( '/' , [ 'as' => 'reportorder.index', 'uses' => 'Admin\ReportOrderController@index' ]);
    Route::get( 'create' , [ 'as' => 'reportorder.pdfview', 'uses' => 'Admin\ReportOrderController@create' ]);
    Route::post( 'store' , [ 'as' => 'reportorder.store', 'uses' => 'Admin\ReportOrderController@store' ]);
    Route::get( 'edit' , [ 'as' => 'reportorder.edit', 'uses' => 'Admin\ReportOrderController@edit' ]);
    Route::put( 'update/{id}' , [ 'as' => 'reportorder.update', 'uses' => 'Admin\ReportOrderController@update' ]);
  });

  Route::resource('categoryproduct', 'Admin\CategoryProductController');
  Route::group( ['prefix' => 'categoryproduct'], function()  {
    Route::get( 'getData', [ 'as' => 'categoryproduct.getdata', 'uses' => 'Admin\CategoryProductController@getData' ] );
    Route::get( '/' , [ 'as' => 'categoryproduct.index', 'uses' => 'Admin\CategoryProductController@index' ]);
    Route::get( 'create' , [ 'as' => 'categoryproduct.create', 'uses' => 'Admin\CategoryProductController@create' ]);
    Route::post( 'store' , [ 'as' => 'categoryproduct.store', 'uses' => 'Admin\CategoryProductController@store' ]);
    Route::get( 'edit/{id}' , [ 'as' => 'categoryproduct.edit', 'uses' => 'Admin\CategoryProductController@edit' ]);
    Route::put( 'update/{id}' , [ 'as' => 'categoryproduct.update', 'uses' => 'Admin\CategoryProductController@update' ]);
  });

  Route::resource('product', 'Admin\ProductController');
  Route::group( ['prefix' => 'product'], function()  {
    Route::get( 'getData', [ 'as' => 'product.getdata', 'uses' => 'Admin\ProductController@getData' ] );
    Route::get( '/' , [ 'as' => 'product.index', 'uses' => 'Admin\ProductController@index' ]);
    Route::get( 'create' , [ 'as' => 'product.create', 'uses' => 'Admin\ProductController@create' ]);
    Route::get( 'addstock' , [ 'as' => 'product.addstock', 'uses' => 'Admin\ProductController@show' ]);
    Route::post( 'storestock' , [ 'as' => 'product.storestock', 'uses' => 'Admin\ProductController@storestock' ]);
    Route::post( 'store' , [ 'as' => 'product.store', 'uses' => 'Admin\ProductController@store' ]);
    Route::get( 'product/edit' , [ 'as' => 'product.edit', 'uses' => 'Admin\ProductController@edit' ]);
    Route::put( 'update/{id}' , [ 'as' => 'product.update', 'uses' => 'Admin\ProductController@update' ]);
  });

  Route::group( ['prefix' => 'logstok'], function()  {
    Route::get( 'getData', [ 'as' => 'logstok.getdata', 'uses' => 'Admin\LogStokController@getData' ] );
    Route::get( '/' , [ 'as' => 'logstok.index', 'uses' => 'Admin\LogStokController@index' ]);
    Route::get( 'create' , [ 'as' => 'logstok.create', 'uses' => 'Admin\LogStokController@create' ]);
    Route::post( 'store' , [ 'as' => 'logstok.store', 'uses' => 'Admin\LogStokController@store' ]);
    Route::get( 'edit/{id}' , [ 'as' => 'logstok.edit', 'uses' => 'Admin\LogStokController@edit' ]);
    Route::put( 'update/{id}' , [ 'as' => 'logstok.update', 'uses' => 'Admin\LogStokController@update' ]);
  });

  Route::group( ['prefix' => 'tools'], function()  {
    Route::get( 'getData', [ 'as' => 'tools.getdata', 'uses' => 'Admin\Master\ToolsController@getData' ] );
    Route::get( '/' , [ 'as' => 'tools.index', 'uses' => 'Admin\Master\ToolsController@index' ]);
    Route::get( 'create' , [ 'as' => 'tools.create', 'uses' => 'Admin\Master\ToolsController@create' ]);
    Route::post( 'store' , [ 'as' => 'tools.store', 'uses' => 'Admin\Master\ToolsController@store' ]);
    Route::get( 'edit/{id}' , [ 'as' => 'tools.edit', 'uses' => 'Admin\Master\ToolsController@edit' ]);
    Route::put( 'update/{id}' , [ 'as' => 'tools.update', 'uses' => 'Admin\Master\ToolsController@update' ]);
  });
  
   Route::group( ['prefix' => 'workcenter'], function()  {
    Route::get( 'getData', [ 'as' => 'workcenter.getdata', 'uses' => 'Admin\Master\WorkCenterController@getData' ] );
    Route::get( '/' , [ 'as' => 'workcenter.index', 'uses' => 'Admin\Master\WorkCenterController@index' ]);
    Route::get( 'create' , [ 'as' => 'workcenter.create', 'uses' => 'Admin\Master\WorkCenterController@create' ]);
    Route::post( 'store' , [ 'as' => 'workcenter.store', 'uses' => 'Admin\Master\WorkCenterController@store' ]);
    Route::get( 'edit/{id}' , [ 'as' => 'workcenter.edit', 'uses' => 'Admin\Master\WorkCenterController@edit' ]);
    Route::put( 'update/{id}' , [ 'as' => 'workcenter.update', 'uses' => 'Admin\Master\WorkCenterController@update' ]);
  });
   Route::group( ['prefix' => 'routing'], function()  {
    Route::get( 'getData', [ 'as' => 'routing.getdata', 'uses' => 'Admin\Master\RoutingController@getData' ] );
    Route::get( '/' , [ 'as' => 'routing.index', 'uses' => 'Admin\Master\RoutingController@index' ]);
    Route::get( 'create' , [ 'as' => 'routing.create', 'uses' => 'Admin\Master\RoutingController@create' ]);
    Route::post( 'store' , [ 'as' => 'routing.store', 'uses' => 'Admin\Master\RoutingController@store' ]);
    Route::get( 'edit/{id}' , [ 'as' => 'routing.edit', 'uses' => 'Admin\Master\RoutingController@edit' ]);
    Route::put( 'update/{id}' , [ 'as' => 'routing.update', 'uses' => 'Admin\Master\RoutingController@update' ]);
  });
   Route::group( ['prefix' => 'work-order'], function()  {
    Route::get( 'getData', [ 'as' => 'work-order.getdata', 'uses' => 'Admin\WorkOrderController@getData' ] );
    Route::get( '/' , [ 'as' => 'work-order.index', 'uses' => 'Admin\WorkOrderController@index' ]);
    Route::get( 'create' , [ 'as' => 'work-order.create', 'uses' => 'Admin\WorkOrderController@create' ]);
    Route::post( 'store' , [ 'as' => 'work-order.store', 'uses' => 'Admin\WorkOrderController@store' ]);
    Route::get( 'edit/{id}' , [ 'as' => 'work-order.edit', 'uses' => 'Admin\WorkOrderController@edit' ]);
    Route::put( 'update/{id}' , [ 'as' => 'work-order.update', 'uses' => 'Admin\WorkOrderController@update' ]);
    Route::post( 'delete/{id}' , [ 'as' => 'work-order.destroy', 'uses' => 'Admin\WorkOrderController@destroy' ]);
  });
});
