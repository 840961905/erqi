<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>
  <link rel="stylesheet" href="/homes/css/app.ee7a1ed.css">
  <link rel="stylesheet" href="/homes/jiesuan/css/index.css">

  <script src="/homes/js/jquery-3.2.1.min.js"></script>
  <script src="/homes/jiesuan/js/index.js"></script>

  
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
                            @if(session('userid'))
                            <li>
                                <div class="header-toolbar">
                                    <div class="header-toolbar-item">
                                        <div class="i-login">
                                            <div class="h">
                                                <a href="javascript:;">
                                              &nbsp;&nbsp;欢迎{{session('aname')}}登陆本网站
                                                </a>
                                                <a href="">个人中心</a>
                                                <a href="/home/logout">退出</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @else
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
                            @endif
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
                        <!-- 2017-06-19-logo-文字-start -->
                        <div class="logo logo-word">
                            <a href="https://www.vmall.com/" title="华为商城">
                                <img src="/homes/img/20170703105852645577.png"
                                alt="华为商城">
                            </a>
                            <span>
                                确认订单
                            </span>
                        </div>
                        <!-- 2017-06-19-logo-文字-end -->
                    </div>
                    <div class="right">
                        <!--头部 -->
                        <!-- <div class="order-header">
                        <div class="fr"> -->
                        <!--步骤条-三步骤 -->
                        <div class="progress-area progress-area-3">
                            <!--我的购物车 -->
                            <div id="progress-cart" class="progress-sc-area hide">
                                我的购物车
                            </div>
                            <!--核对订单 -->
                            <div id="progress-confirm" class="progress-co-area hide" style="display: block;">
                                填写核对订单信息
                            </div>
                            <!--成功提交订单 -->
                            <div id="progress-submit" class="progress-sso-area hide">
                                成功提交订单
                            </div>
                        </div>
                        <!-- </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- 中间 -->
            <div class="order">
                <div class="mzcontainer">
                    <div class="orderAddress">
                        <div class="orderAddressTitle">
                            收货人信息
                            <div class="orderAddressTitleTips">
                                <i class="orderAddressTipsIcon">
                                    因配送地址库升级，部分地址需升级后方可使用！
                                </i>
                            </div>
                        </div>
                        <ul class="orderAddressList clearfix">
                            <!-- 收货地址 php使用 -->
                            <!-- 添加收货地址 -->
                            <li class="orderAddressCheckbox add checked">
                                <div class="orderAddressAddIcon">
                                </div>
                                <div class="orderAddressAddText">
                                    添加新地址
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mzcontainer orderProduct">
                        <div class="orderProductTitle">
                            确认订单信息
                        </div>
                        <form method="post" id="orders">
                            <div class="orderProductList">
                                <table cellpadding="0" class="orderProductTable">
                                    <thead>
                                        <tr>
                                            <th class="orderProductTableName">
                                                <div class="orderProductSupplier">
                                                    供应商：
                                                    <span class="orderProductSupplierName">
                                                        华为
                                                    </span>
                                                </div>
                                            </th>
                                            <th class="orderProductTablePrice">
                                                单价
                                            </th>
                                            <th class="orderProductTableNum">
                                                数量
                                            </th>
                                            <th class="orderProductTableTotal">
                                                小计
                                            </th>
                                            <th class="orderProductTableExpress">
                                                配送方式
                                            </th>
                                        </tr>
                                    </thead>
                                    @php
                                        $tot = 0;
                                    @endphp
                                    @foreach($newshop as $k=>$v)
                                    <tbody>
                                        <tr>
                                            <td class="orderProductTableName">
                                                <a href="" class="orderProductLink">
                                                    <img src="
                                                    @php
			                                           $tu = DB::table('goodsimg')->where('gid',$v['id'])->first();
			                                           echo $tu->gimg;
			                                        @endphp
                                                    "
                                                    alt="" class="orderProductImage">
                                                </a>
                                                <div class="orderProductName">
                                                    <a href="" class="orderProductLink">
                                                        <p class="orderProductNameItem">
                                                            {{$v['goodsinfo']->gname}}
                                                        </p>
                                                        <span class="cartProductDesc">
                                                            {{$v['goodsinfo']->size}}
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="orderProductTablePrice">
                                                <p>
                                                    <span class="orderProductPrice">
                                                        {{$v['goodsinfo']->price}}
                                                    </span>
                                                </p>
                                            </td>
                                            <td class="orderProductTableNum">
                                                {{$v['num']}}
                                            </td>
                                            @php
                                             $money = $v['num']*$v['goodsinfo']->price;
                                             $tot+=$money
                                            @endphp
                                            <td class="orderProductTableTotal">
                                                <p class="orderProductPrice red prices">
                                                    {{$money}}
                                                </p>
                                            </td>
                                            <td class="orderProductTableExpress">
                                                <p>
                                                    快递配送：运费
                                                    <span class="orderProductPrice red">
                                                        0.00
                                                    </span>
                                                </p>
                                                <div class="orderProductArrival">
                                                    <p>
                                                        19:00前下单并支付，
                                                    </p>
                                                    <p>
                                                        预计
                                                        <strong>
                                                            两天后
                                                        </strong>
                                                        送达
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        <input type="hidden" name="shopid[]" value="6">
                                        <input type="hidden" name="num[]" value="1">
                                        <input type="hidden" name="userinfoid" class="userid">
                                    </tbody>
                                    @endforeach
                                    <tfoot>
                                        <tr>
                                            <td colspan="5">
                                                <div class="orderProductInfo">
                                                    <div class="orderProductInvoice clearfix">
                                                        <div class="orderProductInvoiceType">
                                                            发票类型：电子发票
                                                            <div class="orderProductInvoiceIcon">
                                                            </div>
                                                        </div>
                                                        <div class="orderProductInvoiceInfo">
                                                            <p>
                                                                发票抬头：
                                                                <span class="orderProductInvoiceTitle">
                                                                    默认为收货人姓名
                                                                </span>
                                                                <span class="orderProductInvoiceEdit">
                                                                    修改
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="orderProductRemark">
                                                        <span class="orderProductRemarkTitle">
                                                            备注
                                                        </span>
                                                        <textarea class="orderProductRemarkInput" placeholder="备注..." maxlength="45">
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="orderProductTotal">
                                                    合计：
                                                    <span class="orderProductPrice red totals">
                                                        {{$tot}}
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div class="mzcontainer orderDiscount">
                        <div class="orderDiscountHeader">
                            使用优惠抵扣
                        </div>
                        <ul class="orderDiscountList">
                            <li class="orderDiscountItem open">
                                <div class="orderDiscountItemHeader">
                                    <div class="orderDiscountItemTitle">
                                        使用回购金
                                    </div>
                                    <div class="orderDiscountItemRight">
                                    </div>
                                </div>
                                <div class="orderDiscountItemContent orderDiscountRepo">
                                    <div class="orderDiscountRepoTitle">
                                        我的回购金余额：
                                        <span class="orderDiscountRepoPrice">
                                            0.00
                                        </span>
                                        <span class="orderDiscountRepoDesc">
                                            （使用说明：系统会根据您选购的商品自动计算出最大可以用回购金数量，以及可享受的魅族商城补贴，该补贴不可退。）
                                        </span>
                                    </div>
                                    <p class="orderDiscountRepoSelect">
                                        <label for="orderDiscountRepoUse">
                                            <input type="radio" name="orderDiscountRepo" value="1">
                                            可使用
                                            <span class="orderDiscountRepoPrice">
                                                0.00
                                            </span>
                                            元回购金
                                        </label>
                                    </p>
                                    <p class="orderDiscountRepoSelect">
                                        <label for="orderDiscountRepoNotUse">
                                            <input type="radio" name="orderDiscountRepo" value="0">
                                            暂不使用回购金
                                        </label>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="orderTotal clearfix">
                        <div class="orderTotalPay">
                            <div class="orderTotalPayHeader">
                                选择支付方式
                            </div>
                            <div class="orderTotalPayContent">
                                <div class="orderTotalPayRow clearfix">
                                    <div class="orderTotalPayTitle">
                                        支付宝
                                    </div>
                                    <ul class="orderTotalPayList clearfix">
                                        <li class="orderTotalPayLabel huabei active">
                                            <div class="orderTotalPayRadio">
                                            </div>
                                            <div class="orderTotalPayImg">
                                            </div>
                                            <div class="orderTotalPayTips">
                                                订单满1元可分期
                                            </div>
                                        </li>
                                        <li class="orderTotalPayLabel alipay">
                                            <div class="orderTotalPayRadio">
                                            </div>
                                            <div class="orderTotalPayImg">
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="orderTotalPayHuabei active">
                                        <div class="orderTotalPayHuabeiContent clearfix">
                                            <div class="orderTotalPayHuabeiChoose active">
                                                <p class="orderTotalPayHuabeiTop">
                                                    <span class="orderTotalPayHuabeiPrice">
                                                        233.00
                                                    </span>
                                                    × 3期
                                                </p>
                                                <p>
                                                    免手续费
                                                </p>
                                            </div>
                                            <div class="orderTotalPayHuabeiChoose">
                                                <p class="orderTotalPayHuabeiTop">
                                                    <span class="orderTotalPayHuabeiPrice">
                                                        233.00
                                                    </span>
                                                    × 3期
                                                </p>
                                                <p>
                                                    免手续费
                                                </p>
                                            </div>
                                            <div class="orderTotalPayHuabeiChoose">
                                                <p class="orderTotalPayHuabeiTop">
                                                    <span class="orderTotalPayHuabeiPrice">
                                                        233.00
                                                    </span>
                                                    × 3期
                                                </p>
                                                <p>
                                                    免手续费
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="orderTotalPayRow clearfix">
                                    <div class="orderTotalPayTitle">
                                        微信支付
                                    </div>
                                    <ul class="orderTotalPayList clearfix">
                                        <li class="orderTotalPayLabel wechat">
                                            <div class="orderTotalPayRadio">
                                            </div>
                                            <div class="orderTotalPayImg">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="orderTotalPayRow clearfix">
                                    <div class="orderTotalPayTitle">
                                        网上银行
                                    </div>
                                    <ul class="orderTotalPayList clearfix">
                                        <li class="orderTotalPayLabel boc">
                                            <div class="orderTotalPayRadio">
                                            </div>
                                            <div class="orderTotalPayImg">
                                            </div>
                                        </li>
                                        <li class="orderTotalPayLabel ccb">
                                            <div class="orderTotalPayRadio">
                                            </div>
                                            <div class="orderTotalPayImg">
                                            </div>
                                        </li>
                                        <li class="orderTotalPayLabel abc">
                                            <div class="orderTotalPayRadio">
                                            </div>
                                            <div class="orderTotalPayImg">
                                            </div>
                                        </li>
                                        <li class="orderTotalPayLabel icbc">
                                            <div class="orderTotalPayRadio">
                                            </div>
                                            <div class="orderTotalPayImg">
                                            </div>
                                        </li>
                                        <li class="orderTotalPayLabel comm">
                                            <div class="orderTotalPayRadio">
                                            </div>
                                            <div class="orderTotalPayImg">
                                            </div>
                                        </li>
                                        <li class="orderTotalPayLabel cmb">
                                            <div class="orderTotalPayRadio">
                                            </div>
                                            <div class="orderTotalPayImg">
                                            </div>
                                        </li>
                                        <li class="orderTotalPayLabel psbc">
                                            <div class="orderTotalPayRadio">
                                            </div>
                                            <div class="orderTotalPayImg">
                                            </div>
                                        </li>
                                        <li class="orderTotalPayLabel cib">
                                            <div class="orderTotalPayRadio">
                                            </div>
                                            <div class="orderTotalPayImg">
                                            </div>
                                        </li>
                                    </ul>
                                    <table class="orderTotalPayBanksDetail" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th style="width: 150px;">
                                                    银行名称
                                                </th>
                                                <th style="width: 400px;">
                                                    限额
                                                </th>
                                                <th style="width: 140px;">
                                                    支持卡种
                                                </th>
                                                <th style="width: 140px;">
                                                    客服电话
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="icbc">
                                                <td style="width: 150px;">
                                                    <div class="orderTotalPayImg">
                                                    </div>
                                                </td>
                                                <td class="quota" style="width: 400px;">
                                                    U盾用户：信用卡单笔限额1000元与信用卡本身限额孰低，每日限额信用卡本身透支限额。储蓄卡单笔限额100万元，每日限额：100万元；
                                                    <br>
                                                    柜面注册存量静态密码用户：信用卡每日限额300元与信用卡本身限额孰低，储蓄卡每日限额300元；
                                                    <br>
                                                    已开通手机短信认证电子银行口令卡用户：信用卡单笔限额1000元与信用卡本身限额孰低，每日限额000元与信用卡本身限额孰低；储蓄卡单笔限额2000元，每日限额5000元；
                                                    <br>
                                                    未开通手机短信认证电子银行口令卡用户：信用卡单笔限额500元与信用卡本身限额孰低，每日限额1000元与信用卡本身限额孰低；储蓄卡单笔限额500元，每日限额1000元。
                                                    <br>
                                                    （注：工行企业版的支付限额以在银行设置的限额为准）
                                                </td>
                                                <td style="width: 140px;">
                                                    信用卡/储蓄卡
                                                </td>
                                                <td style="width: 140px;">
                                                    95588
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="orderTotalContent">
                            <div class="orderTotalRow">
                                总金额
                                <div class="orderTotalPrice totals">
                                   {{$tot}}
                                </div>
                            </div>
                            <div class="orderTotalRow orderTotalDiscount">
                                优惠券优惠
                                <div class="orderTotalPrice sub">
                                    0.00
                                </div>
                            </div>
                            <div class="orderTotalRow orderTotalDiscount">
                                红包抵扣
                                <div class="orderTotalPrice sub">
                                    0.00
                                </div>
                            </div>
                            <div class="orderTotalRow orderTotalDiscount">
                                回购金抵扣
                                <div class="orderTotalPrice sub">
                                    0.00
                                </div>
                            </div>
                            <div class="orderTotalRow">
                                运费
                                <div class="orderTotalPrice">
                                    0.00
                                </div>
                            </div>
                            <div class="orderTotalLine">
                            </div>
                            <div class="orderTotalRow">
                                应付：
                                <div class="orderTotalPrice total totals">
                                    {{$tot}}
                                </div>
                            </div>
                            <div class="orderTotalRow orderTotalValidRow clearfix">
                                <div class="orderTotalValid">
                                </div>
                                <div class="mzBtn success" onclick="xorders()">
                                    下单并支付
                                </div>
                                <div class="orderStockTipsWrap">
                                    <div class="orderStockTips">
                                        该订单含付款减库存商品，支付完成后才会为您预留库存！
                                    </div>
                                </div>
                            </div>
                            <div class="orderTotalRow orderTotalRowTips">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mzMask hide">
                <div class="mzDialog dialog addressAdder">
                    <div class="mzDialogHeader">
                        <div class="mzDialogTitle">
                            添加新地址
                        </div>
                        <div class="mzDialogClose">
                        </div>
                    </div>
                    <form method="post" id="myaddrs">
                        <div class="mzDialogMain">
                            <div class="mzDialogWarp">
                                <div class="mzDialogContent">
                                    <div class="addressAdderContent">
                                        <div class="addressAdderRow clearfix">
                                            <div class="addressAdderTitle">
                                                收货人姓名
                                                <span class="addressAdderMust">
                                                    *
                                                </span>
                                            </div>
                                            <div class="mzInputWarp" data-tips="请输入收件人姓名! ">
                                                <input type="text" class="mzInput addressAdderName varify" placeholder="姓名长度不超过15个汉字"
                                                name="name" maxlength="15">
                                            </div>
                                            <div class="addressAdderTitle">
                                                收货人手机号
                                                <span class="addressAdderMust">
                                                    *
                                                </span>
                                            </div>
                                            <div class="mzInputWarp" data-tips="请输入手机号码！ ">
                                                <input type="text" class="mzInput addressAdderPhone varify" placeholder="请输入11位手机号"
                                                maxlength="11" name="tel">
                                            </div>
                                        </div>
                                        <div class="addressAdderRow clearfix">
                                            <div class="addressAdderTitle">
                                                收货人地址
                                                <span class="addressAdderMust">
                                                    *
                                                </span>
                                            </div>
                                            <div class="mzInputWarp addressAdderSelect mzAddress">
                                                <div class="mzSelectmenu" data-tips="请输入收件人姓名! ">
                                                    <select id="area" name="area" class="mzDownmenuInput">
                                                        <option value="华东地区">
                                                            华东地区
                                                        </option>
                                                        <option value="华南地区">
                                                            华南地区
                                                        </option>
                                                        <option value="华中地区">
                                                            华中地区
                                                        </option>
                                                        <option value="华北地区">
                                                            华北地区
                                                        </option>
                                                        <option value="西北地区">
                                                            西北地区
                                                        </option>
                                                        <option value="西南地区">
                                                            西南地区
                                                        </option>
                                                        <option value="东北地区">
                                                            东北地区
                                                        </option>
                                                    </select>
                                                    <!-- 到时候再说到底用啥 -->
                                                    <input type="text" class="mzDownmenuInput" placeholder="省份/直辖市">
                                                    <input type="hidden">
                                                </div>
                                                <div class="mzSelectmenu" data-tips="请输入收件人姓名! ">
                                                    <select id="cmbProvince" name="cmbProvince" class="mzDownmenuInput">
                                                        <option value="山东">
                                                            山东
                                                        </option>
                                                        <option value="江苏">
                                                            江苏
                                                        </option>
                                                        <option value="安徽">
                                                            安徽
                                                        </option>
                                                        <option value="浙江">
                                                            浙江
                                                        </option>
                                                        <option value="福建">
                                                            福建
                                                        </option>
                                                        <option value="上海">
                                                            上海
                                                        </option>
                                                    </select>
                                                    <!-- 到时候再说到底用啥 -->
                                                    <input type="text" class="mzDownmenuInput" placeholder="城市">
                                                    <input type="hidden">
                                                </div>
                                                <div class="mzSelectmenu" data-tips="请输入收件人姓名! ">
                                                    <select name="cmbCity" id="cmbCity" class="mzDownmenuInput">
                                                        <option value="济南市">
                                                            济南市
                                                        </option>
                                                        <option value="青岛市">
                                                            青岛市
                                                        </option>
                                                        <option value="淄博市">
                                                            淄博市
                                                        </option>
                                                        <option value="枣庄市">
                                                            枣庄市
                                                        </option>
                                                        <option value="东营市">
                                                            东营市
                                                        </option>
                                                        <option value="烟台市">
                                                            烟台市
                                                        </option>
                                                        <option value="潍坊市">
                                                            潍坊市
                                                        </option>
                                                        <option value="济宁市">
                                                            济宁市
                                                        </option>
                                                        <option value="泰安市">
                                                            泰安市
                                                        </option>
                                                        <option value="威海市">
                                                            威海市
                                                        </option>
                                                        <option value="日照市">
                                                            日照市
                                                        </option>
                                                        <option value="莱芜市">
                                                            莱芜市
                                                        </option>
                                                        <option value="临沂市">
                                                            临沂市
                                                        </option>
                                                        <option value="德州市">
                                                            德州市
                                                        </option>
                                                        <option value="聊城市">
                                                            聊城市
                                                        </option>
                                                        <option value="滨州市">
                                                            滨州市
                                                        </option>
                                                        <option value="荷泽市">
                                                            荷泽市
                                                        </option>
                                                    </select>
                                                    <!-- 到时候再说到底用啥 -->
                                                    <input type="text" class="mzDownmenuInput" placeholder="区/县">
                                                    <input type="hidden">
                                                </div>
                                                <div class="mzSelectmenu" data-tips="请输入收件人姓名! ">
                                                    <select name="cmbArea" id="cmbArea" class="mzDownmenuInput">
                                                        <option value="市辖区">
                                                            市辖区
                                                        </option>
                                                        <option value="历下区">
                                                            历下区
                                                        </option>
                                                        <option value="市中区">
                                                            市中区
                                                        </option>
                                                        <option value="槐荫区">
                                                            槐荫区
                                                        </option>
                                                        <option value="天桥区">
                                                            天桥区
                                                        </option>
                                                        <option value="历城区">
                                                            历城区
                                                        </option>
                                                        <option value="长清区">
                                                            长清区
                                                        </option>
                                                        <option value="平阴县">
                                                            平阴县
                                                        </option>
                                                        <option value="济阳县">
                                                            济阳县
                                                        </option>
                                                        <option value="商河县">
                                                            商河县
                                                        </option>
                                                        <option value="章丘市">
                                                            章丘市
                                                        </option>
                                                    </select>
                                                    <input type="text" class="mzDownmenuInput" placeholder="乡镇/街道">
                                                    <input type="hidden">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="addressAdderRow clearfix">
                                            <div class="addressAdderTitle">
                                                详细地址
                                                <span class="addressAdderMust">
                                                    *
                                                </span>
                                            </div>
                                            <div class="mzInputWarp" data-tips="请输入详细地址！">
                                                <input type="text" class="mzInput addressAdderDetail varify" placeholder="请输入4-50个汉字的详细地址，例如路名、门牌号"
                                                maxlength="50" name="address">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="mzDialogBottom">
                        <div class="mzBtn success" id="confirm">
                            确认
                        </div>
                        <div class="mzBtn cancel">
                            取消
                        </div>
                    </div>
                </div>
            </div>


            <div class="mzMask hide">
                <div class="mzDialog dialog orderInvoiceDialog">
                    <div class="mzDialogHeader">
                        <div class="mzDialogTitle">
                            添加新地址
                        </div>
                        <div class="mzDialogClose">
                        </div>
                    </div>
                    <div class="mzDialogMain">
                        <div class="mzDialogWarp">
                            <div class="mzDialogContent">
                                <div class="addressAdderContent">
                                    <div class="orderInvoiceDialogRow clearfix">
                                        <div class="orderInvoiceDialogTitle must">
                                            发票类型
                                        </div>
                                        <div class="orderInvoiceDialogContent">
                                            <p class="orderInvoiceDialogContentWrap">
                                                电子发票
                                            </p>
                                            <p class="orderInvoiceDialogDesc">
                                                电子发票是税局认可的有效凭证，其法律效力、基本用途及使用规定同纸质发票。
                                            </p>
                                        </div>
                                    </div>
                                    <div class="orderInvoiceDialogRow clearfix">
                                        <div class="orderInvoiceDialogTitle must">
                                            发票抬头
                                        </div>
                                        <div class="orderInvoiceDialogContent">
                                            <span class="orderInvoiceDialogType mzSelectmenu">
                                                <input type="text" class="mzDownmenuInput" placeholder="">
                                                <input type="hidden">
                                            </span>
                                            <span class="mzInputWarp orderInvoiceDialogName">
                                                <input type="text" class="mzInput" placeholder="默认发货人姓名" desabled="" maxlength="45">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mzDialogBottom">
                        <div class="mzBtn success">
                            确认
                        </div>
                        <div class="mzBtn cancel">
                            取消
                        </div>
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
  
</body>
</html>


