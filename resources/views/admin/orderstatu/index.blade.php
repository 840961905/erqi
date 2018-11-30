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
                                <h5>订单状态管理 <small>订单状态管理</small></h5>
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
                                            <th>状态标题</th>
                                            <th>备注</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	@foreach($res as $v)
                                        <tr class="gradeX">
                                            <td>{{$v->id}}</td>
                                            <td>{{$v->name}}</td>
                                            <td>{{$v->message}}</td>
                            			 <td class="center ">
		                                      <a href="/admin/orderstatu/{{$v->id}}/edit" class="btn btn-info">修改</a>
		                                   </td>

                                        </tr>
                                        @endforeach
                                    </tbody> 

                                </table>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#my1Modal">添加订单状态</button>
                            </div>
                        </div>
                    </div>
                </div>
	</div>	




<!-- 添加订单状态模态框 start -->
<div class="modal fade" id="my1Modal">
  <div class="modal-dialog">
    <form action="/admin/orderstatu" method="post" role="form" class="form-horizontal">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">添加订单状态</h4>
      </div>
      <div class="modal-body">
        <!-- <p>此用户还没有添加任何地址！！！</p> -->

<div class="row">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">状态标题</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="请输入状态标题" name="name" />
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">备注</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="message" />
      {{csrf_field()}}
    </div>
  </div>
</div>

      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">添加</button> -->
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">添加</button>
      </div>
    </div><!-- /.modal-content -->
    </form>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- 添加订单状态模态框 end -->

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

    </script>
   
@endsection