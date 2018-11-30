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
                            <h5>广告管理 <small>广告修改</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                               
                            </div>
                        </div>                      
                        @if (count($errors) > 0)
                            <div class="alert alert-success alert-dismissable">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li style='list-style:none;font-size:14px'>{{$error}}</li> 
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="/admin/typeads/{{$adsinfo->id}}" method="post" class="form-horizontal" enctype='multipart/form-data'>
                            <div class="ibox-content">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">序号</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="id" value='{{$adsinfo->id}}' disabled>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">所属顶级分类</label>
                                    <div class="col-sm-6">
                                        <select class="form-control m-b" name="tid">
                                            @foreach($tadsinfo as $v)
                                                @if($v->pid == 0) 
                                                    <option value="{{$v->id}}" @if($v->pid == $tads->id) selected @endif >{{$v->tname}}</option>
                                                @endif  
                                            @endforeach 
                                        </select>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">跳转地址</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="href" value='{{$adsinfo->href}}'>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div> 
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">广告图片</label>
                                    <div class="col-sm-6">
                                        <img src="{{$adsinfo->img}}" alt="" width="100px" >
                                        <input type="file" class="form-control" name="img">
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
    </script>
   
@endsection