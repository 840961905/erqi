@extends('layout.admins')

@section('title',$title)

@section('content')
   <div class="row wrapper border-bottom white-bg page-heading">
       <div class="col-lg-10">
           <h2>分类管理</h2>
           <ol class="breadcrumb">
               <li>
                   <a href="/admin">主页</a>
               </li>
               
               <li>
                   <strong>{{$title}}</strong>
               </li>
           </ol>
       </div>
       <div class="col-lg-2">

       </div>
       <div class="col-sm-12" style="margin-top:10px;">
           <div class="ibox float-e-margins">
               <div class="ibox-title">
                  
                   <div class="ibox-tools">
                       <a class="collapse-link">
                           <i class="fa fa-chevron-up"></i>
                       </a>
                       <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                           <i class="fa fa-wrench"></i>
                       </a>
                       <ul class="dropdown-menu dropdown-user">
                           <li><a href="form_editors.html#">选项1</a>
                           </li>
                           <li><a href="form_editors.html#">选项2</a>
                           </li>
                       </ul>
                       <a class="close-link">
                           <i class="fa fa-times"></i>
                       </a>
                   </div>
               </div>
               <div class="ibox-content ">
                  
                   <form action="/admin/type/{{$res->id}}" method="post" role="form" class="form-horizontal m-t col-sm-6">
                       <div class="form-group draggable ui-draggable">
                           <label class="col-sm-3 control-label">分类名：</label>
                           <div class="col-sm-9">
                               <input type="text" name="tname" class="form-control" placeholder="{{$res->tname}}">
                               
                           </div>
                       </div>
                    
                       <div class="form-group draggable ui-draggable">
                           <label class="col-sm-3 control-label">顶级分类：</label>
                           <div class="col-sm-9">
                               <select class="form-control" name="pid" disabled>
                                 <option value="0">请选择</option>
                                 @foreach($rs as $v)
                                  <option value="{{$v->id}}" @if($res->pid == $v->id) selected @endif >{{$v->tname}}</option>
                                 @endforeach
                               </select>
                           </div>
                       </div>
                      
                       
                       <div class="form-group draggable ui-draggable">
                           <label class="col-sm-3 control-label">状态：
                           </label>

                           <div class="col-sm-9">
                               <label class="radio-inline">
                                   <input type="radio" checked="" value="1" id="optionsRadios1" name="status">上架</label>
                               <label class="radio-inline">
                                   <input type="radio" value="0" id="optionsRadios2" name="status">下架</label>

                           </div>
                       </div>
                       
                       <div class="hr-line-dashed"></div>
                       <div class="form-group draggable ui-draggable">
                           <div class="col-sm-12 col-sm-offset-3">
                              {{csrf_field()}}

                              {{method_field('PUT')}}
                               <input type="submit" value="修改" class="btn btn-primary" >
                           </div>
                       </div>
                   </form>
                   <div class="clearfix"></div>
               </div>
           </div>
       </div>
   </div>
  
@endsection

