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
                                <h5>商品管理 <small>{{$title}}</small></h5>
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
                                            <th>所在分类</th>
                                            <th>商品名称</th>
                                            <th>商品价格</th>
                                            <th>商品编码</th>
                                            <th>商品版本</th>
                                            <th>商品颜色</th>
                                            <th>商品库存</th>
                                            <th>商品描述</th>
                                            <th>商品图片</th>
                                            <th>商品状态</th>
                                            <th>商品关键字</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        @foreach($res as $k=>$v)
                                        <tr class="gradeX">
                                            <td>{{$v->id}}</td>
                                            @foreach($rs as $k=>$vv)
                                            @if($v->tid == $vv->id)
                                            <td>
                                            
                                            {{$vv->tname}}
                                            </td>
                                            @endif
                                            @endforeach
                                            <td>{{$v->gname}}</td>
                                            <td>{{$v->price}}</td>
                                            <td>{{$v->bianma}}</td>
                                            <td>{{$v->size}}</td>
                                            <td>{{$v->color}}</td>
                                            <td>{{$v->stock}}</td>
                                            <td><a href="/admin/text?id={{$v->id}}">描述</a></td>
                                            <td><a href="/admin/imgs?id={{$v->id}}">图片</a></td>
                                            <td>{{$v->status ? '上架' : '下架'}}</td>
                                            <td>
                                                @switch($v->keywords)
                                                    @case(1)
                                                        热卖
                                                        @break
                                                    @case(2)
                                                        爆款
                                                        @break
                                                    @case(3)
                                                        新品
                                                        @break
                                                    @case(4)
                                                        特惠
                                                        @break

                                                    @default
                                                        
                                                @endswitch
                                            </td>
                                            <td>
                                                <a href="/admin/shop/{{$v->id}}/edit" class=" btn btn-info ">编辑</a>
                                                
                                                <form action="/admin/shop/{{$v->id}}" method='post' style='display:inline'>
                                                    
                                                    {{csrf_field()}}

                                                    {{method_field('DELETE')}}

                                                    <button class="btn btn-danger">删除</button>
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