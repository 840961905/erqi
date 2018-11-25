@extends('layout.admins')

@section('title',$title)

@section('content')
   <div class="row wrapper border-bottom white-bg page-heading">
       <div class="col-lg-10">
           <h2>商品管理</h2>
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
                  
                   <form role="form" class="form-horizontal m-t col-sm-6">
                       <div class="form-group draggable ui-draggable">
                           <label class="col-sm-3 control-label">文本框：</label>
                           <div class="col-sm-9">
                               <input type="text" name="" class="form-control" placeholder="请输入文本">
                              
                           </div>
                       </div>
                       <div class="form-group draggable ui-draggable">
                           <label class="col-sm-3 control-label">密码框：</label>
                           <div class="col-sm-9">
                               <input type="password" class="form-control" name="password" placeholder="请输入密码">
                           </div>
                       </div>
                       <div class="form-group draggable ui-draggable">
                           <label class="col-sm-3 control-label">下拉列表：</label>
                           <div class="col-sm-9">
                               <select class="form-control" name="">
                                   <option>选项 1</option>
                                   <option>选项 2</option>
                                   <option>选项 3</option>
                                   <option>选项 4</option>
                               </select>
                           </div>
                       </div>
                       <div class="form-group draggable ui-draggable">
                           <label class="col-sm-3 control-label">文件域：</label>
                           <div class="col-sm-9">
                               <input type="file" name="" class="form-control">
                           </div>
                       </div>
                       <div class="form-group draggable ui-draggable">
                           <label class="col-sm-3 control-label">纯文本：</label>

                           <div class="col-sm-9">
                               <p class="form-control-static">这里是纯文字信息</p>
                           </div>
                       </div>
                       <div class="form-group draggable ui-draggable">
                           <label class="col-sm-3 control-label">单选框：
                           </label>

                           <div class="col-sm-9">
                               <label class="radio-inline">
                                   <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">选项1</label>
                               <label class="radio-inline">
                                   <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios">选项2</label>

                           </div>
                       </div>
                       <div class="form-group draggable ui-draggable">
                           <label class="col-sm-3 control-label">复选框：</label>

                           <div class="col-sm-9">
                               <label class="checkbox-inline">
                                   <input type="checkbox" value="option1" id="inlineCheckbox1">选项1</label>
                               <label class="checkbox-inline">
                                   <input type="checkbox" value="option2" id="inlineCheckbox2">选项2</label>
                               <label class="checkbox-inline">
                                   <input type="checkbox" value="option3" id="inlineCheckbox3">选项3</label>
                           </div>
                       </div>
                       <div class="hr-line-dashed"></div>
                       <div class="form-group draggable ui-draggable">
                           <div class="col-sm-12 col-sm-offset-3">
                               <button class="btn btn-primary" type="submit">保存内容</button>
                               <button class="btn btn-white" type="submit">取消</button>
                           </div>
                       </div>
                   </form>
                   <div class="clearfix"></div>
               </div>
           </div>
       </div>
   </div>
  
@endsection