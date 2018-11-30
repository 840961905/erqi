@extends('layout.admins')

@section('title',$title)

@section('css')
    <link href="/admins/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/admins/css/animate.css" rel="stylesheet">
    <link href="/admins/css/style.css?v=2.2.0" rel="stylesheet">
@endsection


@section('content')
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>友情连接 <small>链接修改</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                               
                            </div>
                        </div>                      
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
                        <form action="/admin/friend/{{$res->id}}" method="post" class="form-horizontal">
                            <div class="ibox-content">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">用户名</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value='{{$res->aname}}' disabled>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">性别</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value='@if($res->sex == 1)男@else女@endif' disabled>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">手机号</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value='{{$res->phone}}' disabled>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">邮箱</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value='{{$res->email}}' disabled>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">头像</label>
                                    <div class="col-sm-6">
                                        <img src="{{$res->img}}">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">状态</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="status" value='@if($res->status == 1)正常@else冻结@endif' >
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">注册时间</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value='{{date('Y-m-d H:i:s',$res->addtime)}}' disabled>

                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">送货地址</label>
                                    <div class="col-sm-6">
                                        <input type="button" data-toggle="modal" data-target="#my1Modal" class="btn btn-info" value="点击查看">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div> 
                                <div class="form-group">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-6">

                                        {{csrf_field()}}

                                        {{method_field('PUT')}}

                                        <input type="submit"  class="btn btn-default" value="修改">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



<!-- 送货地址模态框 start -->
<div class="modal fade bs-example-modal-lg" id="my1Modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{$res->aname}} 用户地址查看</h4>
      </div>
      <div class="modal-body">
        <!-- <p>此用户还没有添加任何地址！！！</p> -->
        @if(count($uadata) == 0)
           <p>此用户还没有添加任何地址！！！</p> 
        @endif
        @foreach($uadata as $v)
        <div class="row c_address">
            <p>
                <span class="col-sm-2">收货人：{{$v->consignee}}</span>
                <span class="col-sm-3">手机号：{{$v->phone}}</span>
                <span class="col-sm-7">所在地区：{{$v->location}}</span>
                <span class="col-sm-5">详细地址：{{$v->detailed}}</span>
                <span class="col-sm-2">地址标签：{{$v->adrlabel}}</span>
                <span class="col-sm-4">添加时间：{{date('Y-m-d H:i:s',$v->addtime)}}</span>
                @if($v->defaultadr == 1)
                <span class="col-sm-1"><span class="label label-info">默认</span></span>
                @endif
            </p>
        </div>
        @endforeach


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- 送货地址模态框 end -->

<style type="text/css">
    .c_address {
        margin-bottom: 15px;
        padding-bottom:5px;
        border-bottom: dashed 1px #ccc; 
    }
    .c_address p {
        line-height: 1.8em;
    }

</style>
@endsection


@section('js')
    
     <!-- iCheck -->
    <script src="/admins/js/plugins/iCheck/icheck.min.js"></script>
    <script>

        $('alert').delay(1000).fadeOut(2000);
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>



    <script type="text/javascript">
        //送货地址模态框js

    </script>
   
@endsection