@extends('layout.admins')

@section('title',$title)

@section('css')
    <link href="/admins/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/admins/css/animate.css" rel="stylesheet">
    <link href="/admins/css/style.css?v=2.2.0" rel="stylesheet">
@endsection
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>

@section('content')
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>商品管理 <small>{{$title}}</small></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                               
                            </div>
                        </div>
                        <div class="ibox-content ">
                           
                            <form action="/admin/shop" method="post" role="form" class="form-horizontal m-t col-sm-6" enctype="multipart/form-data">
                                <div class="form-group draggable ui-draggable">
                                    <label class="col-sm-3 control-label">分类名：</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="tid">
                                            <option>--请选择--</option>
                                            @foreach($rs as $v)
                                            <option value='{{$v->id}}'>{{$v->tname}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group draggable ui-draggable">
                                    <label class="col-sm-3 control-label">商品名称：</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="gname" class="form-control" placeholder="商品名称">
                                       
                                    </div>
                                </div>
                                <div class="form-group draggable ui-draggable">
                                    <label class="col-sm-3 control-label">商品说明：</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="info" class="form-control" placeholder="商品说明">
                                       
                                    </div>
                                </div>
                                <div class="form-group draggable ui-draggable">
                                    <label class="col-sm-3 control-label">商品价格：</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="price" class="form-control" placeholder="商品价格">
                                       
                                    </div>
                                </div>
                                <div class="form-group draggable ui-draggable">
                                    <label class="col-sm-3 control-label">服务说明:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="fwsm" class="form-control" placeholder="服务说明">
                                       
                                    </div>
                                </div>
                                <div class="form-group draggable ui-draggable">
                                    <label class="col-sm-3 control-label">商品编码：</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="bianma" class="form-control" placeholder="商品名称">
                                       
                                    </div>
                                </div>
                                
                               <div class="form-group draggable ui-draggable">
                                   <label class="col-sm-3 control-label">商品版本：</label>
                                   <div class="col-sm-9">
                                       <input type="text" name="size" class="form-control" placeholder="商品版本">
                                      
                                   </div>
                               </div>
                               <div class="form-group draggable ui-draggable">
                                   <label class="col-sm-3 control-label">商品颜色：</label>
                                   <div class="col-sm-9">
                                       <input type="text" name="color" class="form-control" placeholder="商品颜色">
                                      
                                   </div>
                               </div>
                               <div class="form-group draggable ui-draggable">
                                   <label class="col-sm-3 control-label">商品库存：</label>
                                   <div class="col-sm-9">
                                       <input type="text" name="stock" class="form-control" placeholder="商品库存">
                                      
                                   </div>
                               </div>
                               <div class="form-group draggable ui-draggable">
                                   <label class="col-sm-3 control-label">商品描述：</label>
                                   <div class="col-sm-9">
                                       <div class="mws-form-item">
                                            <script id="editor" name='text' type="text/plain" style="width:760px;height:500px;"></script>
                                        </div>
                                      
                                   </div>
                               </div>
                                <div class="form-group draggable ui-draggable">
                                    <label class="col-sm-3 control-label">商品图片：</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="gimg[]" class="form-control" multiple>
                                    </div>
                                </div>
                                <div class="form-group draggable ui-draggable">
                                    <label class="col-sm-3 control-label">商品状态：
                                    </label>

                                    <div class="col-sm-9">
                                        <label class="radio-inline">
                                            <input type="radio" checked="" value="1" id="optionsRadios1" name="status">上架</label>
                                        <label class="radio-inline">
                                            <input type="radio" value="0" id="optionsRadios2" name="status">下架</label>

                                    </div>
                                </div>
                                <div class="form-group draggable ui-draggable">
                                    <label class="col-sm-3 control-label">商品关键字：
                                    </label>

                                    <div class="col-sm-9">
                                        <label class="radio-inline">
                                            <input type="radio" checked="" value="1" id="optionsRadios1" name="keywords">热卖</label>
                                        <label class="radio-inline">
                                            <input type="radio" value="2" id="optionsRadios2" name="keywords">爆款</label>
                                        <label class="radio-inline">
                                            <input type="radio" checked="" value="3" id="optionsRadios1" name="keywords">新品</label>
                                        <label class="radio-inline">
                                            <input type="radio" value="4" id="optionsRadios2" name="keywords">特惠</label>

                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group draggable ui-draggable">
                                    <div class="col-sm-12 col-sm-offset-3">
                                        {{csrf_field()}}
                                        <input type="submit" value="保存内容" class="btn btn-primary">
                                        
                                    </div>
                                </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>
            
                       
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
   
    <script>
     var ue = UE.getEditor('editor');
    </script>
@endsection



