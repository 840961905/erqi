<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\Orders;
use App\Model\Admin\Orderstatu;
use App\Model\Admin\Address;
use App\Model\Admin\Goods;
class OrdersController extends Controller
{
    //
    public function index()
    {

    	$res = \DB::table("orders")->select("orders.*","users.aname", "goods.gname", "orderstatu.name as ddstatus")
    		->join("users","users.id","=","orders.uid")
    		->join("goods","goods.id","=","orders.gid")
    		->join("orderstatu","orderstatu.id","=","orders.status")
    		->get();


        $newArr = array();
        foreach ($res as $key => $value) {
            $newArr[$value->code] = $value;
        }


    	// $newArr=array();
    	// foreach($res as $key => $value){
    	// 	$newArr[$value->code];
    	// }

    	// 获取所有订单状态";
    	$orderstatu_data = Orderstatu::all();

    	// echo "订单管理中心";
    	return view('admin.orders.index',[
            'title'=>'订单管理中心',
            'res'=>$newArr,
            'orderstatudata'=>$orderstatu_data
        ]);
    }



    //修改程序
    public function update(Request $request, $id)
    {
    	//获取数据
    	$res = $request->except('_token','_method');

    	if($res['status'] == 0){
        	return redirect('admin/orders')->with('success','修改成功');
        	exit();
    	}

    	//截取 _ 以后的内容
    	$id = str_after($id,'_');


    	// dd($res);

    	// $rows = Orders::where('code','=',$id)->first();
    	// dump($rows);
    

    	//数据表修改数据
        try{

            $data = Orders::where('code','=',$id)->update($res);
            
            if($data){
                return redirect('/admin/orders')->with('success','修改成功');
            }

        }catch(\Exception $e){

            return back()->with('error','修改失败');
        }
    }



    public function address()
    {
        //获取id
        $id = $_GET['id'];
        //获取ID 对应的数据
        $address_data = Address::where('id',$id)->first();

        //单个获取数据
        $a_consignee = $address_data->consignee;
        $a_phone = $address_data->phone;
        $a_location = $address_data->location;
        $a_detailed = $address_data->detailed;
        $a_adrlabel = $address_data->adrlabel;
        $a_addtime = $address_data->addtime;

        
        $jieg=array(
            "consignee"=>$a_consignee,
            "phone"=>$a_phone,
            "location"=>$a_location,
            "detailed"=>$a_detailed,
            "adrlabel"=>$a_adrlabel,
            "addtime"=>$a_addtime
        );
        return response()->json($jieg);

    }




    //查看详细订单
    public function check()
    {
        // 获取ID
        $id = $_GET['id'];
        // 获取数据库ID订单
        $orders_data = Orders::where("code","=",$id)->get();
        
        $cs = [];
        $sc = [];
        foreach ($orders_data as $key => $value) {
            $cs[] = Goods::find($value->gid)->gis()->first();
            $sc[] = Goods::find($value->gid);
        }


        return view('admin.orders.check',[
            'title' => "查看详细订单",
            'res' => $orders_data,
            'cs' => $cs,
            'sc' => $sc,
        ]);
    }
}
