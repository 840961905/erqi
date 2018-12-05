<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>
  <link rel="stylesheet" href="/homes/css/app.ee7a1ed.css">
  <script src="/homes/js/jquery-3.2.1.min.js"></script>
  <style>
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
      .topBox {
          width: 360px;
          height: 160px;
          margin-left: -180px;
          margin-top: -80px;
          display: none;
          border: 5px solid #b2b2b2;
          overflow: hidden;
          padding: 0;
          position: fixed;
          z-index: 10000002;
          left: 50%;
          top: 50%;
          background: #fff;
      }
      .topTitle {
          background: #ca141d;
          border-bottom: 1px solid #c4c4c4;
          border-top: 0;
          font: bold 14px/28px Arial,Helvetica,sans-serif,'宋体';
          padding-left: 10px;
          color: #fff;
      }

      .popCloseBtn {
          background: url(/homes/img/bg.png) no-repeat -20px -459px;
          display: block;
          font-size: 0;
          height: 15px;
          line-height: 100px;
          overflow: hidden;
          position: absolute;
          right: 12px;
          top: 7px;
          width: 15px;
          z-index: 100000;
          cursor: pointer;
      }
      .tc {
          text-align: center;
      }
      .mt13 {
          margin-top: 10px;
      }
      .p20 {
          padding: 20px;
      }

      .popBtn {
          margin-left: 86px;
      }

      .clearfix {
          display: block;
      }

      .popBuyNowBtn {
          background: #ca141d;
          border-color: 1px solid #ddd;
          color: #fff;
          font-size: 14px;
          text-align: center;
          padding: 0 10px;
          display: inline-block;
          float: left;
          line-height: 30px;
          height: 30px;
          font-weight: bold;
          cursor: pointer;
          width: 75px;
      }

      .pobAddCartBtn {
          background: #fafafa;
          border-color:#ca141d;
          color: #3a3a3a;
          border: 1px solid #ddd;
          font-size: 14px;
          text-align: center;
          padding: 0 10px;
          display: inline-block;
          float: left;
          line-height: 30px;
          height: 30px;
          font-weight: bold;
          cursor: pointer;
          width: 75px;

      }

      .ml10 {
          margin-left: 10px;
      }

     
      .mt20{
        margin-top: 20px;
      }

      

  </style>
