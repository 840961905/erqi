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
            <form method="post" action="/admin/do_admin_role?id={{$res->id}}" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-sm-2 control-label">用户名</label>

                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="username" value="{{$res->username}}">
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                        @foreach($roles as $k => $v)
                        @if(in_array($v->id,$info))
                        <label class="checkbox-inline control-label">
                            <input type="checkbox" value="{{$v->id}}" name="role_id[]" id="inlineCheckbox1" checked>{{$v->role_name}}</label>
                        @else
                        <label class="checkbox-inline control-label">
                            <input type="checkbox" value="{{$v->id}}" name="role_id[]" id="inlineCheckbox1">{{$v->role_name}}</label>
                        @endif
                        @endforeach
                    </div>
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