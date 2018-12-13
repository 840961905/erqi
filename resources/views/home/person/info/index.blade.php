
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="renderer" content="webkit" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
@section('css')


<link href="/home/css/personinfo4.css" rel="stylesheet" type="text/css"> 

<link href="/home/css/personinfo1.css" rel="stylesheet" type="text/css"> 
<link href="/home/css/personinfo2.css" rel="stylesheet" type="text/css"> 
<link href="/home/css/personinfo3.css" rel="stylesheet" type="text/css">

<script src="/home/js/jquery-3.2.1.min.js"></script>
@show
</head>

<body class="userCenter-ucInfo">
	@if(session('success'))
		<script>
    	
			alert("{{session('success')}}");
		</script>
    @endif

    @if(session('error'))
		<script>
    	
			alert("{{session('error')}}");
		</script>
    @endif
	<div class="topbar1" >
		<div class="tp wp mkcl">
			<div class="childLogo1">
				<!-- logo -->
			    <span class="s1" > <div class="main-logo"> 
			     	<img src="/homes/img/head-top.png"/> </div>
			    </span>
			</div>
			<div class="tbr1">	
				<div class="profile"><img class="profilePic" src="{{session('img')}}" width="24px" height="24px"></div>
				<a class="account userAccount space-pre" href="/home/person/info">{{session('phone')}}</a>
				<span> | </span>
				<a id="logoutUrl" href="/home/logout">退出</a>
			</div>
			<div class="left1"> 
				<p  class="s2"><span>|</span>
			  <span class="logo_text1">帐号中心</span></p>
			</div>
			
		</div>					
	</div>
	<div id="showSupportInfo" style="display:none;"></div>
	
	<div class="menu wp mkcl">
		<div class="mnr">
			<ul class="nav mkcl">
				<li data-menu="1" class="sel">
				<a href="/home/person/info">帐号与安全</a>				
				</li>
				<li data-menu="4" class=""  id="setting_btn"><a href="">设置</a></li>
			</ul>
			<b class="navsign" style="display:none"></b>
		</div>
	</div>
	<!-- 中间部分 -->
@section('content')
	<div class="wp">
		<div class="pannel account-panel">
			<div class="ptitle2 account_column">帐号</div>
		    <div class="uc-account-des">用于登录和验证身份，同时也是您个人信息的一部分。如有更换，请及时更新。</div>
                <div class="line">
	             <div class="uctb mkcl">
			            <div class="r">
							<label for="">
								<a href="/home/person/changephone">
								<span id="cpsw" class="btn completeInfo">更换</span>
								</a>
							</label>		           
			            </div>
		            <img class="l" src="/homes/img/phonelogo.png">
		            <div class="detail">
			         <p class="dtop">手机号 
				         <span class="userAcctColor" id="phoneExp_0">{{session('phone')}}</span>
			         </p>
		            </div>
	             </div>
               </div>
                  <div class="line">
				   <div class="uctb mkcl">
						<div class="r">
							<label for="">
								<a href="/home/person/changeemail">
								<span id="cpsw" class="btn completeInfo">修改</span>
								</a>
							</label>
						</div>
						<img class="l" src="/homes/img/Emaillogo.png">
						<div class="detail">
							<p class="dtop">邮件地址 <span class="userAcctColor" id="emailVal_" anonyaccount=""> </span> 
							<span>{{session('email')}}</span></p>
							
						</div>
				  </div>
			    </div>

			<div class="line">
				<div class="uctb mkcl">
					<div class="r">
						<label for="">
							<a href="/home/person/changepass">
								<span id="cpsw" class="btn completeInfo">修改</span>
							</a>
						</label>
					</div>
					<img class="l" src="/homes/img/modify.png">
					<div class="detail">
						<p class="dtop modifyPwd">修改密码</p>
					</div>	
				</div>
			</div>

			<div class="line">
				<div class="uctb mkcl">
					<div class="r">
						<label for="">
							<a href="/home/person/changeimg">
								<span id="cpsw" class="btn completeInfo">修改</span>
							</a>
						</label>
					</div>
					<img class="l" src="{{session('img')}}" width="36px" height="36px">
					<div class="detail">
						<p class="dtop modifyPwd">修改头像</p>
					</div>	
				</div>
			</div>
		</div>
@show
<!-- 底部  -->
	<div class="wp ft">
		<p>
			<a href="" class="rule" target="_blank">三加一帐号用户协议</a>
			<em class="foot_em">|</em>
			<a href="" class="rule" target="_blank">关于三加一帐号与隐私的声明</a>
			<em class="foot_em">|</em>
			<a href="" class="ifaq" target="_blank">常见问题</a>
		</p>
		<p>Copyright © 2011-2018    三加一技术有限公司   版权所有   保留一切权利&nbsp;&nbsp;苏B2-20070200号           |           苏ICP备09062682号-9</p>
		<p></p>
	</div>
</body>
@section('script')
@show
</html>