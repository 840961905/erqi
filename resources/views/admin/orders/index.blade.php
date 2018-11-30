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
                                <h5>订单管理列表 <small>订单管理列表</small></h5>
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
                                            <th>订单号</th>
                                            <th>用户名</th>
                                            <th>下单时间</th>
                                            <th>收货人信息</th>
                                            <th>订单状态</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($res as $v)
                                        <tr class="gradeX" id="orders_{{$v->code}}">
                                            <td>{{$v->id}}</td>
                                            <td><a href="/admin/orders/check?id={{$v->code}}" title="查看详细订单">{{$v->code}}</a></td>
                                            <td>{{$v->aname}}</td>
                                            <td>{{date('Y-m-d H:i:s',$v->time)}}</td>
                                            <td>
                                                <a href="javascript:void(0)" class="aid" data-toggle="modal" data-target="#my1Modal1">收货人信息</a>
                                                <input type="hidden" value="{{$v->aid}}" />
                                            </td>
                                            <td>{{$v->ddstatus}}</td>
                            			 <td class="center">
                                              <button class="btn btn-info orderstatu_xgai" data-toggle="modal" data-target="#my1Modal">修改</button>
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




<!-- 订单修改模态框 start -->
<div class="modal fade" id="my1Modal">
  <div class="modal-dialog modal-sm">
    <form action="" method="post" role="form" class="form-horizontal modal_orders_v">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">添加订单状态</h4>
      </div>
      <div class="modal-body">
        <!-- <p>此用户还没有添加任何地址！！！</p> -->

<div class="row">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-4 control-label">订单状态</label>
    <div class="col-sm-8">
      <!-- <input type="text" class="form-control" placeholder="请输入状态标题" name="name" /> -->
        <select class="form-control" name="status">
            <option class="orderstatu_ztai" value="0"></option>
            <hr>
            @foreach($orderstatudata as $v)
            <option value="{{$v->id}}">{{$v->name}}</option>
            @endforeach
        </select>
    </div>
  </div>
</div>

      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">添加</button> -->
        {{csrf_field()}}
        {{method_field('PUT')}}
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">确认修改</button>
      </div>
    </div><!-- /.modal-content -->
    </form>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- 订单修改模态框 end -->




<!-- 送货地址模态框 start -->
<div class="modal fade bs-example-modal-lg" id="my1Modal1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">用户地址查看</h4>
      </div>
      <div class="modal-body">
        <!-- <p>此用户还没有添加任何地址！！！</p> -->
        <div class="row c_address">
            <p>
                <span class="col-sm-2">收货人：<span class="ajax_consignee"></span></span>
                <span class="col-sm-3">手机号：<span class="ajax_phone"></span></span>
                <span class="col-sm-7">所在地区：<span class="ajax_location"></span></span>
                <span class="col-sm-5">详细地址：<span class="ajax_detailed"></span></span>
                <span class="col-sm-2">地址标签：<span class="ajax_adrlabel"></span></span>
                <span class="col-sm-4">添加时间：<span class="ajax_addtime"></span></span>
                <!-- <span class="col-sm-1"><span class="label label-info">默认</span></span> -->
            </p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- 送货地址模态框 end -->




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


    <script type="text/javascript">
        
        $(".orderstatu_xgai").click(function(){
            //获取当前tr ID
            var mygname = $(this).parent().parent().attr('id');

            //获取当前订单状态
            var myorderstatu = $("#"+mygname).find('td').eq(5).text();

            $('.orderstatu_ztai').text(myorderstatu);

            $(".modal_orders_v").attr('action','/admin/orders/'+mygname);

        });
    </script>



    <script type="text/javascript">
        $(".aid").click(function(){
            //获取当前tr ID
            var mygname = $(this).parent().parent().attr('id');
            //获取当前收货人 地址ID
            var myaid = $("#"+mygname).find('td').eq(4).find('input').val();

            
            $.ajax({
                type:'get',    
                data:{
                'id':myaid
                },
                url:"/admin/orders/address",  
            }).done(function(res){
                // console.log(res);

                $(".ajax_consignee").text(res.consignee);
                $(".ajax_phone").text(res.phone);
                $(".ajax_location").text(res.location);
                $(".ajax_detailed").text(res.detailed);
                $(".ajax_adrlabel").text(res.adrlabel);
                $(".ajax_addtime").text(res.addtime);


            }).fail(function(){
                console.log("error")
            })
        });

    </script>
   
@endsection