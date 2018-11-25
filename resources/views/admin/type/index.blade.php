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
                   <strong>分类查看页面</strong>
               </li>
           </ol>
       </div>
       <div class="col-lg-2">

       </div>
       <div class="col-sm-12" style="margin-top:10px;">
           
       </div>
       <div class="col-lg-12">
           <div class="ibox float-e-margins">
               <div class="ibox-title">
                   
                   <div class="ibox-tools">
                       <a class="collapse-link">
                           <i class="fa fa-chevron-up">
                           </i>
                       </a>
                       <a class="dropdown-toggle" data-toggle="dropdown" href="table_data_tables.html#">
                           <i class="fa fa-wrench">
                           </i>
                       </a>
                       <ul class="dropdown-menu dropdown-user">
                           <li>
                               <a href="table_data_tables.html#">
                                   选项1
                               </a>
                           </li>
                           <li>
                               <a href="table_data_tables.html#">
                                   选项2
                               </a>
                           </li>
                       </ul>
                       <a class="close-link">
                           <i class="fa fa-times">
                           </i>
                       </a>
                   </div>
               </div>
               <div class="ibox-content">
                   <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline"
                   role="grid">
                       <div class="row">
                           <div class="col-sm-6">
                               <div class="dataTables_length" id="DataTables_Table_0_length">
                                   <label>
                                       每页
                                       <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                       class="form-control input-sm">
                                           <option value="10" @if($request->num == 10)  selected="selected" @endif>
                                                10
                                            </option>
                                            <option value="25"  @if($request->num == 25)  selected="selected" @endif>
                                                25
                                            </option>
                                            <option value="30"  @if($request->num == 30)  selected="selected" @endif>
                                                30
                                            </option>
                                       </select>
                                       条记录
                                   </label>
                               </div>
                           </div>
                           <div class="col-sm-6">
                               <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                   <label style="float: right;font-weight: normal;">
                                       查找：
                                       <input type="search" class="form-control input-sm" aria-controls="DataTables_Table_0">
                                   </label>
                               </div>
                           </div>
                       </div>
                       <table class="table table-striped table-bordered table-hover dataTables-example dataTable"
                       id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                           <thead>
                               <tr role="row">
                               	  <th style="
                               	    border-top: 1px solid #e7eaec;
                  									line-height: 1.42857;
                  									padding: 8px;
                  									vertical-align: top;">
                                    <div class="icheckbox_square-green" style="position: relative;
                                    display: inline-block;
                                        background-position: -48px 0;
                                    vertical-align: middle;
                                    margin: 0;
                                    padding: 0;
                                    width: 22px;
                                    height: 22px;
                                    background: url(/admins/img/green.png) no-repeat;
                                    border: none;
                                    cursor: pointer;
                                    "><input type="checkbox" checked="" class="i-checks" name="input[]" style="position: absolute; opacity: 0;
                                        "><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                   </th>
                                   
                                   <th class="sorting_asc" tabindex="0" aria-controls="editable" rowspan="1" colspan="1" aria-label="渲染引擎：激活排序列升序" style="width: 161px;" aria-sort="ascending">id</th>
                                   <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                   colspan="1" aria-label="浏览器：激活排序列升序" style="width: 200px;">
                                       分类名
                                   </th>
                                   <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                   colspan="1" aria-label="平台：激活排序列升序" style="width: 150px;">
                                       pid
                                   </th>
                                   <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                   colspan="1" aria-label="引擎版本：激活排序列升序" style="width: 200px;">
                                       路径
                                   </th>
                                   <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                   colspan="1" aria-label="引擎版本：激活排序列升序" style="width: 113px;">
                                       状态
                                   </th>
                                   <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                   colspan="1" aria-label="CSS等级：激活排序列升序" style="width: 166px;">
                                       操作
                                   </th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr class="gradeA odd">
                                 @foreach ($res as $k=> $v)
                               	<td style="
                               	    border-top: 1px solid #e7eaec;
                  									line-height: 1.42857;
                  									padding: 8px;
                  									vertical-align: top;">
                                    <div class="icheckbox_square-green checked" style="position: relative;
                                    display: inline-block;
                                        background-position: -48px 0;
                                    vertical-align: middle;
                                    margin: 0;
                                    padding: 0;
                                    width: 22px;
                                    height: 22px;
                                    background: url(/admins/img/green.png) no-repeat;
                                    border: none;
                                    cursor: pointer;
                                    "><input type="checkbox" checked="" class="i-checks" name="input[]" style="position: absolute; opacity: 0;
                                        "><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                   </td>
                                  
                                   <td class="sorting_1">
                                      {{$v->id}}
                                   </td>
                                   <td class=" ">
                                      {{$v->tname}}
                                   </td>
                                   <td class=" ">
                                      {{lists($v->pid)}}
                                   </td>
                                   <td class="center ">
                                       {{$v->path}}
                                   </td>
                                   <td class="center ">
                                      {{$v->status ? '上架' : '下架'}}
                                   </td>
                                   <td class="center ">
                                      <a href="/admin/type/{{$v->id}}/edit" class="btn btn-info">修改</a>
                                      <form action="/admin/type/{{$v->id}}" method='post' style='display:inline'>
                                      {{csrf_field()}}

                                      {{method_field("DELETE")}}
                                      <button class='btn btn-danger'>删除</button>

                                      </form>
                                   </td>
                               </tr>
                              
                               @endforeach
                           </tbody>
                          
                       </table>
                       <style>
                          .pagination {
                                display: inline-block;
                                padding-left: 0;
                                border-radius: 4px;
                                margin:0px;
                            }
                       </style>
                       <div class="row">
                           <div class="col-sm-6">
                               <div class="dataTables_info" id="DataTables_Table_0_info" role="alert"
                               aria-live="polite" aria-relevant="all">
                                   显示当前页码是{{$res->currentPage()}} 从{{$res->firstItem()}} to {{$res->lastItem()}} 一共{{$res->total()}}条数据
                               </div>
                           </div>
                           <div class="col-sm-6">
                               <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate" style="float: right;margin: 0;">
                                   {{$res->appends($request->all())->links()}}
                                   
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
  
@endsection