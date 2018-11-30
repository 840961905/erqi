@extends('layout.admins')

@section('title',$title)

@section('css')
    <link href="/admins/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/admins/css/animate.css" rel="stylesheet">
    <link href="/admins/css/style.css?v=2.2.0" rel="stylesheet">

@endsection


@section('content')
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="container">
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
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>网站设置  <small>网站设置</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up">ok</i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                               
                            </div>
                        </div>
            
                        <form action="/admin/hinfo/{{$res->id}}" method="post" class="form-horizontal" enctype='multipart/form-data'>
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="ibox-content">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">网站标题</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="wname" value="{{$res->wname}}">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">服务热线</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="wphone" value="{{$res->wphone}}">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">网站Logo</label>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control" name="wlogo">
                                        <img src="{{$res->wlogo}}" alt="logo" width="210" height="60">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">网站关键字</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" rows="3" name="wkey">{{$res->wkey}}</textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">网站描述</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" rows="3" name="wdescri">{{$res->wdescri}}</textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">网站版权</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" rows="3" name="wcopyright">{{$res->wcopyright}}</textarea>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-6">

                                        {{csrf_field()}}

                                        {{method_field('PUT')}}

                                        <input type="submit"  class="btn btn-info" value="修改">
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


@endsection


@section('js')
    
     <!-- iCheck -->
    <script src="/admins/js/plugins/iCheck/icheck.min.js"></script>
    <script>

        $('.alert').delay(1000).fadeOut(2000);

        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
   
@endsection