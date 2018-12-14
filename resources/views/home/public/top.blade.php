<div class="shortcut">
	    <div class="layout">
	        <div class="s-sub">
	            <ul>
	                 <li>
	                    <a href="/" onclick="pushHeaderMsg('首页','www.vmall.com')">
	                        首页
	                    </a>
	                </li>
	                <li>
	                    <a href="javascript:;" target="_blank" onclick="pushHeaderMsg('华为官网','http://consumer.huawei.com/cn/')">
	                        华为官网
	                    </a>
	                </li>
	                <li>
	                    <a href="javascript:;" target="_blank" onclick="pushHeaderMsg('荣耀官网','http://www.honor.cn/')">
	                        荣耀官网
	                    </a>
	                </li>
	                <li>
	                    <a href="javascript:;" target="_blank" onclick="pushHeaderMsg('花粉俱乐部','http://club.huawei.com')">
	                        花粉俱乐部
	                    </a>
	                </li>
	                <li>
	                    <a href="javascript:;" rel="nofollow" onclick="pushHeaderMsgPriority('V码(优购码)','www.vmall.com/priority')">
	                        V码(优购码)
	                    </a>
	                </li>
	                <li>
	                    <a href="javascript:;" target="_blank">
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
	                        @if(session('userid'))
	                        <div class="header-toolbar-item">
	                            <div class="i-login">
	                                <div class="h">
	                                    <div class="">
	                                        <a href="javascript:;">
	                                            &nbsp;&nbsp;欢迎{{session('aname')}}登陆本网站
	                                        </a>
	                                        <a href="/home/person">个人中心</a>
	                                        <a href="/home/logout">退出</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        @else
	                        <div class="header-toolbar-item">
	                            <div class="i-login">
	                                <div class="h">
	                                    <div class="">
	                                        <script>
	                                            document.write('<a id="top-index-loginUrl" href="/home/login" rel="nofollow" onclick="pushLoginMsgInfoPerson(\'登录\',\'\')">请登录</a>');
	                                        </script>
	                                        
	                                        <a href="/home/zhuce">
	                                            &nbsp;&nbsp;注冊
	                                        </a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        @endif
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
	                                                <a href="javascript:;" rel="nofollow"
	                                                timetype="timestamp" target="_blank" onclick="pushLoginMsg('已登录','头像')">
	                                                    <img id="customerPic" src="https://res.vmallres.com/20181122/images/echannel/misc/img_not_logged_in.png"
	                                                    alt="默认头像" imgpath="https://res.vmallres.com/20181122/images">
	                                                </a>
	                                            </p>
	                                        </div>
	                                        <div class="user-info fl">
	                                            <a href="javascript:;" rel="nofollow"
	                                            target="_blank" onclick="pushLoginMsg('已登录','用户名')">
	                                                <div class="user-info-name" id="up_loginName_info">
	                                                </div>
	                                            </a>
	                                            <div class="user-info-detail clearfix" id="vip-info">
	                                                <a id="authentication_y" class="icon-realname hide">
	                                                    已实名
	                                                </a>
	                                                <a id="authentication_n" href="javascript:;"
	                                                rel="nofollow" class="icon-realname disabled hide" onclick="pushLoginMsg('已登录','未实名')">
	                                                    未实名
	                                                </a>
	                                                <a class="icon-mail" href="javascript:;"
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
	                                                <a class="fr" href="javascript:;"
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
	                                                    <a href="javascript:;" rel="nofollow"
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
	                                        <a href="javascript:;" rel="nofollow">
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
	                                        <a href="javascript:;" target="_blank">
	                                            帮助中心
	                                        </a>
	                                    </dt>
	                                    <dt>
	                                        <a href="/customer">
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
	                            <a href="/" target="_blank" class="icon-dropdown">
	                                网站导航
	                            </a>
	                        </div>
	                        <div class="b">
	                            <div class="dropdown-navs clearfix">
	                                <p>
	                                    <a href="javascript:;">
	                                    </a>
	                                </p>
	                                <div class="dropdown-navs-icon">
	                                    <a href="/">
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
	                                            <a href="/types/1" target="_blank">
	                                                华为专区
	                                            </a>
	                                        </div>
	                                        <div class="item">
	                                            <a href="/types/1" target="_blank">
	                                                荣耀专区
	                                            </a>
	                                        </div>
	                                        <div class="item">
	                                            <a href="/types/1" target="_blank">
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
	                                            <a href="/types/1" target="_blank">
	                                                手机
	                                            </a>
	                                        </div>
	                                        <div class="item">
	                                            <a href="/types/3" target="_blank">
	                                                智能家居
	                                            </a>
	                                        </div>
	                                        <div class="item">
	                                            <a href="/types/2" target="_blank">
	                                                平板&amp;笔记本
	                                            </a>
	                                        </div>
	                                        <div class="item">
	                                            <a href="/types/4" target="_blank">
	                                                通用配件
	                                            </a>
	                                        </div>
	                                        <div class="item">
	                                            <a href="/types/5" target="_blank">
	                                                智能穿戴
	                                            </a>
	                                        </div>
	                                        <div class="item">
	                                            <a href="/types/6" target="_blank">
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
	                                            <a href="/shop/1" target="_blank">
	                                                以旧换新
	                                            </a>
	                                        </div>
	                                        <div class="item">
	                                            <a href="/shop/1" target="_blank">
	                                                礼品包装
	                                            </a>
	                                        </div>
	                                        <div class="item">
	                                            <a href="/shop/1" target="_blank">
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
	                                            <a href="/shop/1" target="_blank">
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
	                                    <a href="/" target="_blank" onclick="pushHeaderMsg('下载客户端img','https://www.vmall.com/appdownload')">
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
	                    <a href="/cart" timetype="timestamp">
	                        购物车({{count($shop)}})
	                    </a>
	                </li>
	            </ul>
	        </div>
	    </div>
</div>