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
				@if(session('success'))
                <div class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button><li>{{session('error')}}</li>
                </div>
                @endif
	    		<div class="Landbox">
	    			<h3 style="margin-top: 0px">
	    				<span>找回密码</span>
	    				<strong>没有账号？去
	                        <a href="/home/zhuce">注册</a>
	                    </strong>
	    			</h3>
	    			<form action="/home/dolose" method="post" id="forms">
	    				<ul>
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
	    				<input type="submit" value="提交" class="sign-in-button">
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
	var PH = true;
	var CV = true;

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
					$('input[name=phone]').next().text(' *√').css('color','green');
					$('input[name=phone]').css('border','solid 1px green');
					PH = true;
				} else {
					$('input[name=phone]').next().text(' *此手机号没有注册').css('color','#e53e41');
					$('input[name=phone]').css('border','solid 1px #e53e41');
					PH = false;
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
					$('input[name=phone]').next().text(' *√').css('color','green');
					$('input[name=phone]').css('border','solid 1px green');
					PH = true;
					// 发送ajax
					$.post('/home/checkphone',{number:phone},function(data){
						console.log(data);
					})
				} else {
					$('input[name=phone]').next().text(' *此手机号没有注册').css('color','#e53e41');
					$('input[name=phone]').css('border','solid 1px #e53e41');
					PH = false;
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


	$('#forms').submit(function(){

		$('input[name=code]').trigger('blur');
		$('input[name=phone]').trigger('blur');

		if(PH && CV){

			return true;
		} 
		//var flag = 1   var flag = 0
		return false;
	})


</script>
@endsection