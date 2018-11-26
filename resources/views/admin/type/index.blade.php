@extends('layout.admins')

@section('title',$title)

@section('css')


    <link href="/admins/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="/admins/font-awesome/css/font-awesome.css?v=4.3.0" rel="stylesheet">

    <!-- Data Tables -->
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
                                <h5>分类管理 <small>{{$title}}</small></h5>
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
                                            <th>分类名</th>
                                            <th>pid</th>
                                            <th>路径</th>
                                            <th>状态</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($res as $k=> $v)
                                          <tr class="gradeA odd">
                                           
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

                            </div>
                        </div>
                    </div>
                </div>
  </div>  
@endsection


@section('js')
    <script>

        $('.alert').delay(1000).fadeOut(2000);
        $('.alert').delay(1000).fadeOut(2000);

    </script>
   



    <!-- Mainly scripts -->
    <script src="/admins/js/jquery-2.1.1.min.js"></script>
    <script src="/admins/js/bootstrap.min.js?v=3.4.0"></script>
    <script src="/admins/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/admins/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="/admins/js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="/admins/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="/admins/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/admins/js/hplus.js?v=2.2.0"></script>
    <script src="/admins/js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
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

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData([
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row"]);

        }
    </script>
@endsection








