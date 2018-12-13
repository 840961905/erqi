@extends('home.person.info.index')

@section('title',$title)


@section('content')
	<!-- 中间部分 -->
	<div class="wp">
		<div class="pannel account-panel">
			<div class="ptitle2 account_column">修改密码</div>
		    <div class="uc-account-des">用于登录和验证身份，同时也是您个人信息的一部分。如有更换，请及时更新。</div>
            <form action="/home/person/dochangepass" method="post">
            <div class="line" style="padding:0 20%">
				<p class="title" style="margin-top: 20px">原密码</p>
            	<div class="dinput-UI5" style="display:block;margin-bottom:10px;margin-top:10px;width: 300px;float:left;" id="forumnicknameBox">
            		<input type="password" name="yuanpass" >
            	</div>
            	<span style="float:right;margin-top: 25px;margin-right: 110px"></span>
            </div>
            <div style="clear: both;"></div>
            <div class="line" style="padding:0 20%">
				<p class="title" style="margin-top: 20px">新密码</p>
            	<div class="dinput-UI5" style="display:block;margin-bottom:10px;margin-top:10px;width: 300px;float:left;" id="forumnicknameBox">
            		<input type="password" name="password" >
            	</div>
            	<span style="float:right;margin-top: 25px;margin-right: 110px"></span>
            </div>
            <div style="clear: both;"></div>
            <div class="line" style="padding:0 20%">
				<p class="title" style="margin-top: 20px">确认新密码</p>
            	<div class="dinput-UI5" style="display:block;margin-bottom:10px;margin-top:10px;width: 300px;float:left;" id="forumnicknameBox">
            		<input type="password" name="repassword" >
            	</div>
            	<span style="float:right;margin-top: 25px;margin-right: 110px"></span>
            </div>
            <div style="clear: both;"></div>
            <div class="line" style="padding:0 20%">
            	<input style="" id="but" type="submit" class="btn" value="提交">
            </div>
		</div>

    {{csrf_field()}}
	</form>
</div>
@endsection

@section('script')

@endsection