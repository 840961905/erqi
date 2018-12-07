@extends('home.person.info.index')

@section('title',$title)


@section('content')
	<!-- 中间部分 -->
	<div class="wp">
		<div class="pannel account-panel">
			<div class="ptitle2 account_column">修改密码</div>
		    <div class="uc-account-des">用于登录和验证身份，同时也是您个人信息的一部分。如有更换，请及时更新。</div>
            <form action="/home/person/dochangepass">

            <div class="line">
            </div>
            <div class="line">
			</div>
			<div class="line">
			</div>
		</div>
	</form>
</div>
@endsection

@section('script')

@endsection