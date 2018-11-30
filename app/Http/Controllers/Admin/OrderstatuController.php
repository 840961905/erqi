<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\Orderstatu;
class OrderstatuController extends Controller
{
    //
    public function index()
    {
    	// echo "订单状态管理中心";
    	$res = Orderstatu::all();


        return view('admin.orderstatu.index',[
            'title'=>'订单状态管理中心',
            'res'=>$res
        ]);
    }


    //修改页面
    public function edit($id)
    {
    	// 根据id获取数据
        $res = Orderstatu::find($id);

        return view('admin.orderstatu.edit',[
            'title'=>'订单状态修改页面',
            'res'=>$res
        ]);
    }

    //修改程序
    public function update(Request $request, $id)
    {

    	//
    	$res = $request->except('_token','_method');
    	
    	//数据表修改数据
        try{

            $data = Orderstatu::where('id', $id)->update($res);
            
            if($data){
                return redirect('/admin/orderstatu')->with('success','修改成功');
            }

        }catch(\Exception $e){

            return back()->with('error','修改失败');
        }
    }


    //添加程序
    public function store(Request $request)
    {
    	//获取数据
    	$res = $request->except('_token');

    	//单个拿出 name 状态标题
		$res_name = $res['name'];

		//向数据库查询 新添加的 状态标题是否存在
		$or_data_name = Orderstatu::where('name',$res_name)->count();   //count()
		if($or_data_name != 0){
			return back()->with('error','状态标题以存在！');
			exit();
		}


		try{
            $data = Orderstatu::create($res);

            if($data){
                return redirect('/admin/orderstatu')->with('success','添加成功');
            }
        }catch(\Exception $e){
            return back()->with('error','添加失败');
        }


    }


}
