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
	<script type="text/javascript" src="/homes/shop/jquery-3.2.1.min.js"></script>
   
    <style>
    	.shortcut {
    	    min-width: 1200px;
    	    line-height: 40px;
    	    
    	    font-family: "Helvetica Neue",Helvetica,Arial,"Microsoft Yahei","Hiragino Sans GB","Heiti SC","WenQuanYi Micro Hei",sans-serif;
    	    z-index: 411;
    	}
        
          .current img{
			    width: 100%;
			   
			    margin:auto auto;
		   }
		    .container {
			    width: 100%;
			}


			#move{
				width: 160px;
				height: 160px;
				position:absolute;
				left:0px;
				top:0px;
				background: url('/homes/img/fdj.png');
				display:none;

			}

			#big{
				width:400px;height: 400px;position:absolute;left:480px;top:0px;overflow:hidden;display:none;
			}

			#bigImg{
				position:absolute;

			}

		    .topbackdiv {
		        background: #000;
		        border: none;
		        height: 100%;
		        left: 0;
		        position: fixed;
		        top: 0;
		        width: 100%;
		        z-index: 10000001;
		        opacity: .6;
		        display: none;
		    }
		    
            .box-ct {
                display: none;
                border: 1px solid #cecece;
                visibility: visible;
			    position: fixed;
			    top: 200px;
			    left: 450px;
			    z-index:10000002;
            }

    </style>

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
    <!-- 面包屑 -->
    <div class="g">
    	<!--面包屑 -->
    	<div class="breadcrumb-area fcn"><a href="/" title="首页"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">首页</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> &nbsp;&gt;&nbsp; </font></font><a href="/list-36" title="手机"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">手机</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> &nbsp;&gt;&nbsp; </font></font><a href="/list-285" title="HUAWEI P系列"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">HUAWEI P系列</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> &nbsp;&gt;&nbsp;
     </font></font><span id="bread-pro-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">HUAWEI P20 Pro 6GB+128GB全网通版（极光闪蝶）</font></font></span></div>
    </div>

    <div class="hr-10"></div>
	<!-- 中间部分 -->
	<div class="product clearfix">
	    <div class="left">
	        <!-- 20170518-商品图片-start -->
	        <div class="product-gallery positionFixed" style="    position: relative">
	            <div class="relative">
	                <div class="product-gallery-img" id="pic-container">
	                    <div id="wrap" style="position:relative;">
	                        
	                        <div id='small' style="border:1px solid #ddd">
	                        	<img src="
                                 @php
                                   $tu = DB::table('goodsimg')->where('gid',$shops->id)->first();
                                   echo $tu->gimg;
                                @endphp
	                        	" alt="" id='smallImg' width='100%'><div id='move'></div>
	                        </div>

	                        <div id='big' style="border:1px solid #eee;">
	                        	<img src="
                                @php
                                   $tu = DB::table('goodsimg')->where('gid',$shops->id)->first();
                                   echo $tu->gimg;
                                @endphp
	                        	" alt="" id='bigImg'>
	                        </div>
	                    </div>
	                </div>
	               	
	            </div>
	            <div class="product-gallery-nav">
	                <a href="javascript:;" class="product-gallery-back" onclick="ec.product.imgSlider.prev()">
	                </a>
	                <!--不可点击添加class="disabled"-->
	                <div class="product-gallery-thumbs">
	                    <ul  style="left: 0px;" id="uls">
	                    	@foreach($shopimg as $k=>$v)
	                        <li class="current">
	                                <img src="{{$v->gimg}}"
	                                alt="HUAWEI P20 Pro 6GB+128GB 全网通版（极光闪蝶）">
	                        </li>
	                        @endforeach
	                    </ul>
	                </div>
	                <a href="javascript:;" class="product-gallery-forward" onclick="ec.product.imgSlider.next()">
	                </a>
	            </div>
	        </div>
	        <!-- 20170518-商品图片-end -->
	    </div>
	    <div class="right relative">
	        <div id="pro-add-success-mask" style="visibility:hidden;font-size:18px;width:348px;position: absolute;">
	        </div>
	        <div id="cart-tips" class="pro-popup-area hide">
	            <div class="b">
	                <div class="pro-add-success">
	                    <dl>
	                        <dt>
	                            <s>
	                            </s>
	                        </dt>
	                        <dd>
	                            <div class="box-right-2">
	                                <p>
	                                    HUAWEI P20 Pro
	                                </p>
	                            </div>
	                            <div class="box-button">
	                                <a class="box-cancel" href="javascript:;" onclick="$('#cart-tips').hide()">
	                                    再逛逛
	                                </a>
	                                <a href="javascript:;" class="box-ok" onclick="ec.product.gotoshoppingCart()">
	                                    去结算
	                                </a>
	                            </div>
	                            <!-- <p>HUAWEI P20 Pro</p>
	                            <div class="pro-add-success-msg">成功加入购物车!</div>
	                            <div class="pro-add-success-total">购物车中共&nbsp;<b id="cart-total">0</b>&nbsp;件商品，金额合计&nbsp;<b  id="cart-price">¥&nbsp;0</b></div>
	                            <div class="pro-add-success-button"><a href="javascript:;" class="button-style-1 button-go-cart" onclick="ec.product.gotoshoppingCart()">去结算</a><a class="button-style-4 button-walking" href="javascript:;" onclick="$('#cart-tips').hide()">继续逛逛&nbsp;>></a></div> -->
	                        </dd>
	                    </dl>
	                </div>
	            </div>
	        </div>
	        <!-- 20130913-弹出层-购买延保-start -->
	        <div id="popup-extend" class="pro-popup-area hide">
	            <div class="h">
	                <a href="javascript:;" class="pro-popup-close" title="关闭" onclick="$('#popup-extend').hide()">
	                    关闭
	                </a>
	            </div>
	            <div class="b">
	                <div class="pro-extend-area">
	                    <h3>
	                        购买延保
	                    </h3>
	                    <div class="pro-extend-search">
	                        <div class="form-edit-area">
	                            <form action="javascript:;" id="checkExtend-ID" onsubmit="return ec.product.checkExtend()">
	                                <input type="hidden" id="extendSkuId">
	                                <label style="display: block; position: absolute; cursor: text; float: left; z-index: 2; color: rgb(153, 153, 153);"
	                                class="text vam" for="extend-text">
	                                    输入IMEI/SN/MEID信息
	                                </label>
	                                <input type="text" class="text vam" id="extend-text" maxlength="50" style="z-index: 1;">
	                                <input class="button-style-4 button-extend-search vam" type="submit" value="查看可购买的延保">
	                            </form>
	                        </div>
	                    </div>
	                    <div class="pro-extend-result hide" id="pro-extend-result-id">
	                        <div id="extend-msg-succuss" class="hide">
	                        </div>
	                        <div id="extend-msg-error" class="hide">
	                        </div>
	                    </div>
	                    <div class="pro-extend-tips">
	                        温馨提示：IMEI/SN/MEID号可在产品外包装上找到，可拆卸电池的手机可将电池拆掉电池下面的标签上可以看到，手机上输入*#06#也可以显示。
	                    </div>
	                    <div class="pro-extend-button">
	                        <a id="button-extend" class="button-style-disabled-1 button-go-extend-checkout-disabled"
	                        href="javascript:;" title="提交订单" onclick="ec.product.extendBuy(this)">
	                            <span>
	                                提交订单
	                            </span>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- 20130913-弹出层-购买延保-end -->
	        <!--弹出层-提示信息 -->
	        <div id="popup-tips" class="pro-popup-area hide">
	            <div class="h">
	                <a href="javascript:;" class="pro-popup-close" title="关闭" onclick="$('#popup-tips').hide()">
	                    <span>
	                        关闭
	                    </span>
	                </a>
	            </div>
	            <div class="b">
	                <div class="pro-add-error">
	                    <div class="pro-add-error-msg" id="popup-tips-msg">
	                        非常抱歉！该商品不能单独销售！
	                    </div>
	                    <div class="pro-add-error-button">
	                        <a class="button-style-1 button-par-define" href="javascript:;" onclick="$('#popup-tips').hide()"
	                        title="知道了">
	                            知道了
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- 20170518-商品简介-start -->
	        <div class="product-property clearfix relative" style="min-height: 462px; height: auto; padding-bottom: 104px;">
	            <div id="product-property-recommand">
	                <!-- 20170518-商品简介-商品信息-start -->
	                <div class="product-meta">
	                    <h1 id="pro-name">
	                        {{$shops->gname}} {{$shops->size}}
	                    </h1>
	                    <input class="hide" value="10086587737324" id="product_sku">
	                    <input class="hide" value="10086471194207" id="product_productId">
	                    <div class="product-slogan" id="skuPromWord" style="display: -webkit-box;">
	                        <a href="javascript:;" class="product-slogan-btn" style="display: none;">
	                        </a>
	                        <a href="https://sale.vmall.com/p20.html" target="_blank" class="product-slogan-link">
	                            {{$shops->info}}
	                        </a>
	                    </div>
	                </div>
	                <div class="product-info">
	                    <div class="product-info-list clearfix">
	                        <label>
	                            价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格
	                        </label>
	                        <div class="product-price clearfix">
	                            <div class="product-price-info">
	                                <span id="pro-price-label" class="f24" style="display: none;">
	                                </span>
	                                <span id="pro-price" class="f24">
	                                    <em>
	                                        ¥
	                                    </em>
	                                    {{$shops->price}}.00
	                                </span>
	                                <input type="hidden" id="pro-price-hide" value="4988.00">
	                                <s id="pro-price-old" style="display: none;">
	                                </s>
	                                <b id="pro-price-label-deposit" style="display:none">
	                                    订金
	                                </b>
	                                <span id="pro-price-deposit" style="display:none">
	                                </span>
	                                <b id="pro-price-label-amount" style="display:none">
	                                    可抵
	                                </b>
	                                <span id="pro-price-amount" style="display:none">
	                                </span>
	                            </div>
	                        </div>
	                    </div>
	                    
	                </div>
	                <!-- 20180206-商品简介-end -->
	                <div class="hr-20">
	                </div>
	                <!-- 20170518-商品简介-服务说明-start -->
	                <div class="product-pulldown clearfix" id="product-pulldown1">
	                    <label>
	                        服务说明
	                    </label>
	                    <div class="fl">
	                        
	                        <div class="product-description clearfix" style="padding-top:6px;">
	                            <p>
	                                {{$shops->fwsm}}
	                            </p>
	                        </div>
	                    </div>
	                </div>
	                <!-- 20170518-商品简介-服务说明-end -->
	                <!-- 20171024-商品简介-商品编码-start -->
	                <div class="product-description clearfix">
	                    <label>
	                        商品编码
	                    </label>
	                    <div class="fl" id="pro-sku-code2">
	                       {{$shops->bianma}}
	                    </div>
	                </div>

	                <div class="product-description clearfix" style="margin-top:10px">
	                    <label>
	                        库存
	                    </label>
	                    <div class="fl" id="pro-sku-code2">
	                       {{$shops->stock}}&nbsp;件
	                    </div>
	                </div>
	                <!-- 20171024-商品简介-商品编码-end -->
	                <div class="hr-5">
	                </div>
	                <div class="line">
	                </div>
	                <div class="hr-16">
	                </div>
	                <div id="pro-skus" class="">
	                    <dl class="product-choose clearfix  product-choosepic">
	                        <label>
	                            选择颜色
	                        </label>
	                        <div class="product-choose-detail ">
	                            <ul>
	                                <li class="attr1 attr13" data-attrname="颜色" data-attrcode="152138" data-attrid="1,13"
	                                data-skuid="10086494227540,10086848967201">
	                                    <div class="sku">
	                                        <a href="javascript:;" title="亮黑色">
	                                            <img src="https://res.vmallres.com/pimages//product/6901443227907/40_40_1542767389853mp.png"
	                                            alt="亮黑色">
	                                            <p>
	                                                <span>
	                                                    亮黑色
	                                                </span>
	                                            </p>
	                                        </a>
	                                    </div>
	                                </li>
	                            </ul>
	                        </div>
	                    </dl>
	                    <dl class="product-choose clearfix ">
	                        <label>
	                            选择版本
	                        </label>
	                        <div class="product-choose-detail ">
	                            <ul>
	                                <li class="attr2 attr5 attr8 attr11 attr32 attr35" data-attrname="版本"
	                                data-attrcode="733605" data-attrid="2,5,8,11,32,35" data-skuid="10086494227540,10086987436893,10086224325503,10086658763429,10086349202441,10086295697080">
	                                    <div class="sku">
	                                        <a href="javascript:;" title="全网通 6GB+64GB">
	                                            <p>
	                                                <span>
	                                                    {{$shops->size}}
	                                                </span>
	                                            </p>
	                                        </a>
	                                    </div>
	                                </li>
	                            </ul>
	                        </div>
	                    </dl>
	                    
	                </div>
	           
	                <dl class="product-choose clearfix" id="giftBuy_dl">
	                    <label>
	                        增值业务
	                    </label>
	                    <div class="product-choose-detail">
	                        <ul>
	                            <li class="selected" data-attrname="无增值服务">
	                                <a href="javascript:;" title="无增值服务">
	                                    <p>
	                                        <span>
	                                            无增值服务
	                                        </span>
	                                    </p>
	                                </a>
	                            </li>
	                            <li class="" data-skuid="10086230774569">
	                                <a href="javascript:;" title="P20系列礼品包装服务" data-code="3201070000801" interest-price="¥25.00"
	                                data-pid="10086344499475">
	                                    <p>
	                                        <span>
	                                            P20系列礼品包装服务
	                                        </span>
	                                    </p>
	                                </a>
	                            </li>
	                            <a href="javascript:;" target="_blank" class="btn-product-more hidden"
	                            id="gift-service-detail-link">
	                                <span>
	                                    了解详情
	                                </span>
	                                &gt;
	                            </a>
	                        </ul>
	                    </div>
	                </dl>
	                <!-- 20170518-商品简介-保障服务-start -->
	                <div class="product-pulldown clearfix hide" id="pro-service" style="display: block;">
	                    <label>
	                        保障服务
	                    </label>
	                    <!-- 延保 -->
	                    <div class="product-service">
	                        <span class="hide" id="extendSelect" skuid="" data-scode="" interest-price="">
	                        </span>
	                        <a href="javascript:;" onclick="ec.product.click_function(this)" class="product-service-btn">
	                            <span class="fl max-w">
	                                延长服务宝半年
	                            </span>
	                            <span class="fl">
	                                &nbsp;￥198
	                            </span>
	                        </a>
	                        <div class="product-service-detail">
	                            <div class="product-service-list" id="extendProtected">
	                                <ul>
	                                    <li>
	                                        <div class="fl" onclick="checkedThis(this,'3201010004601','extendedName','extendProtected');">
	                                            <input type="checkbox" name="extendedName">
	                                            <div id="3201010004601" class="product-service-listcon" title="延长服务宝半年"
	                                            skuid="10086975147243" data-scode="3201010004601" data-price="198">
	                                                <span class="fl max-w">
	                                                    延长服务宝半年
	                                                </span>
	                                                <p class="f1">
	                                                    <span class="fl">
	                                                        &nbsp;￥198
	                                                    </span>
	                                                    <a target="_blank" href="/product/10086840746918.html">
	                                                        详情&nbsp;&gt;
	                                                    </a>
	                                                </p>
	                                            </div>
	                                        </div>
	                                    </li>
	                                    <li>
	                                        <div class="fl" onclick="checkedThis(this,'3201010004101','extendedName','extendProtected');">
	                                            <input type="checkbox" name="extendedName">
	                                            <div id="3201010004101" class="product-service-listcon" title="延长服务宝1年"
	                                            skuid="10086600251270" data-scode="3201010004101" data-price="368">
	                                                <span class="fl max-w">
	                                                    延长服务宝1年
	                                                </span>
	                                                <p class="f1">
	                                                    <span class="fl">
	                                                        &nbsp;￥368
	                                                    </span>
	                                                    <a target="_blank" href="/product/10086705268979.html">
	                                                        详情&nbsp;&gt;
	                                                    </a>
	                                                </p>
	                                            </div>
	                                        </div>
	                                    </li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- 意外保 -->
	                    <div class="product-service">
	                        <span class="hide" id="accidentSelect" skuid="" data-scode="" interest-price="">
	                        </span>
	                        <a href="javascript:;" onclick="ec.product.click_function(this)" class="product-service-btn">
	                            <span class="fl max-w">
	                                碎屏(含后盖)服务宝1年
	                            </span>
	                            <span class="fl">
	                                &nbsp;￥299
	                            </span>
	                        </a>
	                        <div class="product-service-detail">
	                            <div class="product-service-list" id="accidentProtected">
	                                <ul>
	                                    <li>
	                                        <div class="fl" onclick="checkedThis(this,'3201020003901','accidentName','accidentProtected');">
	                                            <input type="checkbox" name="accidentName">
	                                            <div id="3201020003901" class="product-service-listcon" title="碎屏(含后盖)服务宝1年"
	                                            skuid="10086844837652" data-scode="3201020003901" data-price="299">
	                                                <span class="fl max-w">
	                                                    碎屏(含后盖)服务宝1年
	                                                </span>
	                                                <p class="fl">
	                                                    <span class="fl">
	                                                        &nbsp;￥299
	                                                    </span>
	                                                    <a target="_blank" href="/product/10086811704433.html">
	                                                        详情&nbsp;&gt;
	                                                    </a>
	                                                </p>
	                                            </div>
	                                        </div>
	                                    </li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- 20170518-商品简介-保障服务-end -->
	                <input type="hidden" value="" id="interestOrderNow">
	                <!-- 20181026-商品简介-分期免息-start -->
	                <div class="product-choose clearfix hide" id="prd-noInterset" interest-allow="1"
	                interest-button="">
	                    <label>
	                        分期免息
	                    </label>
	                    <div class="product-choose-detail relative">
	                        <ul>
	                            <li class="" id="hbShow">
	                                <!-- 选中li添加class="selected" 点击打开套餐添加class="click"-->
	                                <div class="sku">
	                                    <a href="javascript:;">
	                                        <p>
	                                            <span>
	                                                花呗分期
	                                            </span>
	                                        </p>
	                                    </a>
	                                </div>
	                            </li>
	                            <li id="hlShow">
	                                <div class="sku">
	                                    <a href="javascript:;">
	                                        <p>
	                                            <span>
	                                                掌上生活分期
	                                            </span>
	                                        </p>
	                                    </a>
	                                </div>
	                            </li>
	                        </ul>
	                        <div class="product-stages product-package-mini" id="hbDetail">
	                            <div class="product-stages-con">
	                                <div class="product-stages-main">
	                                    <ul class="clearfix">
	                                    </ul>
	                                </div>
	                                <div class="tips">
	                                    <h2>
	                                        花呗分期是什么？
	                                    </h2>
	                                    <p>
	                                        花呗分期是蚂蚁金服（支付宝公司）提供的先消费后分期还款的赊购服务。
	                                        <br>
	                                        免息活动仅限单款商品的订单，对含多款商品的订单暂不支持。
	                                    </p>
	                                </div>
	                            </div>
	                            <div class="product-package-mini-tool clearfix">
	                                <div class="fr">
	                                    <a id="interestHBPayNow" href="javascript:;" class="product-package-mini-btn product-button02"
	                                    onclick="ec.product.interest.payByInterest(1);" interest-info="">
	                                        <span>
	                                            立即下单
	                                            <span>
	                                            </span>
	                                        </span>
	                                    </a>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="product-stages product-package-mini " id="hlDetail">
	                            <div class="product-stages-con">
	                                <div class="product-stages-main">
	                                    <ul class="clearfix">
	                                    </ul>
	                                </div>
	                                <div class="tips">
	                                    <h2>
	                                        掌上生活分期是什么？
	                                    </h2>
	                                    <p>
	                                        掌上生活分期是招商银行信用卡中心提供的消费分期服务。
	                                        <br>
	                                        免息活动仅限单款商品的订单，对含多款商品的订单暂不支持。
	                                    </p>
	                                </div>
	                            </div>
	                            <div class="product-package-mini-tool clearfix">
	                                <div class="fr">
	                                    <a id="interestPayHLNow" href="javascript:;" class="product-package-mini-btn product-button02"
	                                    onclick="ec.product.interest.payByInterest(2);" interest-info="">
	                                        <span>
	                                            立即下单
	                                            <span>
	                                            </span>
	                                        </span>
	                                    </a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- 20181026-商品简介-分期免息-end -->
	                <!-- 20170518-商品简介-物流现货-start -->
	                <div class="product-pulldown clearfix hide">
	                    <label>
	                        物流售后
	                    </label>
	                    <div class="product-pulldown-main relative">
	                        <!--鼠标悬浮按钮的图标span选择后 class="product-pulldown-main relative" 改为 class="product-pulldown-main
	                        product-pulldown-main-show relative"-->
	                        <a href="#" class="product-pulldown-btn">
	                            江苏省&gt;南京市&gt;玄武区
	                            <span>
	                            </span>
	                        </a>
	                        <div class="product-pulldown-detail">
	                            <div class="product-pulldown-detailmain">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- 20170518-商品简介-物流现货-end -->
	                <!-- 推荐-start -->
	                <div id="Recommend" class="clearfix">
	                    <label>
	                        推荐
	                    </label>
	                    <div class="product-choose-relation">
	                        <ul class="clearfix">
	                            <li>
	                                <a href="/product/10086915330134.html" target="_blank" onclick="pushProRelationMsg(10086915330134,1)">
	                                    HUAWEI P20
	                                </a>
	                            </li>
	                            <li>
	                                <a href="/product/922041175.html" target="_blank" onclick="pushProRelationMsg(922041175,2)">
	                                    HUAWEI VR 2
	                                </a>
	                            </li>
	                            <li>
	                                <a href="/product/973611543.html" target="_blank" onclick="pushProRelationMsg(973611543,3)">
	                                    （热门配件）华为运动蓝牙耳机
	                                </a>
	                            </li>
	                            <li>
	                                <a href="/product/10086576602689.html" target="_blank" onclick="pushProRelationMsg(10086576602689,4)">
	                                    华为主动降噪耳机3
	                                </a>
	                            </li>
	                        </ul>
	                    </div>
	                </div>
	                <!-- 推荐-end -->
	                <div class="product-operation-main product-operation-location" style="min-height: 49px;">
	                    <!-- 20170518-商品简介-已选择商品-start -->
	                    <div class="product-description clearfix">
	                        <label>
	                            已选择商品:
	                        </label>
	                        <div id="pro-select-sku" class="product-selected">
	                            {{$shops->gname}} /{{$shops->size}}
	                            <div id="giftBuy-selected" class="inline">
	                                &nbsp;/&nbsp;无增值服务
	                            </div>
	                        </div>
	                    </div>
	                    <!-- 20170518-商品简介-已选择商品-end -->
	                    <!-- 20170518-商品简介-提示-end -->
	                   
	                    <!-- 20170518-商品简介-提示-end -->
	                    <!-- 20170518-商品简介-提交操作-start -->
	                    <div id="product-operation" class="product-operation relative" style="display: block;">
	                        <div class="clearfix">
	                            <!-- 20170518-商品简介-购买数量-start -->
	                            <div class="product-stock" id="pro-quantity-area">
	                                <input id="pro-quantity" type="text" class="product-stock-text" placeholder="1"
	                                value="1">
	                                <p class="product-stock-btn">
	                                    <a id="pro-quantity-plus" href="javascript:;">
	                                        +
	                                    </a>
	                                    <a id="pro-quantity-minus" href="javascript:;" class="disabled">
	                                        −
	                                    </a>
	                                </p>
	                            </div>
	                            <div class="product-stock hide" id="pro-quantity-area-nochange" style="display: none;">
	                                <input type="text" class="product-stock-text" placeholder="1" value="1"
	                                disabled="disabled">
	                                <p class="product-stock-btn">
	                                    <a href="javascript:;" class="disabled">
	                                        +
	                                    </a>
	                                    <a href="javascript:;" class="disabled">
	                                        −
	                                    </a>
	                                </p>
	                            </div>
	                            <!-- 20170518-商品简介-购买数量-end -->
	                            <div class="product-buttonmain">
	                                <!-- 20170518-商品简介-按钮-start -->
	                                <div id="pro-operation" class="product-button clearfix" style="visibility: visible;">
	                                    <a href="javascript:;"  class="product-button01" id="addcart" gid="{{$shops->id}}">
	                                        <span>
	                                            加入购物车
	                                        </span>
	                                    </a>
	                                    <a href="javascript:;" onclick="ec.product.orderNow()" class="product-button02">
	                                        <span>
	                                            立即下单
	                                        </span>
	                                    </a>
	                                </div>
	                                <!-- 20170518-商品简介-按钮-end -->
	                                <!-- 20170518-商品简介-协议-start -->
	                                <div class="product-agreement hide" id="product-deposit-agreement-area">
	                                    <input type="checkbox" id="pro-agreement-area-check" checked="">
	                                    <span>
	                                        同意
	                                        <a href="javascript:;" onclick="ec.product.showDepositAgreement()">
	                                            订金支付协议
	                                        </a>
	                                    </span>
	                                </div>
	                                <!-- 20170518-商品简介-协议-end -->
	                                <!-- 20180212-商品简介-游客购买-start -->
	                                <!-- 20180212-商品简介-游客购买-end -->
	                            </div>
	                        </div>
	                        <div class="product-tips02 " id="goAddressId" style="display:none">
	                            <lable>
	                                温馨提示
	                            </lable>
	                            <p>
	                                提前设置
	                                <a href="/member/myAddress?t=453453454353" target="_blank" onclick="ec.product.pushAddress()">
	                                    默认收货地址
	                                </a>
	                                ，购买更顺利~
	                            </p>
	                        </div>
	                    </div>
	                    
	                </div>
	                <!-- 20170518-商品简介-提交操作-end -->
	                <!-- 20170518-商品简介-按钮-start -->
	                <div class="product-support">
	                    <ul>
	                        <li>
	                            <a href="https://www.vmall.com/recycle" target="_blank" class="product-button-oldnew">
	                            </a>
	                            <div class="product-support-detial product-oldnew-detail hide">
	                                <div class="product-support-detialmain">
	                                    <p>
	                                        <label>
	                                            以旧换新，
	                                        </label>
	                                        <a href="https://www.vmall.com/recycle" target="_blank" style="color:red">
	                                            最高送1300元购机立减券
	                                        </a>
	                                    </p>
	                                </div>
	                            </div>
	                        </li>
	                        <li>
	                            <a class="product-button-code">
	                            </a>
	                            <div class="product-support-detial product-code-detail hide">
	                                <div class="product-support-detialmain">
	                                    <p>
	                                        用手机扫码进行购买
	                                    </p>
	                                    <div id="product_wap">
	                                        <canvas width="118" height="118">
	                                        </canvas>
	                                    </div>
	                                </div>
	                            </div>
	                        </li>
	                    </ul>
	                </div>
	                <!-- 20170518-商品简介-按钮-end -->
	            </div>
	        </div>
	        <!-- 20170518-商品简介-属性-end -->
	    </div>
	</div>
    
    <div class="detailTab anim detailFastFloat" id="detailFast">
		<div class="fixedContainer">
			<ul class="clearfix">
				<li class="current">
					<a href="javascript:;">商品详情</a>
				</li>
				<li class="">
					<a href="javascript:;">规格参数</a>
				</li>
				<li class="">
					<a href="javascript:;">常见问题</a>
				</li>
				<li class="">
					<a href="javascript:;">评论</a>
				</li>
			</ul>
			<div class="shortcut trans" >
				<div class="shortcutCon trans">
					<div class="modBuy">
						<a href="javascript:void(0);" id="JBtnBuyShortcut" class="btn btnPrimary btnLg" style="color:#fff;">
							<i></i>
							现在购买
						</a>
					</div>
					<div class="modTotal trans">
						{{$shops->gname}}							<em class="vmPrice" id="JTotalPriceShortcut">￥{{$shops->price}}</em>

						<p class="vmTitle" id="JSummaryName">
						{{$shops->size}}
						</p>

					</div> 
				</div> 
			</div> 
			<div class="modTitle"></div>
		</div>
	</div>

	<!-- 底下 -->
	<section class="row detail" id="detail">
		<div class="rowsd">
			<div class="detailTab" id="detailTabFixed">
				<div class="fixedContainer">
					<ul class="clearfix">
						<li class="current">
							<a href="javascript:;">商品详情</a>
						</li>
						<li class="">
							<a href="javascript:;">规格参数</a>
						</li>
						<li class="">
							<a href="javascript:;">常见问题</a>
						</li>
						<li class="">
							<a href="javascript:;">评论</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="detailContent container">
			<div class="question current" style="display: inline">
               {!!$shops->text!!}
            </div>
			<div class="question" style="display: none;">
				<div class="questionList">
					<h2>热门回答</h2>
												
				</div>
			</div>
			<div class="question" style="display: none;">
				<div class="questionList">
					<h2>热门评论</h2>
												
				</div>
			</div>

		</div>

	</section>
    
  
	<form action="" method="post" enctype="multipart/form-data">
	<div id="motai">    
	     <div class="topbackdiv" id="bj" style="display: none;"></div>


		 <div id="ol_box" class="ol_box_4" style="display:none;" >
		     <div class="box-ct" style="width: 460px;background: #fff;display:block;">
		         <div class="box-header">
		             <div class="box-tl">
		             </div>
		             <div class="box-tc">
		                 <div class="box-tc1">
		                 </div>
		                 <div class="box-tc2">
		                     <a href="javascript:;"  title="关闭" class="box-close" onclick="hidediv();">
		                     </a>
		                 </div>
		             </div>
		             <div class="box-tr">
		             </div>
		         </div>
		         <table width="100%" border="0" cellspacing="0" cellpadding="0" style="table-layout:fixed;background:#fff;">
		             <tbody>
		                 <tr>
		                     <td class="box-cl">
		                     </td>
		                     <td class="box-cc">
		                         <div class="box-content" style="height: auto;">
		                             <div class="b">
		                                 <div class="pro-add-success" gid="" id="jiesuan">
		                                     <dl>
		                                         <dt>
		                                             <s>
		                                             </s>
		                                         </dt>
		                                         <dd>
		                                             <div class="box-right-2">
		                                                 <p>
		                                                     <span class="spming">荣耀畅玩8C 全网通标配版 4GB+32GB（幻夜黑）</span>
		                                                     成功加入购物车!
		                                                 </p>
		                                             </div>
		                                             <div class="box-button">
		                                                 <a class="box-cancel" href="javascript:;" onclick="$('#cart-tips').hide()">
		                                                     再逛逛
		                                                 </a>
		                                                 <a href="javascript:;" class="box-ok" id="js">
		                                                     去结算
		                                                 </a>
		                                             </div>
		                                            
		                                         </dd>
		                                     </dl>
		                                 </div>
		                             </div>
		                         </div>
		                        
		                     </td>
		                     <td class="box-cr">
		                     </td>
		                 </tr>
		             </tbody>
		         </table>
		         <div class="box-bottom" style="">
		             <div class="box-bl">
		             </div>
		             <div class="box-bc">
		             </div>
		             <div class="box-br">
		             </div>
		         </div>
		     </div>
		 </div>

	</div>
	</form>
