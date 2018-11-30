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
    	$res = Goods::get();
    	$cs = [];
    	foreach($res as $key=>$val){
        	$cs[] = Goods::find($val->id)->gis()->first();
    	}

        // dd($cs);
    	return view('home.cart',[
    		'title'=>'商品购物车页面',
    		'res'=>$res,
    		'cs'=>$cs
    	]);
    }

    public function shopcart(Request $request)
    {
        $id = $request ->gid;

        $res = DB::table('goods')->where('id',$id)->delete();
         
       

        if($res){

            echo $id;
        } else {

            echo 0;
        }
    }
}
