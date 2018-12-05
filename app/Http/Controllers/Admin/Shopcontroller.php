<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Type;
use App\Http\Requests\ShopRequest;

use DB; 

use App\Model\Admin\Goods;
use App\Model\Admin\Goodsimg;
use App\Model\Admin\Color;
class Shopcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $res = Goods::get();
        $rs = Type::get();
        $ys = Color::get();
        return view('admin.shop.index',[
            'title'=>'商品的列表页',
            'res'=>$res,
            'rs'=>$rs,
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
        $rs = Type::select(DB::raw('*,CONCAT(path,id) as paths'))->
        orderBy('paths')->
        get();
        $co = Color::get();
        
        foreach($rs as $v){

            $ps = substr_count($v->path,',')-1;
            //拼接  分类名
            // $v->catname = str_repeat('|--',$ps).$v->catname;

            $v->tname = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$ps).'|--'.$v->tname;
        }
         
        return view('admin.shop.add',[
            'title'=>'商品的添加页面',
            'rs'=>$rs,
            'co'=>$co
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShopRequest $request)
    {
         //表单验证

        
        $res = $request->except('_token','gimg','color');
        
        $res['color'] = implode(',',$request->color);
     
        //添加数据
        $rs = Goods::create($res);
        
        $id = $rs->id;
        //模型关联  一对多
        if($request->hasFile('gimg')){

            $file = $request->file('gimg'); //$_FILES

            $arr = [];
            foreach($file as $k => $v){

                $ar = [];

                $ar['gid'] = $id;

                //设置名字
                $name = rand(1111,9999).time();

                //后缀
                $suffix = $v->getClientOriginalExtension();

                //移动
                $v->move('./uploads', $name.'.'.$suffix);

                $ar['gimg'] = '/uploads/'.$name.'.'.$suffix;

                $arr[] = $ar;

                //这是第二种方式
                // $sd = [];

                // $sd=['gid'=>$id,'gimd'=>'/uploads/'.$name.'.'.$suffix];

                // array_push($arr,$sd);
            }
        }

        //插入数据

        //一对多
        $data = Goods::find($id);
        try{

            $gs = $data->gis()->createMany($arr);
            
            if($gs){
                return redirect('/admin/shop')->with('success','添加成功');
            }

        }catch(\Exception $e){

            return back()->with('error','添加失败');
        }
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
        $res = Goodsimg::destroy($id);

        if($res){

            echo 1;
        } else {

            echo 0;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //         //
        $rs = Type::select(DB::raw('*,CONCAT(path,id) as paths'))->
        orderBy('paths')->
        get();

        foreach($rs as $v){

            $ps = substr_count($v->path,',')-1;
            //拼接  分类名
            // $v->catname = str_repeat('|--',$ps).$v->catname;

            $v->tname = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$ps).'|--'.$v->tname;
        }

        $res = Goods::find($id);

        $gimgs = Goodsimg::where('gid',$id)->get();

        return view('admin.shop.edit',[
            'title'=>'商品的修改页面',
            'rs'=>$rs,
            'res'=>$res,
            'gimgs'=>$gimgs

        ]);

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
        //表单验证

        $rs = Goodsimg::where('gid',$id)->get();

        foreach($rs as $v){

            unlink('.'.$v->gimg);
        }

        $res = $request->except('_token','_method','gimg');

        $data = Goods::where('id',$id)->update($res);

        //关联表的信息
        if($request->hasFile('gimg')){

            $file = $request->file('gimg'); //$_FILES

            $arr = [];
            foreach($file as $k => $v){

                $ar = [];

                $ar['gid'] = $id;

                //设置名字
                $name = rand(1111,9999).time();

                //后缀
                $suffix = $v->getClientOriginalExtension();

                //移动
                $v->move('./uploads', $name.'.'.$suffix);

                $ar['gimg'] = '/uploads/'.$name.'.'.$suffix;

                $arr[] = $ar;
            }
        }

        $rs = Goodsimg::where('gid',$id)->insert($arr);

        if($rs){

            return redirect('/admin/shop')->with('success','修改成功');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //一对一删除
        // 根据id获取图片路径  删除图片

        //根据id  删除商品信息 


        //在删除关联表里面的信息   

        $data = goods::find($id)->gis()->get();
        
        $data = Goodsimg::where('gid',$id)->get();

        foreach ($data as $k => $v) {
           
            // dump($v->gimg);
            $res = unlink('.'.$v->gimg);
        }

        if($res){

            $goods =goods::find($id);

            $goods->delete();

            $res = $goods->gis()->delete();

            return redirect('/admin/shop')->with('success','删除成功');

        }

    }


    public function text()
    {
        $id = $_GET['id'];
        $res = DB::table('goods')->value('text');
        return view('admin.shop.text',[
            'title'=>'商品的详细信息',
            'res'=>$res
        ]);
    }


    public function imgs()
    {
        $id = $_GET['id'];
        $res = DB::table('goodsimg')->where('goodsimg.gid',$id)->get();
       
        return view('admin.shop.imgs',[
            'title'=>'商品的图片',
            'res'=>$res
        ]);
    }
}
