<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Model\Admin\Address;
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
    	return view('home.person.person',['title'=>'个人中心']);
    }


    //收货地址管理
    public function addr()
    {
        //向 Address地址表 查询当前的 用户ID
        $addr_data = Address::where('uid','=','1')->get();

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




    //我的订单
    public function order()
    {
        return view('home.person.order.index',['title'=>'我的订单']);
    }


}
