@extends('home.person.info.index')

@section('title',$title)


@section('content')
	<!-- 中间部分 -->
<form id="forms" action="/home/person/dochangeemail" method="post">
	<div class="wp">
		<div class="pannel account-panel">
			<div class="ptitle2 account_column">修改邮箱</div>
		    <div class="uc-account-des">用于活动、通知、消息的下发，同时也是您个人信息的一部分。如有更换，请及时更新。</div>
            <div class="line" style="padding:0 20%">
				<p class="title" style="margin-top: 20px">邮箱</p>
            	<div class="dinput-UI5" style="display:block;margin-bottom:10px;margin-top:10px;width: 300px;float:left;" id="forumnicknameBox">
            		<input type="text" name="email" value="{{$email}}">
            	</div>
            	<span style="float:right;margin-top: 25px;margin-right: 110px"></span>
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

@endsection