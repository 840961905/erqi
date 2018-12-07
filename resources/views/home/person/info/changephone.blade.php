@extends('home.person.info.index')

@section('title',$title)


@section('content')
	<!-- 中间部分 -->
<form id="forms" action="/home/person/dochangephone" method="post">
	<div class="wp">
		<div class="pannel account-panel">
			<div class="ptitle2 account_column">修改手机</div>
		    <div class="uc-account-des">用于登录和验证身份，同时也是您个人信息的一部分。如有更换，请及时更新。</div>
            <div class="line" style="padding:0 20%">
				<p class="title" style="margin-top: 20px">新手机号：</p>
            	<div class="dinput-UI5" style="display:block;margin-bottom:10px;margin-top:10px;width: 300px;float:left;" id="forumnicknameBox">
            		<input type="text" name="phone">
            	</div>
            	<span style="float:right;margin-top: 25px;margin-right: 110px"></span>
            </div>
            <div style="clear: both;"></div>
            <div class="line" style="padding:0 20%">
				<p class="title" style="margin-top: 20px">验证码</p>
            	<div class="dinput-UI5" style="display:block;margin-bottom:10px;margin-top:10px;width: 300px;float:left;" id="forumnicknameBox">
            		<input type="text" name="code">
            	</div>
            	<input style="float:right;margin-top:15px" id="but" type="button" class="btn" value="获取验证码">
	    		<span style="float:right;margin-top: 25px;"></span>
            </div>
            <div style="clear: both;"></div>
            <div class="line" style="padding:0 20%">
            	<input style="" id="but" type="submit" class="btn" value="提交">
            </div>
		</div>
	</div>
    {{csrf_field()}}
</form>
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

			$(this).parent().next().text(' *手机号不能为空').css('color','#e53e41');
			$(this).css('border','solid 1px #e53e41');

			PH = false;

			return;
		}

		var reg = /^1[3456789]\d{9}$/;

		if(!reg.test(phv)){

			$(this).parent().next().text(' *手机号格式不正确').css('color','#e53e41');
			$(this).css('border','solid 1px #e53e41');

			PH = false;
		} else {
			$.post('/home/checkrephone',{phone:phv},function(data){
				if (data == '1') {
					$('input[name=phone]').parent().next().text(' *手机已被注册').css('color','#e53e41');
					$('input[name=phone]').css('border','solid 1px #e53e41');
					PH = false;
				} else {
					$('input[name=phone]').parent().next().text(' *√').css('color','green');
					$('input[name=phone]').css('border','solid 0px');
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

			$('input[name=phone]').parent().next().text(' *手机号不能为空').css('color','#e53e41');
			$('input[name=phone]').css('border','solid 1px #e53e41');

			PH = false;

			return;
		}

		var reg = /^1[3456789]\d{9}$/;

		if(!reg.test(phv)){

			$('input[name=phone]').parent().next().text(' *手机号格式不正确').css('color','#e53e41');
			$('input[name=phone]').css('border','solid 1px #e53e41');
			PH = false;
		} else {
			$.post('/home/checkrephone',{phone:phv},function(data){
				if (data == '1') {
					$('input[name=phone]').parent().next().text(' *手机已被注册').css('color','#e53e41');
					$('input[name=phone]').css('border','solid 1px #e53e41');
					PH = false;
				} else {
					$('input[name=phone]').parent().next().text(' *√').css('color','green');
					$('input[name=phone]').css('border','solid 0px');
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
			$(this).parent().next().next().text(' *验证码不能为空').css('color','#e53e41');

			$(this).css('border','solid 1px #e53e41');

			CV = false;
			return;
		}

		var cs = $(this);
		//发送ajax
		$.post('/home/checkcode',{code:cd},function(data){
			console.log(data);
			if(data == '0'){

				cs.parent().next().next().text(' *验证码不正确').css('color','#e53e41');

				cs.css('border','solid 1px #e53e41');

				CV = false;
			} else {

				cs.parent().next().next().text(' *√').css('color','green');

				cs.css('border','solid 0px');

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