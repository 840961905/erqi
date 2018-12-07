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