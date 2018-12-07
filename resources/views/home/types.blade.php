<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$title}}</title>
	<link rel="stylesheet" href="/homes/shop/index.css">
	<link rel="stylesheet" href="/homes/css/shop2.css">
	<link rel="stylesheet" href="/homes/css/shop1.css">
	<link rel="stylesheet" href="/homes/shop/ec.core.base.min.css">
	<script src='/homes/shop/jquery.min.js'></script>
	<script src='/homes/shop/index.js'></script>
	<script type="text/javascript" src="/homes/shop/jquery-1.4.2.min.js"></script>
    
</head>
<body>
	<!-- 顶部 -->
	<div class="shortcut">
	    <div class="layout">
	        <div class="s-sub">
	            <ul>
	                <li>
	                    <a href="https://www.vmall.com" onclick="pushHeaderMsg('首页','https://www.vmall.com')">
	                        首页
	                    </a>
	                </li>
	                <li>
	                    <a href="http://consumer.huawei.com/cn/" target="_blank" onclick="pushHeaderMsg('华为官网','http://consumer.huawei.com/cn/')">
	                        华为官网
	                    </a>
	                </li>
	                <li>
	                    <a href="http://www.honor.cn/" target="_blank" onclick="pushHeaderMsg('荣耀官网','http://www.honor.cn/')">
	                        荣耀官网
	                    </a>
	                </li>
	                <li>
	                    <a href="http://club.huawei.com" target="_blank" onclick="pushHeaderMsg('花粉俱乐部','http://club.huawei.com')">
	                        花粉俱乐部
	                    </a>
	                </li>
	                <li>
	                    <a href="javascript:;" rel="nofollow" onclick="pushHeaderMsgPriority('V码(优购码)','https://www.vmall.com/priority')">
	                        V码(优购码)
	                    </a>
	                </li>
	                <li>
	                    <a href="/company" target="_blank">
	                        企业购
	                    </a>
	                </li>
	                <li class="s-hwep hide" id="li-enterprise-preferential">
	                </li>
	                <li>
	                    <a href="javascript:;" onclick="showSelectRegion();pushHeaderMsg('Select Region','')">
	                        Select Region
	                    </a>
	                </li>
	            </ul>
	        </div>
	        <div class="s-main ">
	            <img src="https://res.vmallres.com/20181122/images/echannel/bg/bg71.png"
	            class="hide">
	            <ul>
	                <li id="unlogin_status">
	                    <div id="top_unlogin" class="header-toolbar">
	                        <!-- 2017-02-15-头部-工具栏-焦点为header-toolbar-item增加ClassName:hover -->
	                        <div class="header-toolbar-item">
	                            <div class="i-login">
	                                <div class="h">
	                                    <div class="">
	                                        <script>
	                                            document.write('<a id="top-index-loginUrl" href="javascript:;" rel="nofollow" onclick="pushLoginMsgInfoPerson(\'登录\',\'\')">请登录</a>');
	                                        </script>
	                                        
	                                        <a href="https://hwid1.vmall.com/CAS/portal/userRegister/regbyphone.html?service=https://www.vmall.com/account/caslogin&amp;loginChannel=26000000&amp;reqClientType=26&amp;lang=zh-cn"
	                                        rel="nofollow" onclick="pushLoginMsg('注册','')">
	                                            &nbsp;&nbsp;注册
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </li>
	                <li id="login_status" class="hide">
	                    <div id="top_login" class="header-toolbar hide">
	                        <div class="s-dropdown">
	                            <div class="h h-wide" id="up_loginName-hover">
	                                <a class="icon-dropdown" href="https://www.vmall.com/member?t=1543840806104"
	                                rel="nofollow" target="_blank" onclick="pushLoginMsg('已登录','用户名')">
	                                    <span id="up_loginName">
	                                    </span>
	                                </a>
	                                &nbsp;
	                            </div>
	                            <div class="b">
	                                <!-- 2017-06-19-个人信息-start -->
	                                <div class="dropdown-i-mall">
	                                    <div class="i-mall-prompt clearfix">
	                                        <div class="user-head fl">
	                                            <div class="user-canvas ">
	                                                <span id="user-vip-level-tips" class="icon-vip-level-0">
	                                                </span>
	                                                <div class="canvas-bg">
	                                                    <div class="canvas-left">
	                                                        <div id="canvas-left" style="transform: rotateZ(-121deg);">
	                                                        </div>
	                                                    </div>
	                                                    <div class="canvas-right">
	                                                        <div id="canvas-right">
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <img src="https://res.vmallres.com/20181122/images/echannel/bg/bg71.png"
	                                            class="user-img-shade">
	                                            <p class="user-img">
	                                                <a href="https://www.vmall.com/member?t=15438408061041543840907599" rel="nofollow"
	                                                timetype="timestamp" target="_blank" onclick="pushLoginMsg('已登录','头像')">
	                                                    <img id="customerPic" src="https://res.vmallres.com/20181122/images/echannel/misc/img_not_logged_in.png"
	                                                    alt="默认头像" imgpath="https://res.vmallres.com/20181122/images">
	                                                </a>
	                                            </p>
	                                        </div>
	                                        <div class="user-info fl">
	                                            <a href="https://www.vmall.com/member?t=1543840806104timestamp" rel="nofollow"
	                                            target="_blank" onclick="pushLoginMsg('已登录','用户名')">
	                                                <div class="user-info-name" id="up_loginName_info">
	                                                </div>
	                                            </a>
	                                            <div class="user-info-detail clearfix" id="vip-info">
	                                                <a id="authentication_y" class="icon-realname hide">
	                                                    已实名
	                                                </a>
	                                                <a id="authentication_n" href="https://www.vmall.com/authmember/accesstoken"
	                                                rel="nofollow" class="icon-realname disabled hide" onclick="pushLoginMsg('已登录','未实名')">
	                                                    未实名
	                                                </a>
	                                                <a class="icon-mail" href="https://www.vmall.com/member/msg?t=15438408061041543840907599"
	                                                rel="nofollow" timetype="timestamp" onclick="pushLoginMsg('已登录','消息中心')">
	                                                    消息中心
	                                                    <span id="top-newMsgCount" class="hide">
	                                                        0
	                                                    </span>
	                                                </a>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="i-mall-uc">
	                                        <dl class="clearfix">
	                                            <dt>
	                                                <span class="fl">
	                                                    我的订单
	                                                </span>
	                                                <a class="fr" href="https://www.vmall.com/member/order?t=15438408061041543840907599"
	                                                timetype="timestamp" onclick="pushLoginMsg('已登录','更多')">
	                                                    更多&gt;
	                                                </a>
	                                            </dt>
	                                        </dl>
	                                        <div class="i-mall-uc-con">
	                                            <dl class="clearfix">
	                                                <dd>
	                                                    <a href="javascript:;"
	                                                    timetype="timestamp" onclick="pushLoginMsg('已登录','待支付')">
	                                                        待支付
	                                                    </a>
	                                                </dd>
	                                                <dd>
	                                                    <a href="javascript:;"
	                                                    timetype="timestamp" onclick="pushLoginMsg('已登录','待收货')">
	                                                        待收货
	                                                    </a>
	                                                </dd>
	                                                <dd>
	                                                    <a href="javascript:;"
	                                                    timetype="timestamp" onclick="pushLoginMsg('已登录','待评价')">
	                                                        待评价
	                                                    </a>
	                                                </dd>
	                                                <dd>
	                                                    <a href="javascript:;" onclick="pushLoginMsg('已登录','退换货')">
	                                                        退换货
	                                                    </a>
	                                                </dd>
	                                                <dd>
	                                                    <a href="javascript:;"
	                                                    timetype="timestamp" onclick="pushLoginMsg('已登录','旧机回收')">
	                                                        旧机回收
	                                                    </a>
	                                                </dd>
	                                            </dl>
	                                        </div>
	                                    </div>
	                                    <div class="i-mall-huaban">
	                                        <ul class="clearfix">
	                                            <li>
	                                                <p class="p-img">
	                                                    <a href="javascript:;" onclick="pushLoginMsg('已登录','积分')">
	                                                        <span class="img01">
	                                                        </span>
	                                                    </a>
	                                                </p>
	                                                <p class="p-dec">
	                                                    积分
	                                                </p>
	                                                <p class="p-price">
	                                                    <span id="userPointBalance">
	                                                        --&nbsp;
	                                                    </span>
	                                                    分
	                                                </p>
	                                            </li>
	                                            <li>
	                                                <p class="p-img">
	                                                    <a href="https://www.vmall.com/member/coupon?t=1543840806104" rel="nofollow"
	                                                    target="_blank" onclick="pushLoginMsg('已登录','优惠券')">
	                                                        <span class="img02">
	                                                        </span>
	                                                    </a>
	                                                </p>
	                                                <p class="p-dec">
	                                                    优惠券
	                                                </p>
	                                                <p class="p-price">
	                                                    <span id="top-couponCount">
	                                                        --&nbsp;
	                                                    </span>
	                                                    张
	                                                </p>
	                                            </li>
	                                            <li>
	                                                <p class="p-img">
	                                                    <a href="https://www.vmall.com/member/balance?t=1543840806104" rel="nofollow"
	                                                    target="_blank" onclick="pushLoginMsg('已登录','代金券')">
	                                                        <span class="img03">
	                                                        </span>
	                                                    </a>
	                                                </p>
	                                                <p class="p-dec">
	                                                    代金券
	                                                </p>
	                                                <p class="p-price">
	                                                    <span id="balanceAmount">
	                                                        --&nbsp;
	                                                    </span>
	                                                    元
	                                                </p>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                    <div class="i-out">
	                                        <a href="https://www.vmall.com/account/logout" rel="nofollow">
	                                            退出登录
	                                        </a>
	                                    </div>
	                                </div>
	                                <!-- 2017-06-19-个人信息-end -->
	                            </div>
	                        </div>
	                    </div>
	                </li>
	                <!-- <li><a href="https://www.vmall.com/member/order?t=1543840806104timestamp" timeType="timestamp" onclick = "pushMyOrderMsg()">我的订单</a></li>-->
	                <li>
	                    <a href="javascript:;" timetype="timestamp" onclick="pushMyOrderMsg()">
	                        我的订单
	                    </a>
	                </li>
	                <li>
	                    <div class="s-dropdown s-dropdown-link">
	                        <div class="h">
	                            <a class="icon-dropdown">
	                                客户服务
	                            </a>
	                        </div>
	                        <div class="b">
	                            <div class="dropdown-more">
	                                <dl>
	                                    <dt>
	                                        <a href="https://www.vmall.com/help/index.html" target="_blank">
	                                            帮助中心
	                                        </a>
	                                    </dt>
	                                    <dt>
	                                        <a href="http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&amp;configID=10&amp;location=B_002&amp;chatfrom=web&amp;channelType=Vmall%e5%95%86%e5%9f%8e%e7%94%b5%e8%84%91%e7%ab%af"
	                                        target="_blank">
	                                            联系客服
	                                        </a>
	                                    </dt>
	                                </dl>
	                            </div>
	                        </div>
	                    </div>
	                </li>
	                <li>
	                    <div class="s-dropdown">
	                        <div class="h">
	                            <a href="#" target="_blank" class="icon-dropdown">
	                                网站导航
	                            </a>
	                        </div>
	                        <div class="b">
	                            <div class="dropdown-navs clearfix">
	                                <p>
	                                    <a href="https://www.vmall.com">
	                                    </a>
	                                </p>
	                                <div class="dropdown-navs-icon">
	                                    <a href="https://www.vmall.com">
	                                        商城首页
	                                    </a>
	                                </div>
	                                <p>
	                                    <br>
	                                </p>
	                                <dl>
	                                    <dt>
	                                        频道
	                                    </dt>
	                                    <dd>
	                                        <div class="item">
	                                            <a href="https://www.vmall.com/huawei" target="_blank">
	                                                华为专区
	                                            </a>
	                                        </div>
	                                        <div class="item">
	                                            <a href="https://www.vmall.com/honor" target="_blank">
	                                                荣耀专区
	                                            </a>
	                                        </div>
	                                        <div class="item">
	                                            <a href="http://company.vmall.com/client.html" target="_blank">
	                                                企业购
	                                            </a>
	                                        </div>
	                                    </dd>
	                                </dl>
	                                <dl>
	                                    <dt>
	                                        产品
	                                    </dt>
	                                    <dd>
	                                        <div class="item">
	                                            <a href="https://www.vmall.com/list-36" target="_blank">
	                                                手机
	                                            </a>
	                                        </div>
	                                        <div class="item">
	                                            <a href="https://www.vmall.com/list-43" target="_blank">
	                                                智能家居
	                                            </a>
	                                        </div>
	                                        <div class="item">
	                                            <a href="https://www.vmall.com/list-40" target="_blank">
	                                                平板&amp;笔记本
	                                            </a>
	                                        </div>
	                                        <div class="item">
	                                            <a href="https://www.vmall.com/list-54" target="_blank">
	                                                通用配件
	                                            </a>
	                                        </div>
	                                        <div class="item">
	                                            <a href="https://www.vmall.com/list-59" target="_blank">
	                                                智能穿戴
	                                            </a>
	                                        </div>
	                                        <div class="item">
	                                            <a href="https://www.vmall.com/list-47" target="_blank">
	                                                专属配件
	                                            </a>
	                                        </div>
	                                    </dd>
	                                </dl>
	                                <dl>
	                                    <dt>
	                                        增值服务
	                                    </dt>
	                                    <dd>
	                                        <div class="item">
	                                            <a href="https://www.vmall.com/recycle" target="_blank">
	                                                以旧换新
	                                            </a>
	                                        </div>
	                                        <div class="item">
	                                            <a href="https://www.vmall.com/product/10086344499475.html#10086230774569"
	                                            target="_blank">
	                                                礼品包装
	                                            </a>
	                                        </div>
	                                        <div class="item">
	                                            <a href="https://www.vmall.com/order/tcsProductIndex" target="_blank">
	                                                补购保障
	                                            </a>
	                                        </div>
	                                    </dd>
	                                </dl>
	                                <dl>
	                                    <dt>
	                                        会员
	                                    </dt>
	                                    <dd>
	                                        <div class="item">
	                                            <a href="https://www.vmall.com/privilege" target="_blank">
	                                                会员频道
	                                            </a>
	                                        </div>
	                                    </dd>
	                                </dl>
	                            </div>
	                        </div>
	                    </div>
	                </li>
	                <li class="downloadApp">
	                    <div class="s-dropdown">
	                        <div class="h">
	                            <a class="icon-dropdown">
	                                手机版
	                            </a>
	                        </div>
	                        <div class="b">
	                            <div class="dropdown-code">
	                                <div class="clearfix dropdown-code-detail">
	                                    <a href="https://www.vmall.com/appdownload" target="_blank" onclick="pushHeaderMsg('下载客户端img','https://www.vmall.com/appdownload')">
	                                        <img src="https://res.vmallres.com/pimages//sale/2018-12/7C2wVZ9IJnVbMLzAFd4m.png"
	                                        class="code-img">
	                                    </a>
	                                    <div class="code-info">
	                                        <h2>
	                                            华为商城APP
	                                        </h2>
	                                        <p class="red">
	                                            新人专享好礼
	                                            <br>
	                                            最高获5000积分
	                                        </p>
	                                        <span class="icon-andrid">
	                                        </span>
	                                    </div>
	                                </div>
	                                <div class="clearfix dropdown-code-detail">
	                                    <a>
	                                        <img src="https://res.vmallres.com/pimages//sale/2018-10/20181029165608251.png"
	                                        class="code-img">
	                                    </a>
	                                    <div class="code-info">
	                                        <h2>
	                                            华为商城公众号
	                                        </h2>
	                                        <p>
	                                            微信扫一扫
	                                        </p>
	                                        <span class="icon-wechat">
	                                        </span>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </li>
	                <li>
	                    <div class="s-dropdown s-dropdown-minicart">
	                        <div class="h h-wide" id="header-toolbar-minicart">
	                            <a href="/cart2?t=15438408061041543840907599" class="icon-minicart" rel="nofollow"
	                            timetype="timestamp" target="blank" onclick="pushMyCartMsg()">
	                                <span>
	                                    购物车(
	                                    <span id="header-cart-total">
	                                        0
	                                    </span>
	                                    )
	                                </span>
	                            </a>
	                        </div>
	                        <div class="b" id="header-toolbar-minicart-content">
	                            <!-- 2017-06-19-迷你购物车-start -->
	                            <div class="dropdown-minicart">
	                                <div class="minicart-pro-empty minicart-pro-empty-index" id="minicart-pro-empty">
	                                    <p>
	                                        <span class="icon-minicart">
	                                        </span>
	                                    </p>
	                                    <p id="cartInfo">
	                                        您的购物车是空的，赶紧选购吧~
	                                    </p>
	                                </div>
	                                <div class="minicart-pro-list minicart-pro-list-scroll hide" id="minicart-pro-list-block"
	                                style="display: none;">
	                                    <ul class="minicart-pro-list" id="minicart-goods-list">
	                                    </ul>
	                                    <div class="minicart-pro-settleup" id="minicart-pro-settleup" style="display: none;">
	                                        <p>
	                                            <span>
	                                                总计：
	                                            </span>
	                                            <span>
	                                                <b id="micro-cart-totalPrice">
	                                                    ¥&nbsp;0
	                                                </b>
	                                                <s id="micro-cart-totalOriginPrice">
	                                                    ¥&nbsp;0
	                                                </s>
	                                            </span>
	                                        </p>
	                                        <a class="button-minicart" id="button-minicart-go2confirm" href="javascript:;"
	                                        onclick="ec.minicart.confirm()" style="display: none;">
	                                            结算
	                                        </a>
	                                        <a class="button-minicart disabled" id="disbutton-minicart-go2confirm"
	                                        style="">
	                                            结算
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                            <!-- 2017-06-19-迷你购物车-end -->
	                        </div>
	                    </div>
	                </li>
	            </ul>
	        </div>
	    </div>
	</div>
	<!-- 头部 -->
	<div class="header">
	    <div class="layout">
	        <div class="left">
	            <!-- 2017-02-15-logo-start -->
	            <div class="logo"><a href="https://www.vmall.com/index.html" title="Vmall.com - 华为商城" onclick="pushLogoClickMsg('https://res.vmallres.com/pimages//sale/2018-11/x9a6U8WW0bhrA7u0FIlY.png','https://www.vmall.com/index.html')"><img src="https://res.vmallres.com/pimages//sale/2018-11/x9a6U8WW0bhrA7u0FIlY.png" alt="Vmall.com - 华为商城"></a></div>
	            <!-- 2017-02-15-logo-end -->
	            
	            <!-- 2017-06-19-导航-start --> 
	                <div class="naver">
	                <ul id="naver" class="clearfix">
	    	    		    <li id="zxnav_0" data-id="0">
	        					<a href="/list-36" target="_blank"><span>手机</span></a>
	        					<input id="zxnav_0_flag" type="hidden" autocomplete="off" value="yes">
								<input id="zxnav_0_name" type="hidden" autocomplete="off" value="手机">
	        				</li>
	    					<li id="zxnav_1" data-id="1">
	        					<a href="/list-40" target="_blank"><span>笔记本 &amp; 平板</span></a>
	        					<input id="zxnav_1_flag" type="hidden" autocomplete="off" value="yes">
								<input id="zxnav_1_name" type="hidden" autocomplete="off" value="笔记本 &amp; 平板">
	        				</li>
	    					<li id="zxnav_2" data-id="2">
	        					<a href="/list-59" target="_blank"><span>智能穿戴</span></a>
	        					<input id="zxnav_2_flag" type="hidden" autocomplete="off" value="yes">
								<input id="zxnav_2_name" type="hidden" autocomplete="off" value="智能穿戴">
	        				</li>
	    					<li id="zxnav_3" data-id="3">
	        					<a href="/list-43" target="_blank"><span>智能家居</span></a>
	        					<input id="zxnav_3_flag" type="hidden" autocomplete="off" value="yes">
								<input id="zxnav_3_name" type="hidden" autocomplete="off" value="智能家居">
	        				</li>
	    					<li id="zxnav_4" data-id="4">
	        					<a href="/list-54" target="_blank"><span>通用配件</span></a>
	        					<input id="zxnav_4_flag" type="hidden" autocomplete="off" value="yes">
								<input id="zxnav_4_name" type="hidden" autocomplete="off" value="通用配件">
	        				</li>
	    					<li id="zxnav_5" data-id="5">
	        					<a href="/list-47" target="_blank"><span>专属配件</span></a>
	        					<input id="zxnav_5_flag" type="hidden" autocomplete="off" value="yes">
								<input id="zxnav_5_name" type="hidden" autocomplete="off" value="专属配件">
	        				</li>
			    </ul>
			</div>
			<div class="naver-sub">
			        <div id="naverSub01" class="naver-sub-wrap hide" style="display: none;">
			            <div class="p-title clearfix">
			                <div class="s1 fl">
			                    <a href="/list-40" target="_blank" class="">全部笔记本 &amp; 平板&gt;</a>
			                </div>
			                <div class="s2 fl clearfix">
								<input id="child_name" type="hidden" value="平板电脑">
								<input id="child_status" type="hidden" value="1">
								<input id="child_type" type="hidden" value="1">
								<a href="/list-41" target="_blank" class="fl">平板电脑</a> 	
								<input id="child_name" type="hidden" value="笔记本电脑">
								<input id="child_status" type="hidden" value="1">
								<input id="child_type" type="hidden" value="1">
								<a href="/list-42" target="_blank" class="fl">笔记本电脑</a> 	
								<input id="child_name" type="hidden" value="笔记本配件">
								<input id="child_status" type="hidden" value="1">
								<input id="child_type" type="hidden" value="1">
								<a href="/list-317" target="_blank" class="fl">笔记本配件</a> 	
			                </div>
			                <!--<div class="s3 fr"><a href="javascript:;" target="_blank"> 查看全部 ></a></div>-->
			            </div>
			            
			            <ul id="zxnav_1_prolist" class="grid-list clearfix">
			            	<li class="grid-items" onmouseenter="fixCurrent(this)" onmouseleave="leaveCurrent(this)">     
			            		<a class="thumb" target="_blank" href="/product/10086000689735.html">        
			            		 <p class="grid-img">             
			            			<img alt="" src="https://res.vmallres.com/pimages//product/6901443227792/142_142_1539915415114mp.png">          
			            		</p>          
			            			<div class="grid-title">HUAWEI MateBook X Pro</div>         
			            	        <p class="grid-price">¥7888</p>     
			            	    </a> 
			            	</li>
			            </ul>
			            <input id="zxnav_1_skuIds" type="hidden" value="10086514290855,10086165908070,10086612323957,10086466203116,777872533,887012722,10086567817541,">
			        </div>
			</div>
			<script>
				function pushNaverCategoryMsg(index,url)
				{
					var skuids = $("#zxnav_"+index+"_skuIds").val().split(",");
					var skuid = skuids[index]; 
					var value = {
						"UID":ec.util.cookie.get("uid"),
						"TID":getPtid(),
						"TIME":getTime(),
						"CONTENT":
			    		{
						"SKUID":skuid,
			  			"URL":url,
			  			"click":"1"
			  			}
					};
					ec.code.addAnalytics({hicloud:true});
					_paq.push(["trackLink","300020202", "link", value]);
				}
	        </script>
	        <div class="right">
	            <!-- 2017-02-15-搜索条-焦点为search-form增加className:hover -start -->
	            <div class="search-bar relative" id="searchBar-area">
	                <div class="search-bar-form" id="search-bar-form">
	                   <form method="get" onsubmit="return search(this)">
	                        <input type="text" class="text" maxlength="200" id="search-kw" autocomplete="off">
	                        <input type="submit" class="button" value="搜索">
	                            <input type="hidden" id="channelType" name="channelType" value="0">
	                        <input type="hidden" id="default-search" value="nova 3i|荣耀 Note10">
	                    </form>
	                </div>
	                <div class="search-bar-key" id="search-bar-key">
	                    <div class="searchBar-key">
	                        <a href="/search?keyword=荣耀Magic2" target="_blank" rel="nofollow">荣耀Magic2</a>
	                        <a href="/search?keyword=HUAWEI Mate 20" target="_blank" rel="nofollow">HUAWEI Mate 20</a>
	                      </div>
	                </div>
	                 <div id="search-history" class="search-bar-history hide">
	                	<p>
	                        <label>历史记录</label><span id="cleanUp" class="search-history-btn">清除</span>
	                    </p>
	                    <ul id="search-history-list"></ul>
	                </div>
	            <div id="AutocompleteContainter_b5ce4" "="" style="top: 94px; left: 953.5px;"><div class="autocomplete-w1"><div class="autocomplete" id="Autocomplete_b5ce4" style="display: none; width: 290px; max-height: 400px;"></div></div></div></div>
	            <!-- 2017-02-15-搜索条-end -->
	        </div>
	        </div>
	    </div>
    </div>
    
    <div class="hr-10"></div>
    <div class="g">
        <!--面包屑 -->
    	<div class="breadcrumb-area fcn">
    			<a href="/" title="首页">首页</a>&nbsp;&gt;&nbsp;
    		
    		<span>通用配件</span>
    	</div>
    </div>
    <div class="hr-10"></div>
    
    <!-- 分类导航 -->
    <div class="layout">
    	<!-- 20140726-商品类别-start -->
    	<div class="pro-cate-area">
    		<!-- 20140726-商品类别-属性-start -->
    		<div class="pro-cate-attr clearfix">
    			<div class="p-title">分类：</div>
    			<div class="p-default">
    				<ul>
    					@if($ding  == 1)
                        <li id="first-category" class="selected"><a href="/list-54">全部</a></li>
                        @else
                        <li id="first-category" ><a href="/list-54">全部</a></li>
                        @endif
    					<!--<li class="selected"><a href="javascript:;">全部</a></li>-->
    				</ul>
    			</div>
    			
    			<!-- 二级虚拟分类 -->
    			<div class="p-values">
    				<div class="p-operate" style="display: none;">
    					<!-- 追加ClassName： more-expand more-drop -->
    					<a href="javascript:;" onclick="ec.product.more(this)" class="more more-expand">更多<s></s></a>
    				</div>
    				<!-- 一行的高度为30px,显示n行，p-expand的高度为nx30 -->
    				<div class="p-expand">
    					<ul class="clearfix">	
    					    @foreach($fl as $k=>$vv)

    	                    <li><a href="/list-56">{{$vv->tname}}</a></li>
    	                    @endforeach
    					</ul>
    				</div>
    			</div>
    			
    		</div><!-- 20140726-商品类别-属性-end -->
    		
    		<!-- 20140726-商品类别-属性-start -->
            <!-- 20140726-商品类别-属性-end -->		
    		
    		<!-- 20140726-商品类别-排序-start -->
    		<div class="pro-cate-sort clearfix">
    			<div class="p-title">排序：</div>
    			<div class="p-values" style="margin-left:95px;">
    				<div class="p-expand">					
    					<ul class="clearfix">
    					    <!-- 升序选择（从低到高）： sort-asc selected   降序选择（从高到低）： sort-desc selected -->
    					    <li id="sort-3" class="sort-desc selected"><a href="javascript:;" class="sort-added" onclick="ec.product.sort('3')">上架时间<s></s></a></li>
    						<li id="sort-1"><a href="javascript:;" class="sort-price" onclick="ec.product.sort('1')">价格<s></s></a></li>
    						<li id="sort-2"><a href="javascript:;" class="sort-eval" onclick="ec.product.sort('2')">评价数<s></s></a></li>
    					</ul>
    				</div>
    			</div>
    		</div><!-- 20140726-商品类别-排序-end -->
    		
    		<form id="listForm" method="post">
    			<input type="hidden" id="sortField" name="sortField" value="">
    			<input type="hidden" id="sortType" name="sortType" value="">
    			<input type="hidden" id="prdAttrList" name="prdAttrList" value="">
    		</form>
    		
    	</div><!-- 20140726-商品类别-end -->

    	<div class="hr-20"></div>
    </div>

    <!-- 分类商品 -->
    <div class="layout">
    	<!-- 20140726-频道-列表-start -->
        <div class="channel-list">
            <!-- 20140727-商品列表-start -->
    		<div class="pro-list clearfix">
    			<ul>
                    @foreach($goods as $k=>$v)
    				<li>
    					<div class="pro-panels">
    						<p class="p-img"><a target="_blank" href="/product/10086036065155.html" title="L型Type-c金属编织数据线" onclick="pushListProClickMsg('3102030007001')"><img alt="L型Type-c金属编织数据线" src="
                                  @php
                                    $tu = DB::table('goodsimg')->where('gid',$v->id)->first();
                                    echo $tu->gimg;
                                 @endphp

    							"></a></p>
    						<p class="p-name">
    							<a target="_blank" href="/product/10086036065155.html" title="L型Type-c金属编织数据线" onclick="pushListProClickMsg('3102030007001')">
    								<span>{{$v->gname}}</span>
    								<span class="red">为游戏而生</span>
    							</a>
    						</p>
    						<p class="p-price"><b>¥{{$v->price}}.00</b></p>
    						<div class="p-button clearfix">
    							<table colspan="0" border="0" rowspan="0">
    								<tbody>
    									<tr>
    										    <td><a target="_blank" href="/product/10086036065155.html" class="p-button-cart"><span>选购</span></a></td>
    										<td><label class="p-button-score"><span>867人评价</span></label></td>
    									</tr>
    								</tbody>
    							</table>
    						</div>
    						
    					</div>
    				</li>
    				@endforeach

    			</ul>
    		</div>
    		<!-- 20140727-商品列表-end -->
    		<!-- 分页-start -->
    		<div id="list-pager-54" class="pager">
    					<input id="pageTotal" value="7" type="hidden">
    				    <ul id="page_ul">
    						<li class="pgNext link first first-empty">|&lt;</li>
    						<li class="pgNext link pre pre-empty">&lt;</li>
    						
    							    <a id="page_1" href="list-54-1-3-0" title="第1页">
    									<li class="page-number link pgCurrent">1</li>									
    								</a>
    							    <a id="page_2" href="list-54-2-3-0" title="第2页">
    									<li class="page-number link">2</li>									
    								</a>
    							    <a id="page_3" href="list-54-3-3-0" title="第3页">
    									<li class="page-number link">3</li>									
    								</a>
    							    <a id="page_4" href="list-54-4-3-0" title="第4页">
    									<li class="page-number link">4</li>									
    								</a>
    							    <a id="page_5" href="list-54-5-3-0" title="第5页">
    									<li class="page-number link">5</li>									
    								</a>
    							    <a id="page_6" href="list-54-6-3-0" title="第6页">
    									<li class="page-number link">6</li>									
    								</a>
    							    <a id="page_7" href="list-54-7-3-0" title="第7页">
    									<li class="page-number link">7</li>									
    								</a>
    						<li class="pgNext link next">&gt;</li>
    						<li class="pgNext link last">&gt;|</li>
    						<li class="text quickPager"><select id="pageChecked"><option value="1" selected="">1</option><option value="2">2</option></select></li>
    					</ul>
    	    </div>
        </div><!-- 20140726-频道-列表-end -->
        
    </div>
</body>
</html>



