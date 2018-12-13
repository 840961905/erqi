<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Model\Admin\Address;
use App\Model\Admin\Orders;
use App\Model\Admin\Goods;
use App\Model\Admin\Goodsimg;
class PersonController extends Controller
{
    //
    /**
     * 显示个人中心
     *
     * @return \Illuminate\Http\Response
     */
    public function  person( )
    {
    	return view('home.person.person',['title'=>'中心']);
    }


    //收货地址管理
    public function addr(Request $request)
    {
        //获取 session userid 用户ID
        $session_id = $request->session()->get('userid');
        //向 Address地址表 查询当前的 用户ID
        $addr_data = Address::where('uid','=',$session_id)->get();

        return view('home.person.addr.index',[
            'title'=>'收货地址管理',
            'addrdata' => $addr_data
            ]);
    }
    //添加
    public function addradd(Request $request)
    {
        //获取数据  Request $request
        $res = $request->except('_token','province','area');

        $data_cont['uid'] = 1;
        $data_cont['consignee'] = $res['consignee'];
        $data_cont['phone'] = $res['phone'];
        $data_cont['location'] = $res['location'];
        $data_cont['detailed'] = $res['detailed'];
        //标签
        $data_cont['adrlabel'] = $res['adrlabel'];
        $data_cont['addtime'] = time();


        //获取当前用户的地址有多少条
        $uidsum = Address::where('uid',1)->count();
        //进行地址添加限制，最多可添加5条
        if($uidsum >= 5){
            return back()->with('error','添加失败，最多可添加5条信息');
        }

        //如果用户是否选择了，设置默认地址,如果选择则修改以前的数据都为 0
        if(isset($res['defaultFlag'])){
            $xgaires['defaultadr'] = '0';
            Address::where('uid', 1)->update($xgaires);
            $data_cont['defaultadr'] = '1';
        }

        try{
            $data = Address::create($data_cont);

            if($data){
                return redirect('/home/person/addr')->with('success','添加成功');
            }
        }catch(\Exception $e){
            return back()->with('error','添加失败');
        }

    }


    //edit
    public function edit(Request $request)
    {
        $res = $request->except('_token','province','area');


        $session_id = 1;
        /*
          "consignee" => "李晨祯"
          "phone" => "13001465555"
          "location" => "北京市(直辖市)  西城区"
          "detailed" => "兄弟连IT"
          "adrlabel" => "公司"
          "defaultFlag" => "1"
          "idid" => "addr-list-1"
        */

        //收货人
        $addr['consignee'] = $res['consignee'];
        //手机号
        $addr['phone'] = $res['phone'];
        //地址
        $addr['location'] = $res['location'];
        //详细地址
        $addr['detailed'] = $res['detailed'];
        //标签
        $addr['adrlabel'] = $res['adrlabel'];

        
        //修改地址的ID
        $id = substr($res['idid'],10);

        //如果用户是否选择了，设置默认地址,如果选择则修改以前的数据都为 0
        if(isset($res['defaultFlag'])){
            $xgaires['defaultadr'] = '0';
            Address::where('uid', $session_id)->update($xgaires);
            $addr['defaultadr'] = '1';
        }else {
            $addr['defaultadr'] = '0';
        }

        //数据表修改数据
        try{

            $data = Address::where('id',$id)->where('uid','=',$session_id)->update($addr);
            
            if($data){
                return redirect('/home/person/addr')->with('success','修改成功');
            }
        }catch(\Exception $e){

            return back()->with('error','修改失败');
        }



    }

    //ajax_default
    public function ajax_default()
    {
        //获取点击默认的ID
        $id = substr($_GET['id'],10);
        //获取 session ID 
        $session_id = 1;

        //查询是否有默认地址
        $usum = Address::where('uid','=',$session_id)->where('defaultadr','=','1')->count();

        if($usum != 0){
            $addmodify['defaultadr'] = '0';
            $res1 = Address::where('uid','=',$session_id)->update($addmodify);
            if($res1){
                $addmodify['defaultadr'] = '1';
                $res2 = Address::where('id','=',$id)->update($addmodify);
                $jieg=array(
                    "zhuangt"=>"1",
                    "tishi"=>"修改成功",
                );
            }
        }else {
            $addmodify['defaultadr'] = '1';
            $res2 = Address::where('id','=',$id)->update($addmodify);
            $jieg=array(
                "zhuangt"=>"1",
                "tishi"=>"修改成功",
            );
        }

        return response()->json($jieg);
    }


    //ajax_addrdeldel
    public function ajax_addrdeldel()
    {
        //获取点击默认的ID
        $id = substr($_GET['id'],10);
        //获取 session ID 
        $session_id = 1;

        //判断 session  和 地址 id是否一致
        $usum = Address::where('id','=',$id)->where('uid','=',$session_id)->count();
        if($usum == 0){
            $jieg=array(
                "zhuangt"=>"0",
                "tishi"=>"删除失败",
            );
            return response()->json($jieg);
            exit();
        }



        $res = Address::destroy($id);

        if($res){
            $jieg=array(
                "zhuangt"=>"1",
                "tishi"=>"删除成功",
                "id" => "addr-list-".$id,
            );
        }else {
            $jieg=array(
                "zhuangt"=>"1",
                "tishi"=>"删除失败",
            );
        }
        

        return response()->json($jieg);

    }







    //我的订单
    public function order(Request $request)
    {
        //获取 session userid 用户ID
        $session_id = $request->session()->get('userid');

        if (isset($_GET['pid'])) {
            $orders_data = Orders::select("orders.*","goods.gname as goodsid")
            ->where("uid","=",$session_id)
            ->where("orders.status","=",$_GET['pid'])
            ->join("goods","goods.id","=","orders.gid")
            ->orderBy('time','desc')
            ->get();
        }else {
            $orders_data = Orders::select("orders.*","goods.gname as goodsid")
            ->where("uid","=",$session_id)
            ->join("goods","goods.id","=","orders.gid")
            ->orderBy('time','desc')
            ->get();
        }
        

        // dd($orders_data);


        $newArr = array();
        foreach ($orders_data as $key => $value) {
            $newArr[$value->code] = $value;
        }


        // dd($orders_data);


        $goods_data = Goods::get();
        //dd($goods_data);
        // dump($orders_data);
        // dd($orders_data);
        //dd($newArr);
        return view('home.person.order.index',[
            'title'=>'我的订单',
            'ordersdata' => $orders_data,
            'res' => $newArr
            ]);
    }


}
