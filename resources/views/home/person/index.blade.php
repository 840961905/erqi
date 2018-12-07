<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            @yield('title')
        </title>
        @section('css')
        <link rel="stylesheet" href="/person/css/index.css" type="text/css">
        <link rel="stylesheet" href="/person/css/per.css" type="text/css">
        <link rel="stylesheet" href="/home/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="/home/css/topfoot.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="/home/fonts/iconfont.css">
        <script src="/home/js/jquery-1.12.4.js" type="text/javascript"></script>
        <script src="/home/js/bootstrap.min.js" type="text/javascript"></script>
        @show
    </head>
    <body>
        <!-- 导航 --><!-- 导航顶部 -->
        <div class="container-fluid" style="padding: 0px;">
            <div class="container" style="margin-bottom: 30px;">
                <div class="row" style="line-height: 30px;">
                    <div class="col-md-8" style="padding: 0px;">
                        <ul class="ul1">
                            <li>
                                <a href="">首页</a> |
                            </li>
                            <li>
                                <a href="">华为官网</a> |
                            </li>
                            <li>
                                <a href="">荣耀官网</a> |
                            </li>
                            <li>
                                <a href="">花粉俱乐部</a> |
                            </li>
                            <li>
                                <a href="">帮助中心</a> |
                            </li>
                            <li>
                                <a href="">V码(优购码)</a> |
                            </li>
                            <li>
                                <a href="">企业购</a> |
                            </li>
                            <li>
                                <a href="">Select Region</a> |
                            </li>
                            <li>
                                <a href="">下载APP</a> |
                            </li>
                            <li>
                                <a href="">更多精彩</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-md-offset-1 hidden-xs hidden-md gongneng" style="padding: 0px;">
                        <ul class="ul2">
                            <li>
                                <a href="">请登录</a> |
                            </li>
                            <li>
                                <a href="">注册</a> |
                            </li>
                            <li>
                                <a href="">我的订单</a> |
                            </li>
                            <li>
                                <a di="gouwu" href="" id="gwc">购物车</a>
                                <div class="shop shopcang"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- 导航顶部结束 --><!-- 导航第二部分 -->
        <div class="container">
            <div class="row">
                <div class="col-md-2 top-0" style="padding: 0;">
                    <img src="/home/images/log1.png" alt="">
                </div>
                <div class="col-md-5 top-1" style="padding: 0;">
                    <a href="list.html">华为专区</a> <a href="">荣耀专区</a> <a href="">HUAWEI P20</a> <a href="">荣耀10</a> <a href="">nova 3i</a> <a href="">荣耀V10</a>
                </div>
            </div>
        </div><!-- 第二部分结束 -->@section('content')
        <div id="base_index" class="mc-index">
            <div class="hr-10"></div>
            <div class="g">
                <!--面包屑 -->
                <div class="breadcrumb-area fcn">
                    <a href="/">首页</a>&nbsp;&gt;&nbsp; <em id="personCenter"><a href="/member/">我的商城</a></em> <em id="pathPoint"></em> <span id="pathTitle"></span>
                </div>
            </div>
            <div class="hr-10"></div>
            <div class="g">
                <div class="fr u-4-5">
                    <div class="fl mc-middle">
                        <!-- 20170824-我的商城-用户信息-start -->
                        <div class="mc-user">
                            <div class="clearfix">
                                <div class="mc-user-card fl">
                                    <div class="user-head fl">
                                        <div class="user-canvas">
                                            <!--未登录时添加class="hide"--><span class="icon-vip-level-0" id="levelIcon"></span>
                                            <div class="canvas-bg">
                                                <div class="canvas-left">
                                                    <div style="transform: rotateZ(-125deg); background: -webkit-gradient(linear, 0 100%, 0 0, from(rgb(240, 92, 32)), to(rgb(245, 133, 85)));"></div>
                                                </div><!--起始度数-121deg为0%，增加度数到0deg时半圈结束-->
                                                <div class="canvas-right">
                                                    <div style="transform: rotateZ(-180deg);"></div>
                                                </div><!--起始度数为为-180deg，增加度数到-59deg时为100%半圈结束-->
                                            </div>
                                        </div>
                                        <p class="user-img">
                                            <img src="https://res.vmallres.com/20181122/images/echannel/misc/img_logged_in.png">
                                        </p>
                                    </div>
                                    <div class="mc-user-info fl">
                                        <div class="name">
                                            182****7193
                                        </div><a href="/member/point" class="link">查看会员权益&nbsp;&gt;</a> <a href="javascript:;" onclick="ec.member.myCenter.perCenter()" class="mc-user-btn">帐号中心</a>
                                    </div>
                                    <div class="mc-user-info fl hide">
                                        <!--未登录--><a href="#" class="mc-user-login-btn">登录／注册</a>
                                        <p>
                                            登陆后可查看您的会员权益
                                        </p>
                                    </div>
                                </div><input type="hidden" id="myUserScores" value="0"> <input type="hidden" id="myGradeCode" value="0"> <input type="hidden" id="minScores" value="0"> <input type="hidden" id="nextNeedScores" value="100">
                                <div class="mc-user-huaban fl">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="/member/newpoint?t=1543825383521" class="p-icon p-icon-1"></a>
                                            <p class="p-dec">
                                                积分
                                            </p>
                                            <p class="p-price">
                                                <span id="balanceicon_myCenter" class="">0</span>分
                                            </p>
                                        </li>
                                        <li>
                                            <a href="/member/coupon?t=1543825383521" class="p-icon p-icon-2"></a>
                                            <p class="p-dec">
                                                优惠券
                                            </p>
                                            <p class="p-price">
                                                <span id="couponicon_myCenter">0</span>张
                                            </p>
                                        </li>
                                        <li>
                                            <a href="/member/balance?t=1543825383521" class="p-icon p-icon-3"></a>
                                            <p class="p-dec">
                                                代金券
                                            </p>
                                            <p class="p-price">
                                                <span id="balanceAmount_myCenter" class="">0.00</span>元
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hr-12"></div>
                            <div class="mc-user-portal">
                                <ul class="clearfix">
                                    <li class="portal-icon-1">
                                        <a href="/member/order?t=1543825383521&amp;type=unpaid"><span id="un_payment"></span>待支付</a> <span id="un_payment_wechat" style="display: none;"></span>
                                    </li>
                                    <li class="portal-icon-2">
                                        <a href="/member/order?t=1543825383521&amp;type=send"><span id="un_received"></span>待收货</a> <span id="un_received_wechat" style="display: none;"></span>
                                    </li>
                                    <li class="portal-icon-3">
                                        <a href="/member/order?t=1543825383521&amp;type=nocomment"><span id="un_remark"></span>待评价</a>
                                    </li>
                                    <li class="portal-icon-4">
                                        <a href="/member/exchange?t=1543825383521">退换货</a>
                                    </li>
                                    <li class="portal-icon-5">
                                        <a href="/member/recycle/index/aihuishou?t=1543825383521">回收单</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- 20170824-我的商城-用户信息-end --><!-- 20170822-我的商城-我的消息-start -->
                        <div class="mynews">
                            <div class="hr-30"></div>
                            <div class="mc-title">
                                <h3>
                                    我的消息
                                </h3>
                            </div>
                            <div class="mynews-list">
                                <!--1.到货通知 2.发货通知 3.待支付 4.左图右文 5.全图 6、电子发票提醒 其中4.5是系统消息--><!--全图-->
                                <div class="my_center">
                                    <input type="hidden" value="{&quot;wapUrl&quot;:&quot;https://msale.vmall.com/hwmate.html&quot;,&quot;webUrl&quot;:&quot;https://sale.vmall.com/hwmate.html&quot;,&quot;appUrl&quot;:&quot;https://asale.vmall.com/hwmate.html&quot;,&quot;webPicUrl&quot;:&quot;/recommendmsg/2018102703412076.png&quot;,&quot;mobilePicUrl&quot;:&quot;/recommendmsg/2018102703418474.png&quot;}"> <a href="https://sale.vmall.com/hwmate.html" class="banner" target="_blank" onclick="pushMyNewsProMsg("><img src="https://res0.vmallres.com/pimages//recommendmsg/2018102703412076.png"></a>
                                </div><!--全图-->
                                <div class="my_center">
                                    <input type="hidden" value="{&quot;wapUrl&quot;:&quot;https://m.vmall.com/product/10086983017283.html&quot;,&quot;webUrl&quot;:&quot;https://www.vmall.com/product/10086983017283.html&quot;,&quot;appUrl&quot;:&quot;https://mw.vmall.com/product/10086983017283.html?prdId=10086983017283&amp;page=productDetail&quot;,&quot;webPicUrl&quot;:&quot;/recommendmsg/2018111307461006.jpg&quot;,&quot;mobilePicUrl&quot;:&quot;/recommendmsg/2018111307469805.jpg&quot;}"> <a href="https://www.vmall.com/product/10086983017283.html" class="banner" target="_blank" onclick="pushMyNewsProMsg("><img src="https://res0.vmallres.com/pimages//recommendmsg/2018111307461006.jpg"></a>
                                </div><!--全图-->
                                <div class="my_center">
                                    <input type="hidden" value="{&quot;wapUrl&quot;:&quot;https://msale.vmall.com/smarthome.html&quot;,&quot;webUrl&quot;:&quot;https://sale.vmall.com/smarthome.html&quot;,&quot;appUrl&quot;:&quot;https://asale.vmall.com/smarthome.html&quot;,&quot;webPicUrl&quot;:&quot;/recommendmsg/krh9hzlR3Wmk3fUbYH8G.png&quot;,&quot;mobilePicUrl&quot;:&quot;/recommendmsg/ayHze8oWXcQvLUehh70H.png&quot;}"> <a href="https://sale.vmall.com/smarthome.html" class="banner" target="_blank" onclick="pushMyNewsProMsg("><img src="https://res0.vmallres.com/pimages//recommendmsg/krh9hzlR3Wmk3fUbYH8G.png"></a>
                                </div><!--左图右文-->
                                <div class="mynews-list-area my_center service_type_4">
                                    <div class="m-image">
                                        <input type="hidden" value="{&quot;wapUrl&quot;:&quot;https://msale.vmall.com/hwpj.html&quot;,&quot;webUrl&quot;:&quot;https://sale.vmall.com/hwpj.html&quot;,&quot;appUrl&quot;:&quot;https://asale.vmall.com/hwpj.html&quot;,&quot;webPicUrl&quot;:&quot;/recommendmsg/2018102710179172.jpg&quot;,&quot;mobilePicUrl&quot;:&quot;/recommendmsg/2018102710172431.jpg&quot;}"> <img src="https://res0.vmallres.com/pimages//recommendmsg/2018102710179172.jpg">
                                    </div>
                                    <div class="m-title">
                                        <em class="m-info">华为车载充电器</em> <em class="m-name">为你推荐</em> <em class="m-time">2018-10-27 10:17</em>
                                    </div>
                                    <p class="m-detail">
                                        开车充电30分钟，从容一整天，晒单有机会赢3999携程礼品卡
                                    </p><a href="https://sale.vmall.com/hwpj.html" class="button-1 mynews-list-btn" target="_blank" onclick="pushMyNewsProMsg('华为车载充电器',this,0)">查看详情</a>
                                </div><!--左图右文-->
                                <div class="mynews-list-area my_center service_type_4">
                                    <div class="m-image">
                                        <input type="hidden" value="{&quot;wapUrl&quot;:&quot;https://msale.vmall.com/hwpj.html&quot;,&quot;webUrl&quot;:&quot;https://sale.vmall.com/hwpj.html&quot;,&quot;appUrl&quot;:&quot;https://asale.vmall.com/hwpj.html&quot;,&quot;webPicUrl&quot;:&quot;/recommendmsg/2018102710162474.jpg&quot;,&quot;mobilePicUrl&quot;:&quot;/recommendmsg/2018102710168590.jpg&quot;}"> <img src="https://res0.vmallres.com/pimages//recommendmsg/2018102710162474.jpg">
                                    </div>
                                    <div class="m-title">
                                        <em class="m-info">华为无线充电器</em> <em class="m-name">为你推荐</em> <em class="m-time">2018-10-27 10:16</em>
                                    </div>
                                    <p class="m-detail">
                                        仅售99元起，支持HUAWEI Mate 20 pro 15W及iPhone系列 7.5W快充，晒单
                                    </p><a href="https://sale.vmall.com/hwpj.html" class="button-1 mynews-list-btn" target="_blank" onclick="pushMyNewsProMsg('华为无线充电器',this,0)">查看详情</a>
                                </div>
                                <div class="f">
                                    <a href="javascript:;" class="button-fold button-fold-shrink hide">收起我的消息</a> <!--展开class="button-fold-expand"--> <a href="javascript:;" class="button-fold button-fold-expand hide">更多历史消息</a>
                                </div>
                            </div>
                        </div><!-- 20170822-我的商城-我的消息-end --><!-- 20170826-我的商城-最近浏览-start -->
                        <div class="mc-rolling" style="display: none;">
                            <div class="mc-title">
                                <h3>
                                    最近浏览
                                </h3>
                            </div>
                            <div class="hr-20"></div>
                            <div class="goods-rolling relative swiper-container" id="mc-rolling-history">
                                <ul class="grid-list clearfix swiper-wrapper"></ul>
                                <div class="grid-btn btn-prev swiper-button-prev disabled"></div>
                                <div class="grid-btn btn-next swiper-button-next"></div>
                            </div>
                        </div><!-- 20170825-我的商城-最近浏览-end -->
                    </div>
                    <div class="fr mc-right">
                        <a href="https://sale.vmall.com/welcome.html" target="_blank"><img src="https://res.vmallres.com/pimages//sale/2018-07/20180718165254411.jpg" title="新人见面礼.jpg" style="float:none;"></a>
                        <div class="hr-20"></div>
                        <div class="mc-title">
                            <h3>
                                会员推荐
                            </h3>
                        </div>
                        <div class="hr-20"></div>
                        <div class="mc-recommend-banner">
                            <a href="https://www.vmall.com/privilege" target="_blank"><img src="%20https://res.vmallres.com/pimages//notice/2017/20170922191552609.jpg"></a> <a href="https://www.vmall.com/privilege" target="_blank"><img src="https://res.vmallres.com/pimages//notice/2017/20170922191631928.jpg"></a> <a href="https://www.vmall.com/privilege" target="_blank"><img src="%20https://res.vmallres.com/pimages//notice/2017/2017092219165256.jpg"></a> <a href="https://www.vmall.com/recycle?url=%3Fpid%3D1032" target="_blank"><img src="https://res.vmallres.com/pimages//notice/2017/20170922191711677.jpg"></a>
                        </div>
                    </div>
                    <script type="text/javascript">
                    var accountCenterUrl="https://hwid1.vmall.com/oauth2/userCenter/hwAccount?reqClientType=26&loginChannel=26000000&themeName=cloudTheme&lang=zh-cn";
                    ec.ready(function() {
                    //加载最近浏览历史
                    ec.product.history.load(function(list){
                    var html = [], p;
                    $(".fl.u-1-5").after($("#history-ftl").val());
                    if(!list || list.length ==0)
                    {
                    $(".mc-rolling").hide();
                    $(".mc-rolling ul").html("");
                    return;
                    }
                    for(var i = 0 ; i < list.length ; i++)
                    {
                    p = list[i];
                    html.push('<li class="grid-items swiper-slide"><a class="thumb" target="_blank" href="/product/'+p.id+'.html" title="'+p.briefName+'">');
                    html.push('<p class="grid-img"><img src="'+ec.mediaPath+p.photoPath+'428_428_'+p.photoName+'" alt="'+p.briefName+'"/><\/p>');
                    html.push('<h3 class="grid-title"><span>'+p.name+'<\/span><\/h3>');
                    html.push('<\/a><\/li>');
                    }
                    $(".mc-rolling ul").html(html.join(""));
                    $(".mc-rolling").show();

                    var len = $('.swiper-slide').length;
                    if(len<=4){
                    $('.swiper-button-next').addClass('disabled');
                    $('.swiper-button-prev').addClass('disabled');
                    }else{
                    $('.swiper-button-next').removeClass('disabled');
                    }
                    //是否需要左右滚动
                    var mySwiper = new Swiper('.swiper-container', {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    });
                    //  左边箭头
                    $('.swiper-button-prev').click(function(){
                    //      插件向左切换效果
                    mySwiper.swipePrev();
                    })
                    //  右边箭头
                    $('.swiper-button-next').click(function(){
                    mySwiper.swipeNext();
                    })

                    } );
                    });
                    //遍历type=4 左图右文extendParam下面的值
                    $(".service_type_4 input").each(function(){
                    var jsonStr_4=$(this).val();
                    if(jsonStr_4 != ""){
                    var obj_4 = JSON.parse(jsonStr_4);
                    $(this).parent().parent().find(".m-image img").attr("src","https://res0.vmallres.com/pimages/"+obj_4.webPicUrl);
                    $(this).parent().parent().children("a:last-child").attr("href",obj_4.webUrl);
                    }
                    })
                    //遍历type=5 全图extendParam下面的值
                    $(".my_center input").each(function(){
                    var jsonStr_5=$(this).val();
                    if(jsonStr_5 != ""){
                    var obj_5 = JSON.parse(jsonStr_5);
                    $(this).parent().find("a img").attr("src","https://res0.vmallres.com/pimages/"+obj_5.webPicUrl);
                    $(this).parent().find("a").attr("href",obj_5.webUrl);
                    }
                    })

                    //遍历type=1 到货通知extendParam下面的值
                    $(".mynews-list-area-2 input").each(function(){
                    var jsonStr_1=$(this).val();
                    if(jsonStr_1 != ""){
                    var obj_1 = JSON.parse(jsonStr_1);
                    $(this).parent().children("a:last-child").attr("href","https://www.vmall.com/product/"+obj_1.prdId+".html");
                    }
                    })
                    //遍历type=2 发货通知extendParam下面的值
                    $(".mynews-list-area-1 input").each(function(){
                    var jsonStr_2=$(this).val();
                    if(jsonStr_2 != ""){
                    var obj_2 = JSON.parse(jsonStr_2);
                    $(this).parent().children("a:last-child").attr("href","https://www.vmall.com/member/order-"+obj_2.orderCode);
                    }
                    })
                    //遍历type=3 代付款extendParam下面的值
                    //$(".mynews-list-area-3 input").each(function(){
                    //var jsonStr_3=$(this).val();
                    //if(jsonStr_3 != ""){
                    //var obj_3 = JSON.parse(jsonStr_3);
                    //$(this).parent().children("a:last-child").attr("href","https://www.vmall.com/member/order-"+obj_3.orderCode);
                    //}
                    //})
                    //遍历type=6 电子发票extendParam下面的值
                    $(".mynews-list-area-5 input").each(function(){
                    var jsonStr_6=$(this).val();
                    if(jsonStr_6 != ""){
                    var obj_6 = JSON.parse(jsonStr_6);
                    $(this).parent().children("a:last-child").attr("href","https://www.vmall.com/member/order-"+obj_6.orderCode);
                    }
                    })

                    //  展开收起效果
                    var mynewsLenth = $('.mynews-list .my_center').length;
                    //  超过五个就隐藏掉
                    if(mynewsLenth > 5){
                    $('.button-fold-expand').show();
                    overHide();
                    }
                    function overHide(){
                    for(var i=5;i<mynewsLenth;i++){
                    $('.mynews-list .my_center').eq(i).hide();
                    }
                    }
                    //  展开更多消息
                    $('.button-fold-expand').click(function(){
                    $('.button-fold-expand').hide();
                    $('.mynews-list .my_center').show();
                    $('.button-fold-shrink').show();
                    })
                    //  收起更多消息
                    $('.button-fold-shrink').click(function(){
                    $('.button-fold-shrink').hide();
                    $('.mynews-list .my_center').show();
                    $('.button-fold-expand').show();
                    overHide();
                    })

                    //为你推荐数据上报
                    function pushMyNewsProMsg(name,dom,type)
                    {   
                    var adid = "";
                    var url = "";
                    //左图右文：0,全图：1
                    if(type == 0)
                    {
                    adid = $(dom).parent().find(".m-image img").attr("src");
                    url = $(dom).parent().children("a:last-child").attr("href");
                    }
                    else if(type == 1)
                    {
                    adid = $(dom).find("a img").attr("src");
                    url = $(dom).find("a").attr("href");;
                    }
                    var value = {
                    "UID":ec.util.cookie.get("uid"),
                    "TID":getPtid(),
                    "TIME":getTime(),
                    "CONTENT":
                    {
                    "name":name,
                    "ADID":adid,
                    "URL":url,
                    "click":"1"
                    }

                    };
                    ec.account.dapPushMsg("300140101",value,"click");
                    ec.code.addAnalytics({hicloud:true});
                    _paq.push(["trackLink","300140101", "link", value]);
                    }

                </script> 
                <script src="https://res9.vmallres.com/20181122/js/uum/member/index/index.min.js?20141025" type="text/javascript">
                </script> 
                <script id="jsapi_loader4" loadtype="insert" type="text/javascript" src="https://res9.vmallres.com/20181122/js/common/base/jquery.form-2.49.js" charset="utf-8">
                </script> 
                <script type="text/javascript">
                (function(){var time = 0,el = document.getElementById('jsapi_loader4');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader4 fail!');} return; }ol._setLoadStatus("jquery.form","complete");})();
                </script> 
                <script id="jsapi_loader5" loadtype="insert" type="text/javascript" src="https://res9.vmallres.com/20181122/js/common/base/ajax.js" charset="utf-8">
                </script> 
                <script type="text/javascript">
                (function(){var time = 0,el = document.getElementById('jsapi_loader5');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader5 fail!');} return; }ol._setLoadStatus("ajax","complete");})();
                </script> <script src="https://res9.vmallres.com/20181122/js/uum/member/zhima/zhima.min.js?20170323" type="text/javascript">
                </script> 
                <script src="https://res9.vmallres.com/20181122/js/echannel/swiper.min.js" type="text/javascript">
                </script>
                </div>
                <div class="fl u-1-5">
                    <!-- 20170823-左边菜单-start -->
                    <div class="mc-menu-area">
                        <div class="h">
                            <a href="/member?t=1543825383522"><span>我的商城</span></a>
                        </div>
                        <div class="b">
                            <ul>
                                <li>
                                    <h3 class="icon-mc-mail">
                                        <a href="/member/msg?t=1543825383522"><span id="li-msg">消息中心</span></a>
                                    </h3>
                                </li>
                                <li>
                                    <h3 class="icon-mc-help">
                                        <a href="https://www.vmall.com/help/index.html" target="_blank"><span>帮助中心</span></a>
                                    </h3>
                                </li>
                                <li>
                                    <h3 class="icon-mc-order">
                                        <span>订单中心</span>
                                    </h3>
                                    <ol>
                                        <li id="li-order">
                                            <a href="/member/order?t=1543825383522"><span>我的订单</span></a>
                                        </li>
                                        <li id="li-order-small" style="display: none;"></li>
                                        <li id="li-exchange">
                                            <a href="/member/exchange?t=1543825383522"><span>我的退换货</span></a>
                                        </li>
                                        <li id="li-refunds">
                                            <a href="/member/refunds?t=1543825383522"><span>我的退款</span></a>
                                        </li>
                                        <li id="li-recover">
                                            <a href="/member/recycle/index/aihuishou?t=1543825383522"><span>我的回收单</span></a>
                                        </li>
                                        <li id="li-prdRemark">
                                            <a href="/member/prdRemarkView?t=1543825383522"><span>商品评价</span></a>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <h3 class="icon-mc-asset">
                                        <span>我的资产</span>
                                    </h3>
                                    <ol>
                                        <li id="li-newpoint">
                                            <a href="/member/newpoint?t=1543825383522"><span>我的积分</span></a>
                                        </li>
                                        <li id="li-coupon">
                                            <a href="/member/coupon?t=1543825383522"><span>我的优惠券</span></a>
                                        </li>
                                        <li id="li-balance">
                                            <a href="/member/balance?t=1543825383522"><span>我的代金券</span></a>
                                        </li>
                                        <li id="li-petal">
                                            <a href="/member/petal?t=1543825383522"><span>我的花瓣</span></a>
                                        </li>
                                        <li id="li-point">
                                            <a href="/member/point?t=1543825383522"><span>等级与特权</span></a>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <h3 class="icon-mc-support">
                                        <span>购买支持</span>
                                    </h3>
                                    <ol>
                                        <li id="li-myAddress">
                                            <a href="/member/myAddress?t=1543825383522"><span>收货地址管理</span></a>
                                        </li>
                                        <li id="li-authentication">
                                            <a href="/authmember/accesstoken?t=1543825383522"><span>实名认证</span></a>
                                        </li>
                                        <li id="li-myAppointment">
                                            <a href="/member/myAppointment?t=1543825383522"><span>我的预约</span></a>
                                        </li>
                                        <li id="li-notification">
                                            <a href="/member/notification?t=1543825383522"><span>到货通知</span></a>
                                        </li>
                                        <li id="li-myeasybuy">
                                            <a href="/member/myeasybuy?t=1543825383522"><span>我的优享购</span></a>
                                        </li>
                                        <li id="li-enterprise" class="hide"></li><!-- 优惠内购 -->
                                        <li id="li-o2o" class="hide">
                                            <a href="/o2o?t=1543825383522"><span>O2O商城</span></a>
                                        </li>
                                    </ol>
                                </li>
                                <li id="li-company" class="hide" style="display: none;">
                                    <h3 class="icon-mc-business">
                                        <span>企业购</span>
                                    </h3>
                                    <ol>
                                        <li id="li-companyUserInfo"></li>
                                        <li id="li-companyOrder"></li>
                                        <li id="li-companyOrderList"></li>
                                        <li id="li-companyQues"></li>
                                    </ol>
                                </li>
                            </ul>
                        </div>
                    </div><!-- 20170823-左边菜单-end -->
                    <script src="https://res9.vmallres.com/20181122/js/company/leftMenu.js?20170531" type="text/javascript"></script>
                </div>
            </div>
            <div class="hr-80"></div>
        </div>@show <!-- 页尾部 -->
        <div class="container-fluid footer">
            <div class="kuo">
                <!-- 第一行 -->
                <div class="row onerow">
                    <div class="col-md-3">
                        <a href="" style="height: 38px;">百强企业 质量保证</a>
                    </div>
                    <div class="col-md-3">
                        <a href="">7天退货 15天换货</a>
                    </div>
                    <div class="col-md-3">
                        <a href="">48元免费起运</a>
                    </div>
                    <div class="col-md-3">
                        <a href="">448家维修网点 全国联保</a>
                    </div>
                </div><!-- 第一行结束 --><!-- 第二行 -->
                <div class="row onetwo">
                    <div class="col-md-1 d1 v1">
                        <ul>
                            <li>
                                <img src="/home/images/hengxian.png" alt="">
                            </li>
                            <li>
                                <p>
                                    购物相关
                                </p>
                            </li>
                            <li>
                                <a id="ah" href="">购物指南</a>
                            </li>
                            <li>
                                <a id="ah" href="">配送方式</a>
                            </li>
                            <li>
                                <a id="ah" href="">支付方式</a>
                            </li>
                            <li>
                                <a id="ah" href="">常见问题</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 d1 v2">
                        <ul>
                            <li>
                                <img src="/home/images/hengxian.png" alt="">
                            </li>
                            <li>
                                <p>
                                    保修与退货
                                </p>
                            </li>
                            <li>
                                <a id="ah" href="">保修政策</a>
                            </li>
                            <li>
                                <a id="ah" href="">退换货政策</a>
                            </li>
                            <li>
                                <a id="ah" href="">退换货流程</a>
                            </li>
                            <li>
                                <a id="ah" href="">保修状态查询</a>
                            </li>
                            <li>
                                <a id="ah" href="">配件防伪查询</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 d1 v3">
                        <ul>
                            <li>
                                <img src="/home/images/hengxian.png" alt="">
                            </li>
                            <li>
                                <p>
                                    维修与技术支持
                                </p>
                            </li>
                            <li>
                                <a id="ah" href="">售后网点</a>
                            </li>
                            <li>
                                <a id="ah" href="">预约维修</a>
                            </li>
                            <li>
                                <a id="ah" href="">手机寄修</a>
                            </li>
                            <li>
                                <a id="ah" href="">备件价格查询</a>
                            </li>
                            <li>
                                <a id="ah" href="">上门服务</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 d1 v4">
                        <ul>
                            <li>
                                <img src="/home/images/hengxian.png" alt="">
                            </li>
                            <li>
                                <p>
                                    关于我们
                                </p>
                            </li>
                            <li>
                                <a id="ah" href="">公司介绍</a>
                            </li>
                            <li>
                                <a id="ah" href="">华为商城简介</a>
                            </li>
                            <li>
                                <a id="ah" href="">华为线下门店</a>
                            </li>
                            <li>
                                <a id="ah" href="">荣耀线下门店</a>
                            </li>
                            <li>
                                <a id="ah" href="">诚征英才</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 d1 v5">
                        <ul>
                            <li>
                                <img src="/home/images/hengxian.png" alt="">
                            </li>
                            <li>
                                <p>
                                    关注我们
                                </p>
                            </li>
                            <li>
                                <a id="ah" href="">新浪微博</a>
                            </li>
                            <li>
                                <a id="ah" href="">腾讯微博</a>
                            </li>
                            <li>
                                <a id="ah" href="">花粉俱乐部</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 d1 v6">
                        <ul>
                            <li>
                                <img src="/home/images/hengxian.png" alt="">
                            </li>
                            <li>
                                <p>
                                    友情链接
                                </p>
                            </li>
                            <li>
                                <a id="ah" href="">华为集团</a>
                            </li>
                            <li>
                                <a id="ah" href="">华为CBG官网</a>
                            </li>
                            <li>
                                <a id="ah" href="">荣耀官网</a>
                            </li>
                            <li>
                                <a id="ah" href="">花粉俱乐部</a>
                            </li>
                            <li>
                                <a id="ah" href="">网站地图</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-md-offset-3 d1 v7" style="border: red">
                        <ul>
                            <li>
                                <img src="/home/images/hengxian.png" alt="">
                            </li>
                            <li style="list-style: none; display: inline">
                                <p>
                                    400-088-6888
                                </p>
                                <h4>
                                    24小时客服热线(仅收市话费)
                                </h4>
                                <div class="bj">
                                    <a href="">在线客服</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid zuibottom">
            <div class="fengyin">
                <div class="row d1">
                    <div class="col-md-1 jieshu1">
                        <a href=""><img src="/home/images/flogo.png" alt=""></a>
                    </div>
                    <div class="col-md-6">
                        <div class="row nei1" style="margin-top: 20px;">
                            <a href="">隐私声明</a> <a href="">服务协议</a> <span>Copyright@ 2012-2018 华为软件技术有限公司 版权所有 保留一切权利</span>
                        </div>
                        <div class="row nei2">
                            <span>公安备案</span> <a href="">苏公安网安备320111402010009号</a> <span>|</span> <a href="">苏ICP备170430376</a> <span>|</span> <span>增值电信业务经营许可证:苏B2-20130048号 |</span>
                        </div>
                    </div>
                    <div class="col-md-4 jeishu666" style="padding-top:30px;padding-left:100px;margin-left:70px;">
                        <a href="http://"><img src="/home/images/dibu1.jpg" alt=""></a> <a href=""><img src="/home/images/dibu2.png" alt="" style="width: 70px;"></a> <a href=""><img src="/home/images/dibu3.png" alt="" style="width: 70px;"></a> <a href=""><img src="/home/images/dibu4.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div><!-- 页尾部结束 -->@section('script')<script type="text/javascript">
    //  滚动条
            console.log($('.yingcang li:first').show()) setInterval(function() {
                $('.djs li:first').slideUp(800,
                function() {
                    $(' .djs li:first').appendTo($('.yincang')).show()
                })
            },
            1000)
            // 滚动条结束
            // 鼠标移入事件 滚动回顶部
            console.log($('#daohang')) $('#daohang').mousemove(function() {
                $('#zuo').show() $('#you').show()

            }) $('#daohang').mouseout(function() {
                setTimeout(function() {
                    $('#zuo').hide() $('#you').hide()
                },
                1000)

            })

            $(document).scroll(function() {
                var ss = $(document).scrollTop() if (ss > 1000) {
                    $('#top').show()
                } else {
                    $('#top').hide()
                }
            })

            $('#top').click(function() {
                $('html').animate({
                    scrollTop: 0
                },
                1500)
            })
            //结束
            //购物车个显示时间功能
            $('#gwc').mousemove(function() {
                $('.shop').addClass('shopchu')
            }) $('#gwc').mouseout(function() {
                setTimeout(function() {
                    $('.shop').removeClass('shopchu')

                },
                3000);
            })
            //广告特效
            var s = 1;
            setInterval(function() {
                var zz = "./images/guanggao" + s + ".jpg"$('.texiao img').attr("src", zz) s++;
                if (s > 6) {
                    s = 1;
                };
            },
            800)
        </script>
        @show
    </body>
</html>