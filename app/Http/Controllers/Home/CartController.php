<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\Goods;
use App\Model\Admin\Goodsimg;
use DB;

class CartController extends Controller
{
    //
    public function cart()
    {
        
        $shop = session('shop');
 
    	return view('home.cart',[
    		'title'=>'商品购物车页面',
    		'shop'=>$shop
    	]);
    }
    
    // 删除商品
    public function shopcart(Request $request)
    {
        $id = $request->input('gid');
        
       
        // 遍历session中的商品
        $shop = session('shop');
        
        
        // 修改数量
        foreach ($shop as $key => $value) {
            if($value['id']==$id){
               unset($shop[$key]);
            }
        }
         // 将数据写入到session中 
        $request->session()->put('shop',$shop);
        echo 1;
    }


    public function addCar(Request $request)
    {
         // 从session中获取数据...
        // $value = session('key');
        // 指定默认值...
        // $value = session('key', 'default');
        // 存储数据到session...
        // session(['key' => 'value']);
        // 如果session里面存在商品  则找session里面的
        $data = session('shop')?session('shop'):array();
        $a = 0;
        // 如果存在 进行遍历  
        if($data){
            foreach ($data as $key => &$value) {
                if($value['id']==$_GET['id']){
                    // 如果购物车里有该商品  在进行加的时候  将购物车里面的加进行叠加
                    $value['num']=$value['num']+$_GET['num'];
                    $a = 1;
                }
            }
        }

        if(!$a){
            $data[]=array(
               
                "id"=>$_GET['id'],
                "num"=>$_GET['num'],
                "goodsinfo"=>\DB::table("goods")->where('id',$_GET['id'])->first(),
            );
        }
       
        // 将数据写入到session中 
        $request->session()->put('shop',$data);
        $data = session('shop');
        
        return redirect('cart');
    }

    // 购物车数量的加
    public function carAdd(Request $request)
    {
        // 获取修改的id
        $id = $request->input('id');

        // 遍历session中的商品
        $shop = session('shop');
        
        // 修改数量
        foreach ($shop as $key => $value) {
            if($value['id']==$id){
                $shop[$key]['num']=++$shop[$key]['num'];
            }
        }
        // 将数据写入到session中 
        $request->session()->put('shop',$shop);

        echo 1;
    }
    
    // 购物车数量的减
    public function carJian(Request $request)
    {
        // 获取修改的id
        $id = $request->input('id');

        // 遍历session中的商品
        $shop = session('shop');
        
        // 修改数量
        foreach ($shop as $key => $value) {
            if($value['id']==$id){
                $shop[$key]['num']=--$shop[$key]['num'];
            }
        }
        // 将数据写入到session中 
        $request->session()->put('shop',$shop);

        echo 1;
    }
}
