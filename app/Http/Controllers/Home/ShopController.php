<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $shops = \DB::table('goods')->where('id',$id)->where('status','=','1')->first();

        $shopimg = \DB::table('goodsimg')->where('gid',$id)->get();
        

        // 查询出商品的评论总数
        $commentTot = \DB::table('comment')->where('gid',$id)->count();
        // 好评
        $goodTot = \DB::table('comment')->where('gid',$id)->where('star',">",4)->count();
        // 差评
        $chaTot = \DB::table('comment')->where('gid',$id)->where('star',"<=",2)->count();
        // 中评
        $zhongTot = $commentTot-$goodTot-$chaTot;
        
        $ys = \DB::table('spcolor')->get();

        // 评论
        $comment = \DB::table('comment')->where('gid',$id)->get();
        
        $users = \DB::table('users')->get();
       
        $arr = array(
           "commentTot"=>$commentTot,
           "goodTot"=>$goodTot,
           "chaTot"=>$chaTot,
           "zhongTot"=>$zhongTot
        );
        return view('home.shop',[
            'title'=>'商品的详情页面',
            'shops'=>$shops,
            'shopimg'=>$shopimg,
            'arr'=>$arr,
            'comment'=>$comment,
            'users'=>$users,
            'ys'=>$ys
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
