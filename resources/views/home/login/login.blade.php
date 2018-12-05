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

                @if(session('success'))
                <div class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button><li>{{session('success')}}</li>
                </div>
                @endif
				@if(session('error'))
                <div class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button><li>{{session('error')}}</li>
                </div>
                @endif
	    		<div class="Landbox">
	    			<h3 style="margin-top: 0px">
	    				<span>用户登录</span>
	    				<strong>没有账号？去
	                        <a href="/home/zhuce">注册</a>
	                    </strong>
	    			</h3>
	    			<form action="/home/dologin" method="post" id="forms">
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
	    							密码:
	    						</label>
	    						<em></em>
	    						<input type="password" class="Landboxinput password" size="35" name="password" id="password" placeholder="密码">
	    						<span id="password-msg" class="error"></span>
	    					</li>
	    				</ul>
	    				<a href="/home/lose" style="padding-left:300px">忘记密码？</a>
	    				<input type="submit" value="登录" class="sign-in-button" style="margin-top: 20px">
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

@endsection