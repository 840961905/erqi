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
                                <h5>管理员管理 <small>所有管理员</small></h5>
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
                                            <th>用户名</th>
                                            <th>权限</th>
                                            <th>头像</th>
                                            <th>状态</th>
                                            <th>最后登录时间</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	@foreach($res as $v)
                                        <tr class="gradeX">
                                            <td>{{$v->id}}</td>
                                            <td>{{$v->username}}
                                            </td>
                                            <td>
                                                @switch($v->account)
                                                    @case(0)
                                                        超级管理员
                                                        @break
                                                    @case(1)
                                                        CEO
                                                        @break
                                                    @case(2)
                                                        CTO
                                                        @break
                                                    @case(3)
                                                        COO
                                                        @break
                                                    @case(4)
                                                        正式员工
                                                        @break
                                                    @case(5)
                                                        临时工
                                                        @break
                                                @endswitch
                                            </td>
                                            <td ><img src="{{$v->pri}}" alt="" width="100px" style="border-radius: 50%;"></td>
                                            <td>{{$v->status}}</td>
                                            <td>{{date('Y-m-d H:i:s',$v->lasttime)}}</td>

                            			 <td class="center ">
		                                      <a href="/admin/admin/{{$v->id}}/edit" class="btn btn-info">修改</a>
		                                      <form action="/admin/admin/{{$v->id}}" method='post' style='display:inline'>
		                                      {{csrf_field()}}

		                                      {{method_field("DELETE")}}
		                                      <button class='btn btn-danger'>删除</button>

		                                      </form>
		                                   </td>

                                        </tr>
                                        @endforeach
                                    </tbody> 
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
	</div>	
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