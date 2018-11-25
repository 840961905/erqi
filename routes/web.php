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
    return view('welcome');
});



//后台
//Route::group(['middleware'=>'login'], function(){

	//后台的首页
	Route::get('/admin', 'Admin\IndexController@index');

	//友情连接管理
	Route::resource('/admin/friend',"Admin\FrilinkController");


	//后台的用户管理
	//Route::resource('admin/user',"Admin\UserController");
	//Route::get('/admin/usajax','Admin\UserController@ajaxupdate');

	//分类管理
	//Route::resource('admin/category','Admin\CategoryController');
	//商品管理
	//Route::resource('admin/goods','Admin\GoodsController');
  

//});