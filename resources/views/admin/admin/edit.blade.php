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
            <form method="post" action="/admin/admin/{{$res->id}}" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-2 control-label">用户名</label>

                    <div class="col-sm-7">
                        <input type="text" class="form-control" value="{{$res ->username}}" name="username">
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">权限</label>

                    <div class="col-sm-3">
                        <select class="form-control m-b" name="account">
                            <option value="0" @if($res->account == 0) selected @endif >超级管理员</option>
                            <option value="1" @if($res->account == 1) selected @endif >CEO</option>
                            <option value="2" @if($res->account == 2) selected @endif >CTO</option>
                            <option value="3" @if($res->account == 3) selected @endif >COO</option>
                            <option value="4" @if($res->account == 4) selected @endif >正式员工</option>
                            <option value="5" @if($res->account == 5) selected @endif >临时工</option>
                        </select>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>

                <div class="form-group draggable ui-draggable">
                   <label class="col-sm-2 control-label">头像</label>
                   <div class="col-sm-7">
                       <input type="file" name="pri" class="form-control">
                       <img src="{{$res -> pri}}" alt="" width="100px">
                   </div>
                </div>


                <div class="form-group">

                    <label class="col-sm-2 control-label">状态</label>
                    <label class="control-label">
                        <input type="radio" value="1" id="optionsRadios1" name="status"  @if($res->status == 1) checked @endif >开启
                    </label>
                    <label class="control-label"> &nbsp;|&nbsp; </label>
                    <label class="control-label">
                        <input type="radio"  value="0" id="optionsRadios1" name="status"  @if($res->status == 0) checked @endif>关闭
                    </label>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="row">
                    {{csrf_field()}}
                    {{method_field('PUT')}}

                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit">修改</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


@section('js')


@endsection