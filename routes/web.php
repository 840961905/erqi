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
//后台的登录
Route::any('/admin/login','Admin\LoginController@login');
Route::any('/admin/dologin','Admin\LoginController@dologin');
// 验证码
Route::any('/admin/captcha','Admin\LoginController@captcha');
// 修改邮箱
Route::any('/admin/profile','Admin\LoginController@profile');
Route::any('/admin/upload','Admin\LoginController@upload');
// 修改密码
Route::any('/admin/passchange','Admin\LoginController@passchange');
// 后台退出
Route::any('/admin/logout','Admin\LoginController@logout');
// 中间件
// 'middleware'=>'login'

Route::group(['middleware'=>'login'], function(){

	Route::get('/', function () {
	    return view('welcome');
	});


	//后台的首页
	Route::get('/admin', 'Admin\IndexController@index');

	//后台的用户管理
	Route::resource('/admin/admin',"Admin\AdminController");
	Route::get('/admin/usajax','Admin\UserController@ajaxupdate');
	// 用户管理
	Route::resource('/admin/users',"Admin\UsersController");

	// 后台的分类管理
	Route::resource('admin/type',"Admin\TypeController");
    // 后台的商品管理
	Route::resource('admin/shop',"Admin\ShopController");



	//友情连接管理
	Route::resource('admin/friend',"Admin\FrilinkController");

});

