<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>

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
</head>
<body>
    <!-- 导航 -->
    <!-- 导航顶部 -->
    <div class="container-fluid " style="padding: 0px;">
        <div class="container"style="margin-bottom: 30px;">
            <div class="row"style="line-height: 30px;">
                <div class="col-md-8" style="padding: 0px;">
                    <ul class="ul1">
                        <li><a href="/">首页</a>|</li>
                        <li><a href="/">三加一官网</a>|</li>
                        <li><a href="/">荣耀官网</a>|</li>
                        <li><a href="/">花粉俱乐部</a>|</li>
                        <li><a href="/">帮助中心</a>|</li>
                        <li><a href="/">V码(优购码)</a>|</li>
                        <li><a href="/">企业购</a>|</li>
                        <li><a href="/">Select Region</a>|</li>
                        <li><a href="/">下载APP</a>|</li>
                        <li><a href="/">更多精彩</a></li>
                    </ul>
                </div>

                <div class="col-md-3 col-md-offset-1 hidden-xs hidden-md gongneng" style="padding: 0px;">
                    <ul class="ul2">
                        <li><a href="/home/login">请登录</a>|</li>
                        <li><a href="/home/zhuce">注册</a>|</li>
                        <li>
                            <i class="iconfont icon-shopshoppingco"></i>
                            <a di="gouwu" href="" id="gwc">购物车
                            <div class="shop shopcang "></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- 导航顶部结束 -->

    <!-- 导航第二部分 -->
    <div class="container">
        <div class="row">
            <div class="col-md-2 top-0" style="padding: 0;">
                <img src="/home/images/log1.png" alt="">
            </div>
            <div class="col-md-5 top-1"style='padding: 0;'>
                <a href="/">三加一专区</a>
                <a href="/">荣耀专区</a>
                <a href="/">HUAWEI P20</a>
                <a href="/">荣耀10</a>
                <a href="/">nova 3i</a>
                <a href="/">荣耀V10</a>
            </div>
        </div>
    </div>
    <!-- 第二部分结束 -->
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
     <!-- 页尾部 -->
    <div class="container-fluid footer">
        <div class="kuo">
            <!-- 第一行 -->
            <div class="row onerow" >
                <div class="col-md-3"><i class="iconfont icon-jiangpai"></i><a href="" style="height: 38px;">百强企业 质量保证</a></div>
                <div class="col-md-3"><i class="iconfont icon-rili"></i><a href="" >7天退货 15天换货</a></div>
                <div class="col-md-3"><i class="iconfont icon-liwu"></i><a href="">48元免费起运</a></div>
                <div class="col-md-3"><i class="iconfont icon-dingwei"></i><a href="">448家维修网点 全国联保</a></div>
            </div>
            <!-- 第一行结束 -->
            
            <!-- 第二行 -->
            <div class="row onetwo">
                <div class="col-md-1 d1 v1" >
                    <ul >
                        <li><img src="/home/images/hengxian.png" alt=""></li>
                        <li><p>购物相关</p></li>
                        <li><a id="ah" href="/">购物指南</a></li>
                        <li><a id="ah" href="/">配送方式</a></li>
                        <li><a id="ah" href="/">支付方式</a></li>
                        <li><a id="ah" href="/">常见问题</a></li>
                    </ul>
                </div>
                <div class="col-md-1 d1 v2" >
                    <ul>
                        <li><img src="/home/images/hengxian.png" alt=""></li>
                        <li><p>保修与退货</p></li>
                        <li><a id="ah" href="/">保修政策</a></li>
                        <li><a id="ah" href="/">退换货政策</a></li>
                        <li><a id="ah" href="/">退换货流程</a></li>
                        <li><a id="ah" href="/">保修状态查询</a></li>
                        <li><a id="ah" href="/">配件防伪查询</a></li>
                    </ul>
                </div>
                <div class="col-md-1 d1 v3" >
                    <ul>
                        <li><img src="/home/images/hengxian.png" alt=""></li>
                        <li><p>维修与技术支持</p></li>
                        <li><a id="ah" href="/">售后网点</a></li>
                        <li><a id="ah" href="/">预约维修</a></li>
                        <li><a id="ah" href="/">手机寄修</a></li>
                        <li><a id="ah" href="/">备件价格查询</a></li>
                        <li><a id="ah" href="/">上门服务</a></li>
                    </ul>

                </div>
                <div class="col-md-1 d1 v4" >
                    <ul>
                        <li><img src="/home/images/hengxian.png" alt=""></li>
                        <li><p>关于我们</p></li>
                        <li><a id="ah" href="/">公司介绍</a></li>
                        <li><a id="ah" href="/">三加一商城简介</a></li>
                        <li><a id="ah" href="/">三加一线下门店</a></li>
                        <li><a id="ah" href="/">荣耀线下门店</a></li>
                        <li><a id="ah" href="/">诚征英才</a></li>
                    </ul>
                </div>
                <div class="col-md-1 d1 v5" >
                    <ul>
                        <li><img src="/home/images/hengxian.png" alt=""></li>
                        <li><p>关注我们</p></li>
                        <li><a id="ah" href="/">新浪微博</a></li>
                        <li><a id="ah" href="/">腾讯微博</a></li>
                        <li><a id="ah" href="/">花粉俱乐部</a></li>
                    </ul>
                </div>
                <div class="col-md-1 d1 v6">
                    <ul>
                        <li><img src="/home/images/hengxian.png" alt=""></li>
                        <li><p>友情链接</p></li>
                        <li><a id="ah" href="/">三加一集团</a></li>
                        <li><a id="ah" href="/">三加一CBG官网</a></li>
                        <li><a id="ah" href="/">荣耀官网</a></li>
                        <li><a id="ah" href="/">花粉俱乐部</a></li>
                        <li><a id="ah" href="/">网站地图</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-md-offset-3 d1 v7" style="border: red">
                        <li><img src="/home/images/hengxian.png" alt=""></li>
                        <p>400-088-6888</p>
                        <h4>24小时客服热线(仅收市话费)</h4>
                        <div class="bj">
                            <i class="iconfont icon-xinxi"></i><a href="">在线客服</a>
                        </div>
                </div>       
            </div>
        </div>

       
    </div>
    <div class="container-fluid zuibottom">
            <div class="fengyin">
                <div class="row d1">
                    <div class="col-md-1 jieshu1" ><a href=""> <img src="/home/images/flogo.png" alt=""></a></div>
                    <div class="col-md-6 " >
                        <div class="row nei1" style="margin-top: 20px;">
                            <a href="">隐私声明</a>
                            <a href="">服务协议</a>
                            <span>Copyright@ 2012-2018 三加一软件技术有限公司 版权所有 保留一切权利</span>
                        </div>
                        <div class="row nei2">
                            <span>公安备案</span>
                            <a href="">苏公安网安备320111402010009号</a>
                            <span>|</span>
                            <a href="">苏ICP备170430376</a>
                            <span>|</span>
                            <span>增值电信业务经营许可证:苏B2-20130048号 |</span>
                        </div>
                    </div>
                    <div class="col-md-4 jeishu666"style="padding-top:30px;padding-left:100px;margin-left:70px;">
                        <a href="http://"><img src="/home/images/dibu1.jpg" alt=""></a> 
                        <a href=""><img src="/home/images/dibu2.png" alt="" style="width: 70px;"></a> 
                        <a href=""> <img src="/home/images/dibu3.png" alt="" style="width: 70px;"></a>  
                        <a href=""><img src="/home/images/dibu4.png" alt=""></a> 
                    </div>
                </div>
            </div>
    </div>
     <!-- 页尾部结束 -->