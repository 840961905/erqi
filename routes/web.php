<?php

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
    
    // 后台的商品颜色 laoxiao '2018-11-30'
    Route::resource('admin/color',"Admin\ColorController");
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
	Route::get('/admin/fdel','Admin\FrilinkController@fdel');
	Route::resource('/admin/friend',"Admin\FrilinkController");

	//广告管理
	Route::get('/admin/adel','Admin\AdsController@adel');
	Route::resource('/admin/advertisement',"Admin\AdsController");

	//轮播管理
	Route::get('/admin/sdel','Admin\SliderController@sdel');
	Route::resource('/admin/slider',"Admin\SliderController");

	//分类广告管理
	Route::get('/admin/del','Admin\TypeadsController@del');
	Route::resource('/admin/typeads',"Admin\TypeadsController");
});


//前台首页
Route::any('/','Home\IndexController@index');





//前台登录
Route::get('/home/login','Home\LoginController@index');
//前台执行登录
Route::post('/home/dologin','Home\LoginController@dologin');

//前台注册
Route::get('/home/zhuce','Home\LoginController@zhuce');
// 发送ajax到手机发送验证码
Route::post('/home/checkphone','Home\LoginController@checkphone');
// 发送ajax到手机验证重复
Route::post('/home/checkrephone','Home\LoginController@checkrephone');
// 发送ajax到用户验证
Route::post('/home/checkuser','Home\LoginController@checkuser');
// 验证手机验证码
Route::post('/home/checkcode','Home\LoginController@checkcode');
// 执行注册
Route::any('/home/dozhuce','Home\LoginController@dozhuce');
// 显示忘记密码
Route::get('/home/lose','Home\LoginController@lose');
// 执行忘记密码
Route::post('/home/dolose','Home\LoginController@dolose');
// 执行忘记密码
Route::post('/home/dochangepass','Home\LoginController@dochangepass');

//在线客服
Route::get('/home/customer','Home\CustomerController@index');
Route::get('/customer/reply','Home\CustomerController@reply');
Route::get('/customer/replyclick','Home\CustomerController@replyclick');



	// 购物车
     Route::get('cart','Home\CartController@cart');
     // 首页
     Route::get('home/index','Home\IndexController@index');


     // 商品详情页
     Route::get('/shop/{id}','Home\ShopController@index');


     // 分类详情页面
     Route::get('/types/{id}','Home\TypesController@index');
     
     // 删除购物车的商品
     Route::post('home/shopcart','Home\CartController@shopcart');
     // 加入购物车
     Route::get('addCar','Home\CartController@addCar');
 	// 商品数量的加
     Route::post('carAdd','Home\CartController@carAdd');
 	// 商品数量的减
 	Route::post('carJian','Home\CartController@carJian');
 	// 商品改值
 	Route::post('carValue','Home\CartController@carValue');

Route::group(['middleware'=>'homelogin'], function(){

	//个人中心
	Route::get('/home/person','Home\PersonController@person');
	//个人中心-收货地址管理
	Route::get('/home/person/addr','Home\PersonController@addr');
	//个人中心-收货地址管理-设置为默认
	Route::get('/home/person/addr/ajax_default','Home\PersonController@ajax_default');
	Route::get('/home/person/addr/ajax_addrdeldel','Home\PersonController@ajax_addrdeldel');
	Route::post('/home/person/addr/edit','Home\PersonController@edit');
	//个人中心-我的订单
	Route::get('/home/person/order','Home\PersonController@order');
	//个人中心-我的订单
	Route::post('/home/person/addr/add','Home\PersonController@addradd');



	// // 账号信息 首页
	// Route::get('/home/person/info','Home\PinfoController@index');
	// // 账号信息 显示修改手机号
	// Route::get('/home/person/changephone','Home\PinfoController@changephone');
	// // 账号信息 执行修改手机号
	// Route::post('/home/person/dochangephone','Home\PinfoController@dochangephone');
	// // 账号信息 显示修改邮箱
	// Route::get('/home/person/changeemail','Home\PinfoController@changeemail');
	// // 账号信息 执行修改邮箱
	// Route::post('/home/person/dochangeemail','Home\PinfoController@dochangeemail');
	// // 账号信息 显示修改密码
	// Route::get('/home/person/changepass','Home\PinfoController@changepass');
	// // 账号信息 执行修改密码
	// Route::post('/home/person/dochangepass','Home\PinfoController@dochangepass');
	// // 账号信息 显示修改头像
	// Route::get('/home/person/changeimg','Home\PinfoController@changeimg');
	// // 账号信息 执行修改头像
	// Route::post('/home/person/dochangeimg','Home\PinfoController@dochangeimg');
	// // 用户退出
	// Route::get('/home/logout','Home\LoginController@logout');

    // 结算
    Route::post('jiesuan','Home\CartController@jiesuan');
    // 结算提交订单
    Route::post('jiesuan_submit','Home\CartController@jiesuan_submit');
    // 订单付款
    Route::post('jiesuan_payment','Home\CartController@jiesuan_payment');

    //订单取消ajax  cancel
    Route::get('/jiesuan/order_cancel','Home\CartController@order_cancel');
    //订单确认收货 ajax order_okgoods
    Route::get('/jiesuan/order_okgoods','Home\CartController@order_okgoods');
    //订单评价
    Route::get('/jiesuan/order_evaluate/{id}','Home\CartController@order_evaluate');
    //订单评价提交
    Route::post('/jiesuan/order_evaluate_tijiao','Home\CartController@order_evaluate_tijiao');

});