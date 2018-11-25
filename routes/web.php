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

Route::get('/', function () {
    return view('home.welcome');
});

// 后台
Route::group([],function(){
	// 后台的首页
	Route::get('/admin','Admin\IndexController@index');

	// 后台的分类管理
	Route::resource('admin/type',"Admin\TypeController");
    // 后台的商品管理
	Route::resource('admin/shop',"Admin\ShopController");

});

// 前台
