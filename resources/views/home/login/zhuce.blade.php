@extends('home.index')
	
@section('title',$title)

@section('css')

	<link rel="stylesheet" href="/person/css/index.css">
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="/home/css/index.css">
    <link rel="stylesheet" href="/home/css/topfoot.css">
    <link rel="stylesheet" type="text/css" href="/home/fonts/iconfont.css">
	<script src="/home/js/jquery-3.2.1.min.js"></script>
    <script src="/home/js/bootstrap.min.js"></script>
    <style>
    	.cur{border:solid 1px skyblue;}
    </style>

@endsection

@section('content')
	<div id="registerSuccessDiv">
		<div class="clearfix wrapper mt10">
    		<a href="" class="logo fl">
    			<img src="/home/public/img/logo.png" alt="">
    		</a>
    	</div>
			<div class="wrapper clearfix mt30 ">
				@if(session('error'))
                <div class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button><li>{{session('error')}}</li>
                </div>
                @endif
	    		<div class="Landbox">
	    			<h3 style="margin-top: 0px">
	    				<span>新用户注册</span>
	    				<strong>已有账号？去
	                        <a href="/home/login">登录</a>
	                    </strong>
	    			</h3>
	    			<form action="/home/dozhuce" method="post" id="forms">
	    				<ul>
	    					<li>
	    						<label for="">
	    							<b>*</b>
	    							登录名:
	    						</label>
	    						<s></s>
	    						<input  type="text" class="Landboxinput logonid" size="35" name="aname" id="aname" placeholder="用户名">
	    						<span id="count-msg" class="error"></span>
	    					</li>
	    					<li>
	    						<label for="">
	    							<b>*</b>
	    							设置密码:
	    						</label>
	    						<em></em>
	    						<input type="password" class="Landboxinput password" size="35" name="password" id="password" placeholder="密码">
	    						<span id="password-msg" class="error"></span>
	    					</li>
	    					<li>
	    						<label for="">
	    							<b>*</b>
	    							确认密码:
	    						</label>
	    						<em></em>
	    						<input type="password" class="Landboxinput password" size="35" name="repassword" id="repassword" placeholder="再次输入密码">
	    						<span id="repassword-msg" class="error"></span>
	    					</li>
	    					<li>
	    						<label for="">
	    							<b>*</b>
	    							手机:
	    						</label>
	    						<em></em>
	    						<input type="text" class="Landboxinput password" size="35" name="phone"  placeholder="手机号">
	    						<span id="repassword-msg" class="error"></span>
	    					</li>
	    					<li>
	    						<label for="">
	    							<b>*</b>
	    							验证码:
	    						</label>
	    						<em></em>
	    						<input type="password" class="Landboxinput password" size="35" name="code" id="code" placeholder="手机验证码" style="width:128px">&nbsp;
	    						<input id="but" type="button" class="btn" value="获取验证码">
	    						<span></span>
	    					</li>
	    				</ul>
	    				<input type="submit" value="注册" class="sign-in-button">
	    			{{csrf_field()}}
	    		</div>
	    		<div class="Landing-advertising-box">
	                <div id="contentRecommendationWidget-logonEspot" class="contentRecommendationWidget">
	                    <div class="left_espot">
	                        <a href="">
	                            <img src="/home/images/aSD1.jpg" alt="" style="margin-left: 8px;">
	                        </a>
	                    </div>
	                </div>      
	            </div>
	    	</div>
		</form>
	</div>
@endsection

