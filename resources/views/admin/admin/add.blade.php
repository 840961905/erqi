@extends('layout.admins')

@section('title',$title)

@section('content')
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>{{$title}}</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="form_basic.html#">选项1</a>
                    </li>
                    <li><a href="form_basic.html#">选项2</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
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
        <div class="ibox-content">
            <form method="post" action="/admin/admin" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-2 control-label">用户名</label>

                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="username">
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">密码</label>

                    <div class="col-sm-7">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="hr-line-dashed"></div>

                <div class="form-group draggable ui-draggable">
                   <label class="col-sm-2 control-label">头像</label>
                   <div class="col-sm-7">
                       <input type="file" name="pri" class="form-control">
                   </div>
                </div>


                <div class="form-group">

                    <label class="col-sm-2 control-label">状态</label>
                    <label class="control-label">
                        <input type="radio" value="1" id="optionsRadios1" name="status" checked >开启
                    </label>
                    <label class="control-label"> &nbsp;|&nbsp; </label>
                    <label class="control-label">
                        <input type="radio" value="0" id="optionsRadios1" name="status">关闭
                    </label>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="row">
                    {{csrf_field()}}
                    <div class="col-sm-4 col-sm-offset-2">
                        <input type="submit"class="btn btn-primary" value="提交">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


@section('js')


@endsection