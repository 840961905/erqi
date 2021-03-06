<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>@yield('title')</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link href="/admins/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="/admins/font-awesome/css/font-awesome.css?v=4.3.0" rel="stylesheet">

    <!-- Morris -->
    <link href="/admins/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

    <!-- Gritter/ -->
    <link href="/admins/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/admins/css/animate.css" rel="stylesheet">
    <link href="/admins/css/style.css?v=2.2.0" rel="stylesheet">

@section('css')


@show
   
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">

                        <div class="dropdown profile-element"> 
                            <span>
                                <img alt="image" class="img-circle" src="{{session('pri')}}" width="64px">
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="admin#">
                                <span class="clear"> 
                                    <span class="block m-t-xs"> 
                                        <strong class="font-bold">{{session('uname')}}</strong>
                                    </span> 
                                    <span class="text-muted text-xs block"> 
                                        操作列表
                                        <b class="caret">
                                        </b>
                                    </span> 
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="/admin/profile?id={{session('uid')}}">修改头像</a>
                                </li>
                                <li><a href="/admin/passchange?id={{session('uid')}}">修改密码</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/admin/logout">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            H+
                        </div>

                    </li>
					<li>
                        <a href="index.html"><i class="fa fa-user-md"></i> <span class="nav-label">网站管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/hinfo">网站设置</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-user-md"></i> <span class="nav-label">管理员管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/admin/create">管理员添加</a>
                            </li>
                            <li><a href="/admin/admin">管理员查看</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-smile-o"></i> <span class="nav-label">角色管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/role/create">角色添加</a>
                            </li>
                            <li><a href="/admin/role">角色查看</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-key"></i> <span class="nav-label">权限管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/permission/create">权限添加</a>
                            </li>
                            <li><a href="/admin/permission">权限查看</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-users"></i> <span class="nav-label">用户管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/users">浏览用户</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-list"></i> <span class="nav-label">分类管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/type/create">分类添加</a>
                            </li>
                            <li><a href="/admin/type">分类查看</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">商品管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/shop/create">商品添加</a>
                            </li>
                            <li><a href="/admin/shop">商品查看</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">订单管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/orders">订单查看</a></li>
                            <li><a href="/admin/orderstatu">订单状态管理</a></li>
                            <li><a href="/admin/comment">订单评论管理</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-chain"></i> <span class="nav-label">友情链接管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/friend/create">链接添加</a>
                            </li>
                            <li><a href="/admin/friend">链接查看</a>
							</li>
                        </ul>
                    </li>
					<li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">商品颜色管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/color/create">商品颜色添加</a>
                            </li>
                            <li><a href="/admin/color">商品颜色查看</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-paper-plane"></i> <span class="nav-label">广告管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/advertisement/create">广告添加</a>
                            </li>
                            <li><a href="/admin/advertisement">广告查看</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-retweet"></i> <span class="nav-label">轮播管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/slider/create">轮播添加</a>
                            </li>
                            <li><a href="/admin/slider">轮播查看</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-tasks"></i> <span class="nav-label">商品分类图片管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/admin/typeads/create">分类图片添加</a>
                            </li>
                            <li><a href="/admin/typeads">分类图片查看</a>
                            </li>
                        </ul>
                    </li>
            </div>
        </nav>
        <!--  @section('content')

         @show -->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary "><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="">
                            <div class="form-group">
                                <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message"><a href="index.html" title="返回首页"><i class="fa fa-home"></i></a>欢迎使用H+后台主题</span>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="admin#">
                                <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="">
                                        </a>
                                        <div class="media-body">
                                            <small class="pull-right">46小时前</small>
                                            <strong>小四</strong> 项目已处理完结
                                            <br>
                                            <small class="text-muted">3天前 2014.11.8</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy">25小时前</small>
                                            <strong>国民岳父</strong> 这是一条测试信息
                                            <br>
                                            <small class="text-muted">昨天</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="mailbox.html">
                                            <i class="fa fa-envelope"></i> <strong> 查看所有消息</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="admin#">
                                <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="mailbox.html">
                                        <div>
                                            <i class="fa fa-envelope fa-fw"></i> 您有16条未读消息
                                            <span class="pull-right text-muted small">4分钟前</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="profile.html">
                                        <div>
                                            <i class="fa fa-qq fa-fw"></i> 3条新回复
                                            <span class="pull-right text-muted small">12分钟钱</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="notifications.html">
                                            <strong>查看所有 </strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/admin/logout">
                                <i class="fa fa-sign-out"></i> 退出
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
           <div class="row">

               @section('content')

               @show

                <div class="footer">
                    <div class="pull-right">
                        By：<a href="http://www.zi-han.net" target="_blank">zihan's blog</a>
                    </div>
                    <div>
                        <strong>Copyright</strong> H+ &copy; 2014
                    </div>
                </div>
            </div>

          

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="/admins/js/jquery-2.1.1.min.js"></script>
    <script src="/admins/js/bootstrap.min.js?v=3.4.0"></script>
    <script src="/admins/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/admins/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/admins/js/hplus.js?v=2.2.0"></script>
    <script src="/admins/js/plugins/pace/pace.min.js"></script>

    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    
    @section('js')


    @show
    <!--统计代码，可删除-->
</body>

</html>