@section('script')
<script>

	$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
	var US = true;
	var PS = true;
	var RPS = true;
	var PH = true;
	var CV = true;



	//用户名
	//获取焦点事件
	$('input[name=aname]').focus(function(){
		// $(this).css('border','solid 1px skyblue');
		$(this).addClass('cur');
	})
	//失去焦点事件
	$('input[name=aname]').blur(function(){
		//获取输入的值
		var uv = $(this).val().trim();
		if(uv == ''){
			$(this).next().text(' *用户名不能为空').css('color','#e53e41');

			$(this).css('border','solid 1px #e53e41');

			US = false;

			return;
		}

		//正则
		var reg = /^\w{6,16}$/;
		var tu = $(this);
		//检测
		if(!reg.test(uv)){
			$(this).next().text(' *用户名格式不正确').css('color','#e53e41');

			$(this).css('border','solid 1px #e53e41');

			US = false;
		} else {

			//发送ajax
			$.post('/home/checkuser',{aname:uv},function(data){

				//判断
				if(data == '1'){

					tu.next().text(' *用户名已存在').css('color','#e53e41');

					tu.css('border','solid 1px #e53e41');

					US = false;
				} else {

					tu.next().text(' *√').css('color','green');

					tu.css('border','solid 1px green');

					US = true;
				}
			})
		}
	})

	//密码
	$('input[name=password]').focus(function(){
		$(this).addClass('cur');
	})
	//失去焦点
	$('input[name=password]').blur(function(){
		var pv = $(this).val();

		if(pv == ''){

			$(this).next().text(' *密码不能为空').css('color','#e53e41');
			$(this).css('border','solid 1px #e53e41');

			PS = false;

			return;
		}

		var reg = /^\S{6,12}$/;

		if(!reg.test(pv)){

			$(this).next().text(' *密码格式不正确').css('color','#e53e41');
			$(this).css('border','solid 1px #e53e41');

			PS = false;
		} else {

			$(this).next().text(' *√').css('color','green');
			$(this).css('border','solid 1px green');
			PS = true;
		}
	})

	//确认密码
	$('input[name=repassword]').focus(function(){
		$(this).addClass('cur');
	})

	//失去焦点
	$('input[name=repassword]').blur(function(){
		
		//获取密码
		var pvs = $('input[name=password]').val().trim();

		//获取确认密码
		var rpv = $(this).val().trim();

		if(rpv == ''){

			$(this).next().text(' *确认密码不能为空').css('color','#e53e41');
			$(this).css('border','solid 1px #e53e41');

			RPS = false;

			return;
		}

		if(pvs != rpv){

			$(this).next().text(' *两次密码不一致').css('color','#e53e41');
			$(this).css('border','solid 1px #e53e41');

			RPS = false;
		} else {

			$(this).next().text(' *√').css('color','green');
			$(this).css('border','solid 1px green');
			RPS = true;
		}
	})

	//手机号
	$('input[name=phone]').focus(function(){
		$(this).addClass('cur');
	})

	$('input[name=phone]').blur(function(){

		var phv = $(this).val().trim();

		if(phv == ''){

			$(this).next().text(' *手机号不能为空').css('color','#e53e41');
			$(this).css('border','solid 1px #e53e41');

			PH = false;

			return;
		}

		var reg = /^1[3456789]\d{9}$/;

		if(!reg.test(phv)){

			$(this).next().text(' *手机号格式不正确').css('color','#e53e41');
			$(this).css('border','solid 1px #e53e41');

			PH = false;
		} else {
			$.post('/home/checkrephone',{phone:phv},function(data){
				if (data == '1') {
					$('input[name=phone]').next().text(' *手机已被注册').css('color','#e53e41');
					$('input[name=phone]').css('border','solid 1px #e53e41');
					PH = false;
				} else {
					$('input[name=phone]').next().text(' *√').css('color','green');
					$('input[name=phone]').css('border','solid 1px green');
					PH = true;
				}
			})
		}
	})

	//获取验证码
	$('#but').click(function(){
		//获取手机号
		var phone = $('input[name=phone]').val().trim();
		var phv = $('input[name=phone]').val().trim();

		if(phv == ''){

			$('input[name=phone]').next().text(' *手机号不能为空').css('color','#e53e41');
			$('input[name=phone]').css('border','solid 1px #e53e41');

			PH = false;

			return;
		}

		var reg = /^1[3456789]\d{9}$/;

		if(!reg.test(phv)){

			$('input[name=phone]').next().text(' *手机号格式不正确').css('color','#e53e41');
			$('input[name=phone]').css('border','solid 1px #e53e41');
			PH = false;
		} else {
			$.post('/home/checkrephone',{phone:phv},function(data){
				if (data == '1') {
					$('input[name=phone]').next().text(' *手机已被注册').css('color','#e53e41');
					$('input[name=phone]').css('border','solid 1px #e53e41');
					PH = false;
				} else {
					$('input[name=phone]').next().text(' *√').css('color','green');
					$('input[name=phone]').css('border','solid 1px green');
					PH = true;
					// 发送ajax
					$.post('/home/checkphone',{number:phone},function(data){
						console.log(data);
					})
				}
			})

			
		}
	})


	//获取验证码
	$('input[name=code]').focus(function(){
		$(this).addClass('cur');
	})

	$('input[name=code]').blur(function(){
		///获取验证码
		var cd = $(this).val().trim();

		if(cd == ''){
			$(this).next().next().text(' *验证码不能为空').css('color','#e53e41');

			$(this).css('border','solid 1px #e53e41');

			CV = false;
			return;
		}

		var cs = $(this);
		//发送ajax
		$.post('/home/checkcode',{code:cd},function(data){
			console.log(data);
			if(data == '0'){

				cs.next().next().text(' *验证码不正确').css('color','#e53e41');

				cs.css('border','solid 1px #e53e41');

				CV = false;
			} else {

				cs.next().next().text(' *√').css('color','green');

				cs.css('border','solid 1px green');

				CV = true;
			}
		})

	})


	//提交事件
	/*$(':submit').click(function(){

		alert(1234);

		return false;
	})*/

	$('#forms').submit(function(){

		$('input[name=code]').trigger('blur');
		$('input[name=phone]').trigger('blur');
		$('input[name=repassword]').trigger('blur');
		$('input[name=password]').trigger('blur');
		$('input[name=aname]').trigger('blur');

		if(US && PS && RPS && PH && CV){

			return true;
		} 
		//var flag = 1   var flag = 0
		return false;
	})


</script>
@endsection