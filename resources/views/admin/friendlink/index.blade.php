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
                        <div class="alert alert-info">
                            <ul>
                                <li style='list-style:none;font-size:14px'>{{session('success')}}</li>
                            </ul>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-success alert-dismissable">
                            <ul>
                                <li style='list-style:none;font-size:14px'>{{session('error')}}</li>
                            </ul>
                        </div>
                    @endif

                    
                </div>
                       
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>友情连接管理 <small>所有链接</small></h5>
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
                                            <th>名称</th>
                                            <th>地址</th>
                                            <th>添加时间</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	@foreach($finfo as $v)
                                        <tr class="gradeX">
                                            <td>{{$v->id}}</td>
                                            <td>{{$v->fname}}
                                            </td>
                                            <td>{{$v->href}}</td>
                                            <td>{{$v->addtime}}</td>
                            			 <td class="center ">
		                                      <a href="/admin/friend/{{$v->id}}/edit" class="btn btn-info">修改</a>
		                                      <a href="javascript:void(0)" class='remove btn btn-danger'>删除</a>
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

         //删除数据
        $('.remove').click(function(){

            //提示信息
            var res =  confirm('你确定删除吗??');

            if(!res) return;

             //参数发送到控制器中   id
             //获取id
            var gid = $(this).parents('tr').find('td').first().text();

            //console.log(gid);

            var rem = $(this);

            $.get('/admin/fdel',{gid:gid},function(data){
            console.log(data);


                if(data == 1){

                    rem.parents('tr').remove();
                    //location.reload();
                }   
            })

        })

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