</head>
<body>
    <div id="app">
        <div class="sc">
            <!-- 最上面的一条 -->
            <div class="shortcut">
                <div class="layout">
                    <div class="s-sub">
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    首页
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    华为官网
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    荣耀官网
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    花粉俱乐部
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    帮助中心
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    V码(优购码)
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    企业购
                                </a>
                            </li>
                            <!---->
                            <li>
                                <a href="javascript:;">
                                    Select Region
                                </a>
                            </li>
                            <li>
                                <div class="s-dropdown">
                                    <div class="h">
                                        <a class="icon-dropdown">
                                            下载APP
                                        </a>
                                    </div>
                                    <div class="b">
                                        <div class="dropdown-more">
                                            <div class="code">
                                                <a href="/appdownload" target="_blank">
                                                    <img src="/homes/img/qrcode_vmall_new_app01.png">
                                                </a>
                                                <p>
                                                    扫一扫，
                                                    <a href="/appdownload" target="_blank">
                                                        下载客户端
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="s-dropdown">
                                    <div class="h">
                                        <a class="icon-dropdown">
                                            更多精彩
                                        </a>
                                    </div>
                                    <div class="b">
                                        <div class="dropdown-more">
                                            <dt>
                                                <a href="http://emui.huawei.com/cn/" target="_blank">
                                                    EMUI
                                                </a>
                                            </dt>
                                            <dt>
                                                <a href="http://appstore.huawei.com/" target="_blank">
                                                    应用市场
                                                </a>
                                            </dt>
                                            <dt>
                                                <a href="http://cloud.huawei.com" target="_blank">
                                                    华为终端云空间
                                                </a>
                                            </dt>
                                            <dt>
                                                <a href="http://developer.huawei.com/" target="_blank">
                                                    开发者联盟
                                                </a>
                                            </dt>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="s-main s-main-no-minicart">
                        <ul>
                            <li>
                                <div class="header-toolbar">
                                    <div class="header-toolbar-item">
                                        <div class="i-login">
                                            <div class="h">
                                                <a href="javascript:;" rel="nofollow">
                                                    请登录
                                                </a>
                                                <a href="/account/register" rel="nofollow">
                                                    &nbsp;&nbsp;注册
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="/member/order" timetype="timestamp" target="_blank">
                                    我的订单
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!---->
            </div>

            <!-- 头部 -->
            <div class="header order-header">
                <div class="layout">
                    <div class="left">
                        <div class="logo logo-word">
                            <a href="/" title="华为商城">
                                <img src="/homes/img/20170703105852645577.png"
                                alt="华为商城">
                            </a>
                            <span>
                                我的购物车
                            </span>
                        </div>
                    </div>
                    <div class="right">
                        <div class="progress-area progress-area-3">
                            <div id="progress-cart" class="progress-sc-area">
                                我的购物车
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 中间 -->
            <div class="layout ">
                <div class="login-prompt">
                    您还没有登录！登录后可查看之前加入的商品
                    <a href="javascript:;" rel="nofollow">
                        登录
                    </a>
                </div>
                <!---->
                <div class="hr-20">
                </div>
                <div class="sall">
                    <div class="sc-list">
                        <div class="sc-pro-title clearfix">
                            <label class="checkbox">
                                
                                <span id="all">全选</span>
                            </label>
                            <ul class="clearfix">
                                <li>
                                    商品
                                </li>
                                <li>
                                    单价
                                </li>
                                <li>
                                    数量
                                </li>
                                <li>
                                    小计
                                </li>
                                <li>
                                    操作
                                </li>
                            </ul>
                        </div>
                        <form id="cart-form" autocomplete="off" method="get">
                            <div class="sc-pro">
                                @foreach($res as $k=>$v)
                                <div class="divs" id="shop_{{$v->id}}">
                                    <div class="sc-pro-list clearfix">
                                        <label class="checkbox">
                                            <input type="checkbox" class="vam che" gid="{{$v->id}}">
                                        </label>
                                        <div class="sc-pro-area">
                                            <div class="sc-pro-main clearfix">
                                                <a href="/product/10086423109158.html#10086794601109" target="_blank"
                                                class="p-img">
                                                    <img src='{{$cs[$k]->gimg}}' alt="">
                                                </a>
                                                <div class="tips-1 p-stock-tips" style="display: none;">限购件
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="/product/10086423109158.html#10086794601109" target="_blank"
                                                        title="" class="p-name">
                                                            <!---->
                                                            {{$v->gname}}
                                                        </a>
                                                        <!---->
                                                        <!---->
                                                    </li>
                                                    <li>
                                                        <div class="p-price">
                                                            <span>
                                                                &nbsp;{{$v->price}}
                                                            </span>
                                                            <!---->
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="p-stock">
                                                            <div class="p-stock-area">
                                                                <input type="number" class="p-stock-text" value="1">
                                                                <p class="p-stock-btn">
                                                                    <a href="javascript:;" class="plus">
                                                                        +
                                                                    </a>
                                                                    <a href="javascript:;" class="minus">
                                                                        −
                                                                    </a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="p-price-total">
                                                        <span class="price">&nbsp;{{$v->price}}</span>
                                                        <!---->
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" seed="cart-item-del" class="del" >
                                                            删除
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="sc-pro-parts">
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <!---->
                                </div>
                                @endforeach
                                
                            </div>
                        </form>
                    </div>
                    <div id="total_tool">
                    </div>
                    <div class="">
                        <div class="sc-total-tool layout clearfix ">
                            <div class="sc-total-control">
                                <label class="checkbox">
                                    <input  class="vam" id="all">
                                    全选
                                </label>
                                <a href="javascript:;">
                                    删除
                                </a>
                            </div>
                            <div class="sc-total-btn ">
                                <a href="javascript:;">
                                    立即结算
                                </a>
                            </div>
                            <div class="sc-total-price">
                                <p>
                                    <label>
                                        总计：
                                    </label>
                                    <span>
                                        ¥<strong id="total">&nbsp; 0.00</strong>
                                    </span>
                                    <em>
                                        <b>
                                            不含运费
                                        </b>
                                    </em>
                                </p>
                                <div class="total-choose">
                                    已选择
                                    <em>
                                        <span class="nums">0</span>
                                    </em>
                                    件商品，优惠：
                                    <span>
                                        ¥&nbsp;0.00
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!---->

                <div class="sc-empty mt20" style="display:none"><span class="icon-minicart"></span> <p>您的购物车里什么也没有哦~</p> <a href="/">去逛逛</a></div>


                <div data-v-f82c3af2="" class="pro-delete">
                    <div data-v-f82c3af2="" class="h">
                        <h2 data-v-f82c3af2="">
                            已删除商品
                        </h2>
                        <ul data-v-f82c3af2="" class="clearfix">
                            <li data-v-f82c3af2="">
                                商品
                            </li>
                            <li data-v-f82c3af2="">
                                数量
                            </li>
                            <li data-v-f82c3af2="">
                                金额
                            </li>
                            <li data-v-f82c3af2="">
                                操作
                            </li>
                        </ul>
                    </div>
                    <div data-v-f82c3af2="" class="b h-70">
                        <ul data-v-f82c3af2="" class="clearfix">
                            <li data-v-f82c3af2="">
                                <a data-v-f82c3af2="" target="_blank">
                                    【新品首发】华为手环 B5 运动版（韵律黑）
                                </a>
                            </li>
                            <li data-v-f82c3af2="">
                                x1
                            </li>
                            <li data-v-f82c3af2="">
                                ¥999.00
                            </li>
                            <li data-v-f82c3af2="">
                                <a data-v-f82c3af2="" class="pro-delete-btn">
                                    重新购买
                                </a>
                            </li>
                        </ul>
                        <ul data-v-f82c3af2="" class="clearfix">
                            <li data-v-f82c3af2="">
                                <a data-v-f82c3af2="" target="_blank">
                                    华为畅享8 3GB+32GB 全网通标配版（粉色）
                                </a>
                            </li>
                            <li data-v-f82c3af2="">
                                x1
                            </li>
                            <li data-v-f82c3af2="">
                                ¥1099.00
                            </li>
                            <li data-v-f82c3af2="">
                                <a data-v-f82c3af2="" class="pro-delete-btn">
                                    重新购买
                                </a>
                            </li>
                        </ul>
                        <ul data-v-f82c3af2="" class="clearfix">
                            <li data-v-f82c3af2="">
                                <a data-v-f82c3af2="" target="_blank">
                                    HUAWEI Mate 10 Pro 6GB+128GB 全网通版（银钻灰）
                                </a>
                            </li>
                            <li data-v-f82c3af2="">
                                x2
                            </li>
                            <li data-v-f82c3af2="">
                                ¥7998.00
                            </li>
                            <li data-v-f82c3af2="">
                                <a data-v-f82c3af2="" class="pro-delete-btn">
                                    重新购买
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div data-v-f82c3af2="" class="f">
                        <a data-v-f82c3af2="" class="delete-expand">
                            更多已删除商品
                        </a>
                        <!---->
                    </div>
                </div>
            </div>
            
            
            <!-- 底部 -->
            <div data-v-3352c929="">
                <div data-v-3352c929="" class="slogan-container">
                    <div data-v-3352c929="" class="slogan">
                        <ul data-v-3352c929="">
                            <li data-v-3352c929="" class="s1">
                                <a data-v-3352c929="" target="_blank" href="https://www.vmall.com/help/faq-934.html"
                                rel="nofollow">
                                    <i data-v-3352c929="">
                                    </i>
                                    百强企业&nbsp;品质保证
                                </a>
                            </li>
                            <li data-v-3352c929="" class="s2">
                                <a data-v-3352c929="" target="_blank" href="https://www.vmall.com/help/faq-834.html"
                                rel="nofollow">
                                    <i data-v-3352c929="">
                                    </i>
                                    7天退货&nbsp;15天换货
                                </a>
                            </li>
                            <li data-v-3352c929="" class="s3">
                                <a data-v-3352c929="" target="_blank" href="https://www.vmall.com/help/faq-4367.html"
                                rel="nofollow">
                                    <i data-v-3352c929="">
                                    </i>
                                    <span data-v-3352c929="">
                                        48元起免运费
                                    </span>
                                </a>
                            </li>
                            <li data-v-3352c929="" class="s4">
                                <a data-v-3352c929="" target="_blank" href="http://consumer.huawei.com/cn/support/service-center/index.htm"
                                rel="nofollow">
                                    <i data-v-3352c929="">
                                    </i>
                                    1000家维修网点&nbsp;全国联保
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div data-v-3352c929="" class="service-container">
                    <div data-v-3352c929="" class="service">
                        <div data-v-3352c929="" class="service-l fl">
                            <dl data-v-3352c929="" class="s1">
                                <dt data-v-3352c929="">
                                    <p data-v-3352c929="" class="line">
                                    </p>
                                    <p data-v-3352c929="" class="title">
                                        购物相关
                                    </p>
                                </dt>
                                <dd data-v-3352c929="">
                                    <ol data-v-3352c929="">
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="https://www.vmall.com/help/faq-4355.html"
                                            rel="nofollow">
                                                购物指南
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="https://www.vmall.com/help/faq-4367.html"
                                            rel="nofollow">
                                                配送方式
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="https://www.vmall.com/help/faq-4357.html"
                                            rel="nofollow">
                                                支付方式
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="https://www.vmall.com/help/category-16.html"
                                            rel="nofollow">
                                                常见问题
                                            </a>
                                        </li>
                                    </ol>
                                </dd>
                            </dl>
                            <dl data-v-3352c929="" class="s2">
                                <dt data-v-3352c929="">
                                    <p data-v-3352c929="" class="line">
                                    </p>
                                    <p data-v-3352c929="" class="title">
                                        保修与退换货
                                    </p>
                                </dt>
                                <dd data-v-3352c929="">
                                    <ol data-v-3352c929="">
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="https://www.vmall.com/help/faq-833.html"
                                            rel="nofollow">
                                                保修政策
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="https://www.vmall.com/help/faq-834.html"
                                            rel="nofollow">
                                                退换货政策
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="https://www.vmall.com/help/faq-5259.html"
                                            rel="nofollow">
                                                退换货流程
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="http://consumer.huawei.com/cn/support/warranty-query/index.htm"
                                            rel="nofollow">
                                                保修状态查询
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="http://c-ver.huawei.com/web/"
                                            rel="nofollow">
                                                配件防伪查询
                                            </a>
                                        </li>
                                    </ol>
                                </dd>
                            </dl>
                            <dl data-v-3352c929="" class="s3">
                                <dt data-v-3352c929="">
                                    <p data-v-3352c929="" class="line">
                                    </p>
                                    <p data-v-3352c929="" class="title">
                                        维修与技术支持
                                    </p>
                                </dt>
                                <dd data-v-3352c929="">
                                    <ol data-v-3352c929="">
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="http://consumer.huawei.com/cn/support/service-center/index.htm"
                                            rel="nofollow">
                                                售后网点
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="http://consumer.huawei.com/cn/support/reservation/index.htm"
                                            rel="nofollow">
                                                预约维修
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="http://consumer.huawei.com/cn/support/express-repair/index.htm"
                                            rel="nofollow">
                                                手机寄修
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="http://consumer.huawei.com/cn/support/sparepart-price/index.htm"
                                            rel="nofollow">
                                                备件价格查询
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="http://consumer.huawei.com/cn/support/door-to-door-service/"
                                            rel="nofollow">
                                                上门服务
                                            </a>
                                        </li>
                                    </ol>
                                </dd>
                            </dl>
                            <dl data-v-3352c929="" class="s4">
                                <dt data-v-3352c929="">
                                    <p data-v-3352c929="" class="line">
                                    </p>
                                    <p data-v-3352c929="" class="title">
                                        关于我们
                                    </p>
                                </dt>
                                <dd data-v-3352c929="">
                                    <ol data-v-3352c929="">
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="https://www.vmall.com/help/faq-934.html"
                                            rel="nofollow">
                                                公司介绍
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="https://www.vmall.com/help/faq-939.html"
                                            rel="nofollow">
                                                华为商城简介
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="https://www.vmall.com/offshop/hwshoplist"
                                            rel="nofollow">
                                                华为线下门店
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="https://www.vmall.com/offshop/shoplist"
                                            rel="nofollow">
                                                荣耀线下门店
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" target="_blank" href="https://www.vmall.com/common/zhaopin"
                                            rel="nofollow">
                                                诚征英才
                                            </a>
                                        </li>
                                    </ol>
                                </dd>
                            </dl>
                            <dl data-v-3352c929="" class="s5">
                                <dt data-v-3352c929="">
                                    <p data-v-3352c929="" class="line">
                                    </p>
                                    <p data-v-3352c929="" class="title">
                                        关注我们
                                    </p>
                                </dt>
                                <dd data-v-3352c929="">
                                    <ol data-v-3352c929="">
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" rel="nofollow" href="http://weibo.com/shophuawei"
                                            target="_blank" class="sina">
                                                新浪微博
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" rel="nofollow" href="http://t.qq.com/shophuawei"
                                            target="_blank" class="qq">
                                                腾讯微博
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" href="http://club.huawei.com" target="_blank" class="huafen">
                                                花粉俱乐部
                                            </a>
                                        </li>
                                    </ol>
                                </dd>
                            </dl>
                            <dl data-v-3352c929="" id="footerS6Swiper" class="s6 swiper-container">
                                <dt data-v-3352c929="" class="relative">
                                    <p data-v-3352c929="" class="line">
                                    </p>
                                    <p data-v-3352c929="" class="title">
                                        友情链接
                                    </p>
                                    <p data-v-3352c929="" class="button">
                                        <span data-v-3352c929="" class="btn btn-prev disabled">
                                            &lt;
                                        </span>
                                        <span data-v-3352c929="" class="btn btn-next">
                                            &gt;
                                        </span>
                                    </p>
                                </dt>
                                <dd data-v-3352c929="" class="swiper-wrapper service-list clearfix" style="height: 120px; width: 1415.95px;">
                                    <ol data-v-3352c929="" class="swiper-slide swiper-slide-visible swiper-slide-active"
                                    style="width: 157.328px; height: 120px;">
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                华为官网
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" href="https://m.vmall.com" target="_blank">
                                                华为商城手机版
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                荣耀官网
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" textvalue="花粉俱乐部">
                                                花粉俱乐部
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                莫塞尔商城
                                            </a>
                                        </li>
                                    </ol>
                                    <ol data-v-3352c929="" class="swiper-slide" style="width: 157.328px; height: 120px;">
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                爱旅官网
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                华为应用市场
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                万表网
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                中商情报网
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                刷机精灵
                                            </a>
                                        </li>
                                    </ol>
                                    <ol data-v-3352c929="" class="swiper-slide" style="width: 157.328px; height: 120px;">
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" textvalue="华为手机">
                                                华为手机
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                优购物官网
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                智能电视
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                UC浏览器
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                中关村商城
                                            </a>
                                        </li>
                                    </ol>
                                    <ol data-v-3352c929="" class="swiper-slide" style="width: 157.328px; height: 120px;">
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                酷狗音乐
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                百信手机网
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                卡宝宝网
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" textvalue="多特软件下载">
                                                多特软件下载
                                            </a>
                                        </li>
                                    </ol>
                                    <ol data-v-3352c929="" class="swiper-slide" style="width: 157.328px; height: 120px;">
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                同步助手
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                蜂鸟摄影网
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                奇珀论坛
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                家具商城
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                拍鞋网商城
                                            </a>
                                        </li>
                                    </ol>
                                    <ol data-v-3352c929="" class="swiper-slide" style="width: 157.328px; height: 120px;">
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                欧宝丽珠宝
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                寻购网
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                亿智蘑菇
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                安卓市场
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                阿里巴巴生意经
                                            </a>
                                        </li>
                                    </ol>
                                    <ol data-v-3352c929="" class="swiper-slide" style="width: 157.328px; height: 120px;">
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                手机大全
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                安卓软件园
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                卓大师刷机
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                智机论坛
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                电子产品世界
                                            </a>
                                        </li>
                                    </ol>
                                    <ol data-v-3352c929="" class="swiper-slide" style="width: 157.328px; height: 120px;">
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                历趣网
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                网购返利
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" title="Apple110">
                                                Apple110
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" textvalue="91手机门户网">
                                                91手机门户网
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                移动叔叔
                                            </a>
                                        </li>
                                    </ol>
                                    <ol data-v-3352c929="" class="swiper-slide" style="width: 157.328px; height: 120px;">
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                奥特莱斯
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                荣耀Magic
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                携程租车
                                            </a>
                                        </li>
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="" style="color: rgb(255, 0, 0); line-height: 1.5;">
                                                申请链接 &gt;&gt;
                                            </a>
                                        </li>
                                    </ol>
                                </dd>
                            </dl>
                        </div>
                        <div data-v-3352c929="" class="service-r fl">
                            <dl data-v-3352c929="" class="s7">
                                <dt data-v-3352c929="">
                                    <p data-v-3352c929="" class="line">
                                    </p>
                                    <p data-v-3352c929="" class="title">
                                        400-088-6888
                                    </p>
                                </dt>
                                <dd data-v-3352c929="">
                                    <ol data-v-3352c929="">
                                        <li data-v-3352c929="">
                                            <a data-v-3352c929="">
                                                24小时客服热线（仅收市话费）
                                            </a>
                                        </li>
                                    </ol>
                                </dd>
                                <dd data-v-3352c929="">
                                    <a data-v-3352c929="" rel="nofollow" href="http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&amp;configID=10&amp;location=B_002&amp;chatfrom=web&amp;channelType=Vmall%e5%95%86%e5%9f%8e%e7%94%b5%e8%84%91%e7%ab%af&amp;enterurl=https%3A%2F%2Fwww.vmall.com%2Fcart2%3Ft%3D15433940070301543394156960&amp;k=1&amp;remark="
                                    target="_blank" class="service-btn btn-line-primary">
                                        <i data-v-3352c929="">
                                        </i>
                                        在线客服
                                    </a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                
                <div data-v-3352c929="" class="footer-container">
                    <div data-v-3352c929="" class="footer">
                        <div data-v-3352c929="" class="footer-warrant-area clearfix">
                            <p data-v-3352c929="" class="footer-warrant-logo fl">
                                <a data-v-3352c929="" href="https://www.vmall.com">
                                    <img data-v-3352c929="" src="/homes/img/flogo.png">
                                </a>
                            </p>
                            <p data-v-3352c929="" class="fl">
                                <a data-v-3352c929="" href="https://www.vmall.com/help/faq-2635.html"
                                target="_blank" title="隐私政策" rel="nofollow">
                                    隐私政策
                                </a>
                                <a data-v-3352c929="" href="https://www.vmall.com/help/faq-778.html" target="_blank"
                                title="服务协议" rel="nofollow">
                                    服务协议
                                </a>
                                Copyright © 2012-2017 华为软件技术有限公司 版权所有 保留一切权利
                                <br data-v-3352c929="">
                                公安备案
                                <a data-v-3352c929="" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=32011402010009"
                                target="_blank" rel="nofollow">
                                    苏公网安备32011402010009号
                                </a>
                                <em data-v-3352c929="">
                                    |
                                </em>
                                <a data-v-3352c929="" target="_blank" href="http://www.miitbeian.gov.cn"
                                rel="nofollow">
                                    苏ICP备17040376号-6
                                </a>
                                <em data-v-3352c929="">
                                    |
                                </em>
                                增值电信业务经营许可证：苏B2-20130048号
                                <em data-v-3352c929="">
                                    |
                                </em>
                                <br data-v-3352c929="">
                                网络文化经营许可证：
                                <a data-v-3352c929="" href="https://res.vmallres.com/pimages//sale/2016-10/20161009102851799.jpg"
                                target="_blank" rel="nofollow">
                                    苏网文[2015] 1599-026号
                                </a>
                            </p>
                            <p data-v-3352c929="" class="fr footer-warrant-img">
                                <a data-v-3352c929="" href="http://privacy.truste.com/privacy-seal/validation?rid=81be9ca0-c821-4e2c-ad4b-ff7cff98f75f&amp;amp;lang=zh-cn"
                                target="_blank" rel="nofollow" class="fl">
                                    <img data-v-3352c929="" src="/homes/img/20180522101715775.jpg"
                                    alt="TRUSTe隐私认证" title="TRUSTe隐私认证">
                                </a>
                                <a data-v-3352c929="" href="https://res.vmallres.com/pimages//sale/2018-06/20180615181402966.jpg"
                                target="_blank" rel="nofollow" class="fl">
                                   <img data-v-3352c929="" src="/homes/img/20160226162415360.png" alt="电子营业执照" title="电子营业执照">
                                </a>
                                <a data-v-3352c929="" href="https://ss.knet.cn/verifyseal.dll?sn=e13010932010038497pwz6000000&amp;trustKey=dn&amp;trustValue=vmall.com"
                                target="_blank" rel="nofollow" class="fl">
                                    <img data-v-3352c929="" src="/homes/img/20160226162521265.png"
                                    alt="可信网站" title="可信网站">
                                </a>
                                <a data-v-3352c929="" href="http://sq.ccm.gov.cn:80/ccnt/sczr/service/business/emark/toDetail/2E50AF12E8B14A8B9721D1548FC0CDD2"
                                target="_blank" rel="nofollow" class="fl">
                                    <img data-v-3352c929="" src="https://res.vmallres.com/pimages//sale/2018-06/20180626164548324.png"
                                    alt="网络文化经营许可证" title="网络文化经营许可证">
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <!---->
            </div>
           
        </div>
    </div>


    <form action="" method="post" enctype="multipart/form-data">
    <div id="motai">    
         <div class="topbackdiv" id="bj" style="display: none;"></div>
         <div id="addSuccess" class="topBox" style="display: none;">
                <h1 class="topTitle">
                    <span>删除商品</span>
                    
                </h1>
                <a class="popCloseBtn" onclick="hidediv();">X</a>
                <div class="p20 tc mt13">
                    <span id="centa">你确定要删除该商品?</span>

                </div>
                <div class="clearfix popBtn">
                    <a href="javascript:;" class="popBuyNowBtn deldel" gid="" >删除</a>

                    <a href="" class="pobAddCartBtn ml10" onclick="hidediv();">取消</a>
                </div>
            
         </div>
    </div>
    </form>
