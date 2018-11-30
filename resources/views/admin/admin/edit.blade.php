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

                <div class="form-group draggable ui-draggable">
                   <label class="col-sm-2 control-label">头像</label>
                   <div class="col-sm-7">
                        <img class="pic house-a" onclick="houseImgOne(this)" name="house_img_one" id="house_img_one" src="{{$res ->pri}}" width="100px" height="100px">
                        <input type="file" name="pri" id="house_img_one1"  multiple="multiple" style="display:none;">

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
<script>
    var _btnId = '';
    function houseImgOne(_this){
        _btnId = $(_this).attr('id');
        $('#house_img_one1').click();
        $("#house_img_one1").change(function () {
            var objUrl = getObjectURL(this.files[0]); //获取图片的路径，该路径不是图片在本地的路径
            if (objUrl) {
                $("#" + _btnId).attr("src", objUrl); //将图片路径存入src中，显示出图片ai
            }
        });
    }
    //建立一个可存取到该file的url
    function getObjectURL(file) {
        var url = null;
        if (window.createObjectURL != undefined) { 
            url = window.createObjectURL(file);
        } else if (window.URL != undefined) { 
            url = window.URL.createObjectURL(file);
        } else if (window.webkitURL != undefined) { 
            url = window.webkitURL.createObjectURL(file);
        }
        return url;
    }
</script>
@endsection