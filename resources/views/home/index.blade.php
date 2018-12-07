<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$title}}</title>
	<link rel="stylesheet" href="/homes/css/index.min.css">
	<link rel="stylesheet" href="/homes/css/ec.core.base.min.css">
	<script src="/homes/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="/homes/slider/less/reset.css">
    <link rel="stylesheet" href="/homes/slider/less/slide.css">
    <link rel="stylesheet" href="/homes/slider/less/index.css">
	<style>
        .tyy{
        	box-shadow: 0 0 46px rgba(0,0,0,0.1);
        	background: #fff;
        }
        .ff:hover{
        	text-decoration: none;
        }
        .channel-nav li :hover{
        	text-decoration: none;
        }
        #hdp{
			width:100%;
			margin:0 auto;
			height: 550px;
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

	<div class="header">
	    <div class="layout">
	        <div class="left"> 
	            <!-- 2017-02-15-logo-start -->
	            <div class="logo"><a href="https://www.vmall.com/index.html" title="Vmall.com - 华为商城" onclick="pushIndexLogoClickMsg('https://res.vmallres.com/pimages//common/config/logo/SXppnESYv4K11DBxDFc2.png','https://www.vmall.com/index.html')"><img src="/homes/img/SXppnESYv4K11DBxDFc2.png" alt="Vmall.com - 华为商城"></a></div>
	            <!-- 2017-02-15-logo-end -->
	            
	            <!-- 2017-06-19-导航-start --> 
	            <div class="naver">
	                <ul class="clearfix">
	                    <ul id="naver-list">
						<li class="img" id="huawei">
							<a href="https://www.vmall.com/huawei" target="_blank">
								<img src="/homes/img/GrguiqzHENWVYHYWyHBM.png">
							</a>
						</li>
						<li class="img" id="honor">
							<a href="https://www.vmall.com/honor" target="_blank">
								<img src="/homes/img/AHwTUFRpDSQyuIZ7tLJz.png">
							</a>
						</li>
						<li id="huawei" class="">
							<a href="https://sale.vmall.com/hwmate.html" target="_blank">
				  
				             <span>Mate 20系列</span>
						     </a> 
						</li>
						<li id="honor" class="">
								<a href="https://www.vmall.com/product/10086785341226.html" target="_blank">
					  
					             <span>荣耀10</span>
							    </a> 
					    </li>
						<li id="huawei">
								<a href="https://sale.vmall.com/p20.html" target="_blank">
					  
					             <span>P20系列</span>
							    </a> 
						</li>
						<li id="honor">
								<a href="https://www.vmall.com/product/570379791.html" target="_blank">
					             <span>荣耀V10</span>
							    </a> 
						</li>
	                </ul>
					<script>
						$(function () {
							$('#naver-list li').hover(function () {
								$(this).addClass('hover');
							},function () {
								$(this).removeClass('hover');
							});

						});
					</script>
	                
	            </div>
	            <!-- 2017-06-19-导航-end -->
	        </div>
	        
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
	            <div id="AutocompleteContainter_57dea" "="" style="top: 184px; left: 953.5px;"><div class="autocomplete-w1"><div class="autocomplete" id="Autocomplete_57dea" style="display: none; width: 290px; max-height: 400px;"></div></div></div></div>
	            <!-- 2017-02-15-搜索条-end -->
	        </div>
	    </div>
	</div>
    
    <!-- 左部导航 -->
    <div class="naver-main">
        <div class="layout">
            <!-- 20130909-导航-start -->
            <!-- 20130909-导航-end -->
            <!-- 20140823-分类-start -->
            <div class="category category-index" id="category-block">
                <!-- 20170223-分类-start -->
                <div class="b">
                    <ol id="chulai" class="category-list">
                        <!-- 鼠标悬停增加ClassName： hover -->
                        @foreach($type as $k=>$one)
                        <li id="zxnav_0" class="category-item">
                            <input id="zxnav_0_flag" type="hidden" autocomplete="off" value="no">
                            <input id="zxnav_0_name" type="hidden" autocomplete="off" value="手机">
                            <div class="category-info">
                                <div class="category-title">
                                    <a href="/list-36" target="_blank">
                                        <span>
                                            {{$one->tname}}
                                        </span>
                                    </a>
                                </div>
                                @php 
                                    $a = DB::table('type')->where('pid',$one->id)->take(2)->get();
                                @endphp
                                @foreach($a as $vv)
                                <a href="#" target="_blank">
                                    <span>
                                    	{{$vv->tname}}
                                    </span>
                                </a>
                                @endforeach
                                <i class="">
                                </i>
                            </div>
                           
                            <div class="category-panels category-panels-3 none">
                            	@foreach($one->child as $two)
                                <ul class="subcate-list clearfix">
                                    <li class="subcate-item">
                                        <input id="child_name" type="hidden" value="荣耀">
                                        <input id="child_status" type="hidden" value="1">
                                        <input id="child_type" type="hidden" value="1">
                                        <a href="/list-75" target="_blank">
                                            <img src="https://res.vmallres.com/pimages//pages/navigation/yDSEePrtYigIfBshhFQZ.png">
                                            <span>
                                                {{$two->tname}}
                                            </span>
                                        </a>
                                    </li>
                                    
                                </ul>
                                 @endforeach
                                <ul class="subcate-list clearfix">
                                    <li class="subcate-btn">
                                        <a href="/types/{{$one->id}}" target="_blank">
                                            查看全部
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            
                        </li>
                        @endforeach
                    </ol>
                </div>
                <!-- 20170223-分类-end -->
                <!-- 20140823-分类-end -->
            </div>
        </div>
    </div>
	<!-- 幻灯片 -->
	<!-- 幻灯片 -->
	<div class="hot-board hot-board-index">
    <!--ads start-->
    <div class="ec-slider" id="index_slider">
        <ul id="uls">

        	@foreach($sinfo as $v)
            	<li><img src="{{$v->img}}" alt="" id="hdp"></li>
            @endforeach
        </ul>
        <div class="ec-slider-middle">
            <div id="dian" class="ec-slider-nav-1">

            	@foreach($sinfo as $v)
                	<span val="{{$v->id}}"></span>
                @endforeach
            </div>
        </div>
    </div>
    <script>

		var ins = 1;

		var into = null;

		function move(){

			into = setInterval(function(){

				show(ins++);

				if(ins > 5){
					ins = 0;
				}

			},3100)

		}

		move();

		//第一张图片显示出来
		function show(i)
		{
			$('#uls li').eq(i).fadeIn(500).siblings().fadeOut(500);
			$('#dian span').eq(i).addClass('current').siblings().removeClass('current');
		}

		show(0);

		$('#dian span').hover(function(){

			//获取索引
			ins = $(this).index();

			//让相应的图片显示出来
			show(ins++);

			clearInterval(into);	

		},function(){

			move();

		})
		
    </script>
    <div class="mask">
        <span>
        </span>
    </div>
    <!--ads end-->


    <!-- 幻灯片下面 -->
    <div class="home-channel-menu">
        <div class="layout relative">
            <div class="channel-floor-0 relative">
                <div class="h">
                    <div class="home-channel-main">
                        <ul class="home-channel-list clearfix home-channel-img6">
                            <li class="fl s1">
                                <div id="gg_login" class="i-mall-prompt clearfix hide">
                                    <div class="relative fl w-name">
                                        <a href="/member?t=15438433302231543843371929" rel="nofollow" timetype="timestamp"
                                        onclick="pushMemberMsg('头像','/member?t=1543843330223timestamp')">
                                            <img id="gg_customerPic" src="https://res.vmallres.com/20181122/images/echannel/misc/img_not_logged_in.png"
                                            alt="">
                                        </a>
                                    </div>
                                    <div class="fl">
                                        <div class="w-info">
                                            您好！
                                            <span id="gg_loginName">
                                            </span>
                                            。
                                        </div>
                                        <div class="w-btn">
                                            <a id="oldPeople" style="display:none" class="new" href="/member/msg?t=1543843330223timestamp"
                                            onclick="pushMemberMsg('消息中心','/member/msg?t=1543843330223timestamp">
                                                消息中心
                                            </a>
                                            <a id="newPeople" class="new" href="https://sale.vmall.com/welcome.html"
                                            target="_blank" onclick="pushMemberMsg('新人福利','href=" https:="" sale.vmall.com=""
                                            welcome.html ')"="">新人福利</a>
                                            <a class="" href="/privilege" target="_blank" onclick="pushMemberMsg('特权频道 ','/privilege ')">会员频道</a>
                                            </div>
                                            </div>
                                            </div>
                                            <div id="gg_unlogin" class="i-mall-prompt clearfix">
                                            <div class="relative fl w-name">
                                            <img src="https://res.vmallres.com/20181122/images/echannel/misc/img_not_logged_in.png" alt="">
                                            </div>
                                            <div class="fl">
                                            <div id="gg_login_url" class="w-reg">
                                            您好！请                     
                                            <script>document.write('<a href="javascript:;" rel="nofollow" onclick="pushMemberMsg(\'登录\',\'https://hwid1.vmall.com/CAS/remoteLogin?loginChannel=26000000&reqClientType=26&lang=zh-cn&loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3D'+encodeURIComponent(encodeURIComponent(window.location.href))+'\')"> 登录 </a>');
                                            </script>
                                            <a href="javascript:;" rel="nofollow" onclick="pushMemberMsg('登录','https://hwid1.vmall.com/CAS/remoteLogin?loginChannel=26000000&amp;reqClientType=26&amp;lang=zh-cn&amp;loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&amp;service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3Dhttps%253A%252F%252Fwww.vmall.com%252F%253Fcid%253D9211')">
                                                登录
                                            </a>
                                            <span>
                                                &nbsp;/&nbsp;
                                            </span>
                                            <a href="https://hwid1.vmall.com/CAS/portal/userRegister/regbyphone.html?service=https://www.vmall.com/account/caslogin&amp;loginChannel=26000000&amp;reqClientType=26&amp;lang=zh-cn"
                                            rel="nofollow" target="_blank" onclick="pushMemberMsg('注册','https://hwid1.vmall.com/CAS/portal/userRegister/regbyphone.html?service=https://www.vmall.com/account/caslogin&amp;loginChannel=26000000&amp;reqClientType=26&amp;lang=zh-cn')">
                                                注册
                                            </a>
                                        </div>
                                        <div class="w-btn">
                                            <a class="new" href="https://sale.vmall.com/welcome.html" target="_blank"
                                            onclick="pushMemberMsg('新人福利','https://sale.vmall.com/welcome.html')">
                                                新人福利
                                            </a>
                                            <a class="" href="/privilege" target="_blank" onclick="pushMemberMsg('会员频道','/privilege')">
                                                会员频道
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="fl s2">
                                <ul class="clearfix">
                                    <li>
                                        <a href="http://company.vmall.com" target="_blank" onclick="pushMsgMenu(1,'300010901','PC首页功能导航_企业购特惠','http://company.vmall.com')">
                                            <div class="p-img">
                                                <img class="img0" src="/homes/img/5e73f8040c63170985c79fd7bd11fedb.png"
                                                alt="企业购特惠">
                                            </div>
                                            <div class="p-dec">
                                                企业购特惠
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.vmall.com/recycle" target="_blank" onclick="pushMsgMenu(2,'300010901','PC首页功能导航_以旧换新','https://www.vmall.com/recycle')">
                                            <div class="p-img">
                                                <img class="img1" src="/homes/img/5e73f8040c63170985c79fd7bd11fedb.png"
                                                alt="以旧换新">
                                            </div>
                                            <div class="p-dec">
                                                以旧换新
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.vmall.com/privilege" target="_blank" onclick="pushMsgMenu(3,'300010901','PC首页功能导航_会员领券','https://www.vmall.com/privilege')">
                                            <div class="p-img">
                                                <img class="img2" src="/homes/img/5e73f8040c63170985c79fd7bd11fedb.png"
                                                alt="会员领券">
                                            </div>
                                            <div class="p-dec">
                                                会员领券
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://sale.vmall.com/peijian.html" target="_blank" onclick="pushMsgMenu(4,'300010901','PC首页功能导航_优选配件','https://sale.vmall.com/peijian.html')">
                                            <div class="p-img">
                                                <img class="img3" src="/homes/img/5e73f8040c63170985c79fd7bd11fedb.png"
                                                alt="优选配件">
                                            </div>
                                            <div class="p-dec">
                                                优选配件
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.vmall.com/product/10086789934944.html" target="_blank"
                                        onclick="pushMsgMenu(5,'300010901','PC首页功能导航_新品上市','https://www.vmall.com/product/10086789934944.html')">
                                            <div class="p-img">
                                                <img class="img4" src="/homes/img/5e73f8040c63170985c79fd7bd11fedb.png"
                                                alt="新品上市">
                                            </div>
                                            <div class="p-dec">
                                                新品上市
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://sale.vmall.com/easybuy.html" target="_blank" onclick="pushMsgMenu(6,'300010901','PC首页功能导航_优享购','https://sale.vmall.com/easybuy.html')">
                                            <div class="p-img">
                                                <img class="img5" src="/homes/img/5e73f8040c63170985c79fd7bd11fedb.png"
                                                alt="优享购">
                                            </div>
                                            <div class="p-dec">
                                                优享购
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="fl s3">
                                <div class="p-notice clearfix">
                                    <div class="icon-notice fl">
                                        <a href="/notice-list" title="商城公告" onclick="pushMsgNotice('2')">
                                            <span>
                                                公告
                                            </span>
                                        </a>
                                    </div>
                                    <div class="p-notice-content" id="notice">
                                        <ul class="p-notice-list fl" style="height: 215px; margin-top: -43px;">
                                            <li>
                                                <a href="/notice-6318" target="_blank" onclick="pushMsgNotice('1')">
                                                    华为商城12.12年终购机惠 全场最高省1000元
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/notice-6312" target="_blank" onclick="pushMsgNotice('1')">
                                                    荣耀双十二嗨购 全场最高省1000元
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/notice-6330" target="_blank" onclick="pushMsgNotice('1')">
                                                    华为双十二欢乐盛典来袭
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/notice-6336" target="_blank" onclick="pushMsgNotice('1')">
                                                    12.12智能家居狂享惠
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/notice-6342" target="_blank" onclick="pushMsgNotice('1')">
                                                    华为企业购“年终企采季”
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/notice-6318" target="_blank" onclick="pushMsgNotice('1')">
                                                    华为商城12.12年终购机惠 全场最高省1000元
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-info">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="https://www.vmall.com/priority" target="_blank" rel="nofollow"
                                            onclick="pushMsgMenu(1,'300011101','PC首页功能导航_优购码','https://www.vmall.com/priority')">
                                                <span>
                                                    <img class="img0" src="/homes/img/5e73f8040c63170985c79fd7bd11fedb.png"
                                                    alt="优购码">
                                                </span>
                                                优购码
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://sale.vmall.com/smrz.html" target="_blank" rel="nofollow"
                                            onclick="pushMsgMenu(2,'300011101','PC首页功能导航_实名认证','https://sale.vmall.com/smrz.html')">
                                                <span>
                                                    <img class="img1" src="/hoems/img/5e73f8040c63170985c79fd7bd11fedb.png"
                                                    alt="实名认证">
                                                </span>
                                                实名认证
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.vmall.com/order/tcsProductIndex" target="_blank"
                                            rel="nofollow" onclick="pushMsgMenu(3,'300011101','PC首页功能导航_补购保障','https://www.vmall.com/order/tcsProductIndex')">
                                                <span>
                                                    <img class="img2" src="/homes/img/5e73f8040c63170985c79fd7bd11fedb.png"
                                                    alt="补购保障">
                                                </span>
                                                补购保障
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="">
                        <ul class="home-promo-list clearfix">

                        	@foreach($ads as $v)
				                 @if($v->position == 'up')
				                    <li>
				                        <a target="_blank" href="" class="item">
		                                    <img alt="荣耀" src="{{$v->img}}">
		                                </a> 
		                            </li>
			                    @endif
			                @endforeach  
                        </ul>
                    </div>
                </div>
                <div class="b">
                    <!--20170222 限时特惠 start-->
                    <!--20170222 限时特惠 end-->
                </div>
                <div class="b">
                    <!--20170222 热销单品 start-->
                    <!-- 20170222-首页--热销单品-start -->
                    <div class="home-recommend-goods home-hot-goods index-channel-floor">
                        <div class="h">
                            <h2 class="title change-title">
                                热销单品
                            </h2>
                        </div>
                        <div class="b clearfix">
                            <div class="span-232 fl">
                                <ul class="grid-promo-list clearfix">
                                    <input type="hidden" id="contengID" value="0-6">
                                    <li class="grid-items grid-items-sm">
                                        <a class="thumb" href="https://www.vmall.com/product/10086211949427.html"
                                        target="_blank" onclick="pushHomeHotGoodsAdvertMsg('/homes/img/Yh5fuX848ga4dUHJqUV2.png','https://www.vmall.com/product/10086211949427.html')">
                                            <img alt="" src="/homes/img/Yh5fuX848ga4dUHJqUV2.png">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="span-968 fl">
                                <ul class="grid-list clearfix">
                                    <!--通过添加current 来实现 hover效果-->
                                    @foreach($rx as $k => $rx1)
                                    <li class="grid-items">
                                        <a class="thumb" href="/shop/{{$rx1->id}}" target="_blank" onclick="pushHomeHotGoodsMsg(this,2,'10086772693857')">
                                            <p class="grid-img">
                                                <img alt="荣耀10青春版 幻彩渐变 2400万AI自拍 6.21英寸高屏占比珍珠屏 全网通 4GB+64GB（渐变蓝）" src="
                                                @php
                                                   $tu = DB::table('goodsimg')->where('gid',$rx1->id)->first();
                                                   echo $tu->gimg;
                                                @endphp
                                                ">
                                            </p>
                                            <div class="grid-title" style="white-space:nowrap;" >
                                               {{$rx1->gname}}
                                            </div>
                                            <p class="grid-desc">
                                                {{$rx1->info}}&nbsp;
                                            </p>
                                            <p class="grid-price">
                                                ¥{{$rx1->price}}
                                            </p>
                                             <p class="grid-tips" style="position: absolute;width: 100%;top: 0;left: 0;">
			                                    @switch($rx1->keywords)
			                                        @case(1)
			                                            <em class="thumb">
			                                                <span class="color01" style="background-color:#68BEFF;display: inline-block;padding: 0 9px;margin: 0 auto;height: 22px;line-height: 22px;color: #fff;border-radius: 0 0 6px 6px;">
			                                                    热卖
			                                                </span>
			                                            </em>
			                                            @break
			                                        @case(2)
			                                            <em class="thumb">
			                                                <span class="color01" style="background-color:#68BEFF;display: inline-block;padding: 0 9px;margin: 0 auto;height: 22px;line-height: 22px;color: #fff;border-radius: 0 0 6px 6px;">
			                                                    爆款
			                                                </span>
			                                            </em>
			                                            @break
			                                        @case(3)
			                                            <em class="thumb">
					                                        <span class="color01" style="background-color:#68BEFF;display: inline-block;padding: 0 9px;margin: 0 auto;height: 22px;line-height: 22px;color: #fff;border-radius: 0 0 6px 6px;">
					                                            新品
					                                        </span>
					                                    </em>
			                                            @break
			                                        @case(4)
			                                            <em class="thumb">
					                                        <span class="color01" style="background-color:#68BEFF;display: inline-block;padding: 0 9px;margin: 0 auto;height: 22px;line-height: 22px;color: #fff;border-radius: 0 0 6px 6px;">
					                                            特惠
					                                        </span>
					                                    </em>
			                                            @break
			                                        @case(5)
			                                            
			                                            @break
			                                        @default
			                                            
			                                    @endswitch
			                                </p>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 20170222-首页-热销单品-end -->
                    <script>
                        function pushHomeHotGoodsAdvertMsg(adid, url) {
                            var value = {
                                "UID": ec.util.cookie.get("uid"),
                                "TID": getPtid(),
                                "TIME": getTime(),
                                "CONTENT": {
                                    "ADID": adid,
                                    "URL": url,
                                    "location": "1",
                                    "click": "1"
                                }
                            };
                            ec.account.dapPushMsg("300011301", value, "click");
                            ec.code.addAnalytics({
                                hicloud: true
                            });
                            _paq.push(["trackLink", "300011301", "link", value]);
                        }

                        function pushHomeHotGoodsMsg(obj, location, skuId) {
                            var row;
                            var column;
                            if (location < 6) {
                                row = "1";
                                column = location;
                            } else if (location < 10) {
                                row = "2";
                                column = location - 4;
                            }
                            var url = obj.href;
                            var value = {
                                "UID": ec.util.cookie.get("uid"),
                                "TID": getPtid(),
                                "TIME": getTime(),
                                "CONTENT": {
                                    "SKUID": skuId,
                                    "URL": url,
                                    "location": location,
                                    "row": row,
                                    "column ": "" + column,
                                    "click": "1"
                                }
                            };
                            ec.account.dapPushMsg("300011401", value, "click");
                            ec.code.addAnalytics({
                                hicloud: true
                            });
                            _paq.push(["trackLink", "300011401", "link", value]);
                        }
                    </script>
                    <!--20170222 热销单品 end-->
                </div>
                <div class="b">
                    <!--20170223 精品推荐 start-->
                    <!-- 20170223-首页-精品推荐-start -->
                    <div class="home-recommend-goods index-channel-floor">
                        <div class="h">
                            <h2 class="title-1">
                                精品推荐
                            </h2>
                        </div>
                        <div class="b">
                            <div id="goodsRecommend-recommend" class="goods-rolling swiper-container relative">
                                <ul id="" class="grid-list swiper-wrapper clearfix" style="width: 10648px; height: 295px;">
                                    <!--通过添加current 来实现 hover效果-->
                                    @foreach($jp as $k => $vvv)
                                    <li class="grid-items swiper-slide swiper-slide-visible swiper-slide-active">
                                        <a class="thumb" href="/shop/{{$vvv->id}}" target="_blank" onclick="pushGoodsRecommendMsg('10086469441567',this,'1')">
                                            <div class="grid-info">
                                                <p class="grid-img">
                                                    <img alt="华为畅享 MAX 4GB+64GB 全网通版（幻夜黑）" src="
                                                    @php
                                                      $tu = DB::table('goodsimg')->where('gid',$vvv->id)->first();
                                                      echo $tu->gimg;
                                                    @endphp
                                                    ">
                                                </p>
                                                <p class="grid-desc">
                                                    {{$vvv->info}}
                                                </p>
                                            </div>
                                            <div class="grid-title">
                                               {{$vvv->gname}}
                                            </div>
                                            <p class="grid-price">
                                                ¥{{$vvv->price}}
                                            </p>
                                            <p class="grid-tips">
                                                <em class="thumb">
                                                    <span class="color01" style="background-color:#68BEFF">
                                                        新品
                                                    </span>
                                                </em>
                                            </p>
                                        </a>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                                <div class="grid-btn swiper-button-prev btn-prev disabled">
                                    <span>
                                    </span>
                                </div>
                               
                               
                            </div>
                        </div>
                    </div>
                    <!-- 20170223-首页-精品推荐-end -->
                    <script>
                        function pushGoodsRecommendMsg(skuid, obj, location) {
                            var value = {
                                "UID": ec.util.cookie.get("uid"),
                                "TID": getPtid(),
                                "TIME": getTime(),
                                "CONTENT": {
                                    "SKUID": skuid,
                                    "URL": obj.href,
                                    "location": location,
                                    "click": "1"
                                }
                            };
                            ec.account.dapPushMsg("300011501", value, "click");
                            ec.code.addAnalytics({
                                hicloud: true
                            });
                            _paq.push(["trackLink", "300011501", "link", value]);
                        }
                    </script>
                    <!--20170223 精品推荐 end-->
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>

