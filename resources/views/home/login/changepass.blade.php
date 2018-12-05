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
	    				<span>重置密码</span>
	    				<strong>已有账号？去
	                        <a href="/home/login">登录</a>
	                    </strong>
	    			</h3>
	    			<form action="/home/dochangepass" method="post" id="forms">
	    				<ul>
	    					<li>
	    						<label >
	    							<b>*</b>
	    							账号:
	    						</label>

	    						<span id="password-msg" class="error">{{session('changename')}}</span>
	    						
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
	    				</ul>
	    				<input type="submit" value="重置" class="sign-in-button">
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
	var PS = true;
	var RPS = true;



	

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

	

	$('#forms').submit(function(){

		$('input[name=repassword]').trigger('blur');
		$('input[name=password]').trigger('blur');

		if(PS && RPS){

			return true;
		} 
		//var flag = 1   var flag = 0
		return false;
	})


</script>
@endsection