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
            <form method="post" action="/admin/orderstatu/{{$res->id}}" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label">状态标题</label>

                    <div class="col-sm-7">
                        <input type="text" class="form-control" value="{{$res->name}}" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">备注</label>

                    <div class="col-sm-7">
                        <input type="text" class="form-control" value="{{$res->message}}" name="message">
                    </div>
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