<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        // 查询当前分类
        $type = \DB::table('type')->where('id',$id)->first();
        
        $fl = \DB::table('type')->where('pid','=',$type->pid)->get();
       
        // 将path 路径转换成数组
        $arr = explode(',',$type->path);
        

        $size = count($arr)-1;

        switch($size){
            case '1':
                // 得到所有的商品
                $suogoods = \DB::table('type')->where('pid',$id)->get();
                $newArr=[];
                foreach ($suogoods as $key=>$value) {
                   $newArr[] = $value->id;
                }
                $goods = \DB::table('goods')->whereIn('tid',$newArr)->get();
                break;
            case '2':
                $goods = \DB::table('goods')->where('tid',$id)->get();
                break;
        }
        
       
        $ding = $arr[0]?$arr[0]:$id;
        
        
        return view('home.types',[
            'title'=>'分类详情',
            'ding'=>$ding,
            'goods'=>$goods,
            'type'=>$type,
            'fl'=>$fl
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
