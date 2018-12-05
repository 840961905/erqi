<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\Goods;
use App\Model\Admin\Goodsimg;

use App\Model\Admin\Slider;
use App\Model\Admin\Ads;



class IndexController extends Controller
{


    public function checkTypeData($data,$pid=0)
    {
         // 获取数据
        $newArr=array();
        foreach ($data as $key => $value) {
            if($value->pid==$pid)
            {
                $newArr[$value->id]=$value;
                $newArr[$value->id]->child = $this->checkTypeData($data,$value->id);
            }
        }

        return $newArr;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // 处理左侧数据分类
        $types = \DB::table('type')->get();
  

        // 递归树里数据
        $type=$this->checkTypeData($types);
        
        $goods = \DB::table('goods')->get();
        
       
        $cs = [];
        foreach($goods as $k=>$v){
            $cs[] = Goods::find($v->id)->gis()->first();
        }
       
        // 精品推荐 keywords = 3
        $jp = \DB::table('goods')->where('keywords','3')->limit(5)->get();

        // 热销单品  keywords= 1，2
        $rx = \DB::table('goods')->where('keywords','<=','2')->get();
       
        // 取出分类数组前两条数据  array_slice
        $output = array_slice($type, 0,2); 
        
        
        // 处理手机和电脑的商品
        foreach ($type as $key => $value) {
           $newArr=[];
           foreach ($value->child as $two) {
               $newArr[] = $two->id;
           }
           
           // 查询对应的商品
           $value->goods = \DB::table("goods")->whereIn("tid",$newArr)->limit(9)->get();
          
        }

        //广告
        $ads = Ads::orderBy('addtime', 'desc')->get();

         //轮播
        $sinfo = Slider::orderBy('addtime', 'desc')->take(8)->get();
        


        return view('home.index',[
            'title'=>'首页',
            'type'=>$type,
            'output'=>$output,
            'ads'=>$ads,
            'sinfo'=>$sinfo,
            'jp'=>$jp,
            'rx'=>$rx,
            'cs'=>$cs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