<header>     <!-- 幻灯片2 -->
	<div class="banner" style="height:120px">
        <div id="slide2d" class="slide-carousel slide-2d">
            <ul  class="item-list clearfix">
            	@foreach($ads as $v)
            		@if($v->position == 'middle')
		                <li>
		                    <div class="item-content"> 	
			                     <a>
		                            <img src="{{$v->img}}" alt="">
		                        </a>
                   			</div>
                		</li>   
            		@endif
	            @endforeach           
            </ul>
            <!--indicators-->
           <!--  <div class="indicator-list" style="margin-right: 50px;">
            	@foreach($ads as $v)
            		@if($v->position == 'middle')
                		<a href="javascript:void(0);" data-slide-index="{{$v->id}}" ></a>
			        @endif
                @endforeach   
            </div> -->
        </div>      
    </div>
<header>


   <!-- <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script> -->
<script src="/homes/slider/js/slide.min.js"></script>
<script>
     $(function(){
        //2d
        var  sliderDescArr=[],i=0,len=10;
        for(;i<len;i++){
            sliderDescArr.push(new Array(10).join(''+i));
        }
        $('#sliderDesc').text(sliderDescArr[0]);
        $('#slide2d').slideCarsousel({callbackFunc:function(index){
            $('#sliderDesc1').text(sliderDescArr[index]);
        }});
    });
