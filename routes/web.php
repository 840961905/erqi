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
// 后台退出
Route::any('/admin/logout','Admin\LoginController@logout')->middleware(['login']);
// 中间件
// 'middleware'=>'login'

// 用户权限提示页面
Route::any('/admin/remind','Admin\AdminController@remind')->middleware(['login']);

//后台 订单收货人信息查询
Route::get('admin/orders/address','Admin\OrdersController@address');
//后台 订单
Route::get('admin/orders/check','Admin\OrdersController@check');

Route::get('admin/comment/chackinfo','Admin\CommentController@chackinfo');


Route::group(['middleware'=>['login','adminper']], function(){
	//后台的首页
	Route::get('/admin', 'Admin\IndexController@index');

	//后台网站管理
	Route::resource('/admin/hinfo',"Admin\HinfoController");

	//后台的用户管理
	Route::resource('/admin/admin',"Admin\AdminController");
	Route::any('/admin/usajax','Admin\UserController@ajaxupdate');
	// 给管理员添加角色
	Route::any('/admin/admin_role','Admin\AdminController@admin_role');
	Route::any('/admin/do_admin_role','Admin\AdminController@do_admin_role');

	// 角色管理
	Route::resource('/admin/role','Admin\RoleController');
	Route::any('/admin/role_per','Admin\RoleController@role_per');
	Route::any('/admin/do_role_per','Admin\RoleController@do_role_per');
	
	// 权限管理
	Route::resource('/admin/permission','Admin\PermissionController');
	
	// 修改密码
	Route::any('/admin/passchange','Admin\LoginController@passchange');
	Route::any('/admin/dopasschange','Admin\LoginController@dopasschange');

	// 修改头像
	Route::any('/admin/profile','Admin\LoginController@profile');
	Route::any('/admin/upload','Admin\LoginController@upload');
	
	// 用户管理
	Route::resource('/admin/users',"Admin\UsersController");

	// 后台的分类管理
	Route::resource('admin/type',"Admin\TypeController");
    	// 后台的商品管理
	Route::resource('admin/shop',"Admin\ShopController");
    
	// 商品的描述
	Route::get('/admin/text',"Admin\ShopController@text");

	// 商品的图片
	Route::get('/admin/imgs',"Admin\ShopController@imgs");
	//后台 订单管理
	Route::resource('admin/orders',"Admin\OrdersController");

	//后台 订单状态管理
	Route::resource('admin/orderstatu',"Admin\OrderstatuController");

	//后台 订单评论管理
	Route::resource('admin/comment',"Admin\CommentController");
	Route::get('admin/comment/status/{id}','Admin\CommentController@status');
	
	
	//友情连接管理
	Route::resource('/admin/friend',"Admin\FrilinkController");

	//广告管理
	Route::resource('/admin/advertisement',"Admin\AdsController");

	//轮播管理
	Route::resource('/admin/slider',"Admin\SliderController");
});

Route::group([], function(){
     Route::get('home/cart','Home\CartController@cart');

     Route::post('home/shopcart','Home\CartController@shopcart');
});