</body>
<script>
    // 弹出框

    function hidediv() {
        document.getElementById("bj").style.display = 'none';
        document.getElementById("addSuccess").style.display = 'none';
    }

    // 点击删除触发的事件
    $('.del').click(function(){
        document.getElementById("bj").style.display = "block";
        document.getElementById("addSuccess").style.display = "block";
        var gid = $(this).parents('.sc-pro-area').prev().find('.che').attr('gid');
        $(".deldel").attr('gid',gid);
        
       
    })
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    

    // 删除商品的弹出框
    $('.deldel').click(function(){

        document.getElementById("bj").style.display = 'none';
        document.getElementById("addSuccess").style.display = 'none';

        var gid = $(this).attr('gid');
        
       
        $.post('/home/shopcart',{gid:gid},function(data){
            
            
            if(data != 0){
                $("#shop_"+data).remove();
                //rs = $(this).parents('.dvs');
                
                //刷新
               nums()
            }   
        })

    })

    function nums()
    {
        var rs = $('.divs').length;
        
        if(rs == 0){
            $('.sc-empty').show();
            $('.sall').hide();
        }
    }
    nums()
</script>
<script>

    
    // 数量加
    $('.plus').click(function(){
        // 获取数量的值
        var  pv = $(this).parent().prev().val();
        pv++;
        $(this).parent().prev().val(pv);

        // 获取单价
        var prc = $(this).parents('li').prev().text().trim();
        
        function accMul(arg1, arg2) {

            var m = 0, s1 = arg1.toString(), s2 = arg2.toString();

            try { m += s1.split(".")[1].length } catch (e) { }

            try { m += s2.split(".")[1].length } catch (e) { }

            return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)

        }
        // 小计 单价*pv
        $(this).parents('li').next().text(accMul(pv, prc));
        totals()
        
    })

    // 数量减
    $('.minus').click(function(){
        // 获取数量的值
        var  pv = $(this).parent().prev().val();
        
        pv--;

        if(pv <= 1)
        {
            pv = 1;

        }
        $(this).parent().prev().val(pv);
        


        // 获取单价
        var prc = $(this).parents('li').prev().text().trim();
        
        function accMul(arg1, arg2) {

            var m = 0, s1 = arg1.toString(), s2 = arg2.toString();

            try { m += s1.split(".")[1].length } catch (e) { }

            try { m += s2.split(".")[1].length } catch (e) { }

            return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)

        }
        // 小计 单价*pv
        $(this).parents('li').next().text(accMul(pv, prc));
        totals()
    })

   
   
    //全选  全不选
    a=0;
    $('#all').click(function(){
        if(a%2==0){
           $(this).text('全不选');
           $(':checkbox').each(function(){
              this.checked=true;  
              totals()
           });


        }else{
           $(this).text('全选');
           $(':checkbox').each(function(){
           this.checked=false;  
           });

           $('#total').text("0.00");
        }
        a++;
    });
   

    $('.che').click(function(){
        
        totals()

        // num =+ $(this).parents('.sc-pro-list').find('.p-stock-text').val();
        // console.log(num);    
    })
    
    // 改变input框 单个商品的价格变化
    $('.p-stock-text').blur(function(){
        // 获取数量
        var su = $(this).val();
        // 获取单价
        var dj = parseFloat($(this).parents('li').prev().text().trim());
        
        function accMul(arg1, arg2) {

            var m = 0, s1 = arg1.toString(), s2 = arg2.toString();

            try { m += s1.split(".")[1].length } catch (e) { }

            try { m += s2.split(".")[1].length } catch (e) { }

            return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)

        }
        // 小计 单价*pv
        $(this).parents('li').next().text(accMul(su, dj));
        
        
    })


    function totals()
    {
        function accAdd(arg1,arg2){  
                 var r1,r2,m;  
                 try{r1=arg1.toString().split(".")[1].length}catch(e){r1=0}  
                 try{r2=arg2.toString().split(".")[1].length}catch(e){r2=0}  
                 m=Math.pow(10,Math.max(r1,r2))  
                 return (arg1*m+arg2*m)/m  
        }
        var pcr = 0;
        var sum = 0;
         $(':checkbox:checked').each(function(){
             pcr = parseFloat($(this).parent().next().find('.p-price-total').text().trim());
             
             
             sum = accAdd(sum,pcr);
        })

         $('#total').text(sum);
    }
</script>

</html>