</script>

    <!-- 笔记本电脑 -->
    @foreach($output as $k=>$ql)
    <div class="layout" id="lc_618374">
        <div class="home-channel-floor">
            <div class="h" style="    margin: 27px 0 12px;height:44px;">
                <h2 class="channel-title fl">
                    {{$ql->tname}}
                </h2>
                <ul class="channel-nav fl">
                	@foreach($ql->child as $qls)
                    <li>
                        <a href="/types/{{$qls->id}}" target="_blank" class="ff">
                           {{$qls->tname}}
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="channel-more fr">
                    <span>
                    </span>
                    <span>
                    </span>
                    <span>
                    </span>
                    <a href="/types/{{$ql->id}}" target="_blank" onclick="pushFoolMsg('2','笔记本电脑','/list-40')">
                        查看更多
                    </a>
                </div>
            </div>
            <div class="b">
                <div class="goods-list">
                    <ul class="grid-list clearfix">
                        <li class="grid-items grid-items-md">
                            <a class="thumb" href="https://www.vmall.com/product/10086000689735.html"
                            target="_blank" onclick="pushFoolAdvertMsg('2','笔记本电脑','https://res0.vmallres.com/pimages//frontLocation/content/1947317/Vmzo28tQ8aYSvrBJax6o.png','Vmzo28tQ8aYSvrBJax6o.png','https://www.vmall.com/product/10086000689735.html')">
                            	@php 
                                    $ress = DB::table('type')->where('pid',$ql->id)->get();
                                    $tads = DB::table('typeads')->where('tid',$ql->id)->value('img');

                                   
                                @endphp

                                <img alt="" src="{{$tads}}"  style="border-radius:10px;">
                            </a>
                        </li>
                        @foreach($ql->goods as $lougoods)
                        <li class="grid-items" style="background: #f9f9f9;border-radius: 10px;">
                            <a class="thumb"  href="/shop/{{$lougoods->id}}">
                                <div class="grid-info">
                                    <p class="grid-img">
                                        <img alt="荣耀MagicBook 14英寸轻薄笔记本电脑 i5-8250U 8GB 256GB 独显（冰河银）" src="
                                        @php
                                           $tu = DB::table('goodsimg')->where('gid',$lougoods->id)->first();
                                           echo $tu->gimg;
                                        @endphp
                                        ">
                                    </p>
                                </div>
                                <div class="grid-title" style="padding-top:0px;height:0px; white-space:nowrap;width:200px;overflow:hidden; text-align:center;">
                                    {{$lougoods->gname}}
                                </div>
                                <p class="grid-desc">
                                    {{$lougoods->info}}&nbsp;
                                </p>
                                <p class="grid-price">
                                    ￥{{$lougoods->price}}
                                </p>
                                <p class="grid-tips" style="position: absolute;width: 100%;top: 0;left: 0;">
                                    @switch($lougoods->keywords)
                                        @case(1)
                                            <em class="thumb">
                                                <span class="color01" style="background-color:#68BEFF;display: inline-block;padding: 0 9px;margin: 0 auto;height: 22px;line-height: 22px;color: #fff;border-radius: 0 0 6px 6px;">
                                                    热卖
                                                </span>
                                            </em>
                                            @break
                                        @case(2)
                                            <em class="thumb">
                                                <span class="color01" style="background-color:#68BEFF;display: inline-block;padding: 0 9px;margin: 0 auto;height: 22px;line-height: 22px;color: #fff;border-radius: 0 0 6px 6px;">
                                                    爆款
                                                </span>
                                            </em>
                                            @break
                                        @case(3)
                                            <em class="thumb">
		                                        <span class="color01" style="background-color:#68BEFF;display: inline-block;padding: 0 9px;margin: 0 auto;height: 22px;line-height: 22px;color: #fff;border-radius: 0 0 6px 6px;">
		                                            新品
		                                        </span>
		                                    </em>
                                            @break
                                        @case(4)
                                            <em class="thumb">
		                                        <span class="color01" style="background-color:#68BEFF;display: inline-block;padding: 0 9px;margin: 0 auto;height: 22px;line-height: 22px;color: #fff;border-radius: 0 0 6px 6px;">
		                                            特惠
		                                        </span>
		                                    </em>
                                            @break
                                        @case(5)
                                            
                                            @break
                                        @default
                                            
                                    @endswitch
                                </p>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

 <div class="layout">
        <div class="ad fl">
        	@foreach($ads as $v)
                @if($v->position == 'buttom')
                    <a target="_blank" href="https://sale.vmall.com/welcome.html">
		        		<img src="{{$v->img}}" title="新人频道" style="float:none;">
		        	</a>
                @endif
            @endforeach
        	
        </div>
    </div>
</body>

<script>	

	$('#chulai li').mouseover(function(){
		$(this).children('div').eq(1).attr('class','category-panels category-panels-3');
	
	});

	$('#chulai li').mouseout(function(){
		$(this).children('div').eq(1).attr('class','category-panels category-panels-3 none');
	});
    

   $('.category-info').mouseout(function()
   {
   	  	$(this).removeClass('tyy');
   })

   $('.category-info').mouseover(function()
   {
   	  	$(this).addClass('tyy');
   })
</script>
</html>
