@extends('layout.admins')

@section('title',$title)

@section('css')
     <link href="/admins/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="/admins/css/animate.css" rel="stylesheet">
    <link href="/admins/css/style.css?v=2.2.0" rel="stylesheet">
@endsection

@section('content')
           

            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="container">

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

                    
                </div>
                       
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>订单评论管理列表 <small>订单评论管理列表</small></h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <table class="table table-striped table-bordered table-hover dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>序号</th>
                                            <th>用户名称</th>
                                            <th>商品名称</th>
                                            <th>商品图片</th>
                                            <th>留言内容</th>
                                            <th>好评星级</th>
                                            <th>评论状态</th>
                                            <th>评论时间</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($res as $k => $v)
                                        <tr class="gradeX">
                                            <td>{{$v->id}}</td>
                                            <td>{{$hquname[$k]->aname}}</td>
                                            <td>{{$hqgname[$k]->gname}}</td>
                                            <td><img src="{{$cs[$k]->gimg}}" width="60" /></td>
                                            <td>{{$v->content}}</td>
                                            <td>{{$v->star}}</td>
                                            <td>
                                                @if($v->status == 1)
                                                    <a href="javascript:if(confirm('是否要冻结此文章?'))window.location='/admin/comment/status/{{$v->id}}'" class="btn btn-info btn-sm">正常</a>
                                                @else
                                                    <a href="javascript:if(confirm('是否要恢复此文章状态?'))window.location='/admin/comment/status/{{$v->id}}'" class="btn btn-danger btn-sm">冻结中</a>
                                                @endif
                                            </td>
                                            <td>{{date('Y-m-d H:i:s',$v->time)}}</td>
                                            <td><button class="btn btn-info btn-sm rescheck" data-toggle="modal" data-target="#my1Modal1">查看详情</button></td>
                                        </tr>
                                        @endforeach
                                    </tbody> 

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
	</div>	



<!-- 查看留言详情模态框 start -->
<div class="modal fade bs-example-modal-lg" id="my1Modal1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">用户地址查看</h4>
      </div>
      <div class="modal-body">
        <!-- <p>此用户还没有添加任何地址！！！</p> -->

<form class="form-horizontal modal_comment_v" action="" method="post">
<div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">留言内容</label>
    <div class="col-sm-10">
      <textarea class="form-control ajax_content" rows="3" placeholder="信息加载中..." disabled></textarea>
    </div>
</div>
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">留言IP</label>
    <div class="col-sm-10">
      <input type="text" class="form-control ajax_commip" placeholder="信息加载中..." value="" disabled />
    </div>
</div>
<div class="form-group">
    
    <label for="inputPassword3" class="col-sm-2 control-label">操作</label>
    <div class="col-sm-10">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="危险操作">删除此留言</button>
    </div>
</div>
</form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- 查看留言详情模态框 end -->


@endsection


@section('js')
    <script src="/admins/js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="/admins/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="/admins/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Page-Level Scripts -->
    <script>

        $('.alert').delay(1000).fadeOut(2000);
        $('.alert').delay(1000).fadeOut(2000);

        $(document).ready(function () {
            $('.dataTables-example').dataTable();

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable('../example_ajax.php', {
                "callback": function (sValue, y) {
                    var aPos = oTable.fnGetPosition(this);
                    oTable.fnUpdate(sValue, aPos[0], aPos[1]);
                },
                "submitdata": function (value, settings) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition(this)[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            });


        });


        $('[data-toggle="tooltip"]').tooltip()
    </script>



    <script type="text/javascript">
        $(".rescheck").click(function(){
            //获取ID号
            var resid = $(this).parent().parent().find('td').eq(0).text();

            $(".modal_comment_v").attr('action','/admin/comment/'+resid);

            //发送ajax查询信息
            $.ajax({    
                type:'get',
                data:{
                'id':resid
                },
                url:"/admin/comment/chackinfo",
            }).done(function(res){
                // console.log(res);
                $(".ajax_content").text(res.content);
                $(".ajax_commip").val(res.commip);
            }).fail(function(){
                console.log("error")
            })
        });


    </script>

   
@endsection