</body>


<script>
	//移动事件
	$('#small').mousemove(function(e){

		$('#move').css('display','block');
		$('#big').css('display','block');


		//获取small的左侧偏移量
		var sl = $('#small').offset().left;
		var st = $('#small').offset().top;

		//获取x和y的坐标
		// var x = e.clientX; 
		// var y = e.clientY;

		var x = e.pageX; 
		var y = e.pageY;

		//获取move的宽和高
		var mw = $('#move').width()/2;
		var mh = $('#move').height()/2;

		//求出 move距离small的偏移量
		var ml = x - sl - mw;
		var mt = y - st - mh;


		var maxl = $('#small').width()-$('#move').width();
        
		var maxt = $('#small').height()-$('#move').height();

		if(ml >= maxl){

			ml = maxl;
		}
		if(ml <= 0){
			ml = 0;
		}

		if(mt >= maxt){

			mt = maxt;
		}
		if(mt <= 0){
			mt = 0;
		}

		//获取大图距离big 的偏移量
		var bl = $('#bigImg').width() / $('#small').width() * ml;

		var bt = $('#bigImg').height() / $('#small').height() * mt;


		$('#bigImg').css('left',-bl+'px');
		$('#bigImg').css('top',-bt+'px');


		$('#move').css('left',ml+'px');
		$('#move').css('top',mt+'px');


	})

	//从small移出来
	$('#small').mouseout(function(){

		$('#move').css('display','none');
		$('#big').css('display','none');

	})

	//鼠标移到小图上
	$('#uls').find('img').mouseover(function(){

		$(this).css('border','solid 1px #e53e41 ');

		var srcs = $(this).attr('src');

		//改变small里面的src
		$('#small').find('img').attr('src',srcs);

		//改变big里面的src
		$('#big').find('img').attr('src',srcs);

	})

	$('#uls').find('img').mouseout(function(){

		$(this).css('border','solid 1px white');
	})

</script>

<script>

	function hidediv() {
	    document.getElementById("bj").style.display = 'none';
	    document.getElementById("ol_box").style.display = 'none';
	}

	// 点击加入购物车触发的事件
	$('#addcart').click(function(){
	    document.getElementById("bj").style.display = "block";
	    document.getElementById("ol_box").style.display = "block";
	    var gid = $(this).attr('gid');
	    $("#jiesuan").attr('gid',gid);


	    var spm = $(this).parents('#product-property-recommand').find('#pro-name').text();
	    $('.spming').text(spm);
	   
	})


	$('#js').click(function(){
		var gid = $('#jiesuan').attr('gid');

		var num = $('#addcart').parents('#product-operation').find('#pro-quantity').val();
		
		window.location.href="/addCar?id="+gid+"&num="+num;
	})
</script>
</html>



