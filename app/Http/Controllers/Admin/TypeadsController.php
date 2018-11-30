<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TypeadsRequest;
use App\Model\Admin\Typeads;
use App\Model\Admin\Type;
use DB;

class TypeadsController extends Controller
{
    //
     public function index()
    {
        $adsinfo = Typeads::all();
        $tadsinfo = Type::all();
    	return view('admin.typeads.index',[
    		'title'=>'商品顶级分类广告管理',
            'adsinfo'=>$adsinfo,
    		'tadsinfo'=>$tadsinfo
    	]);
    }


    public function create()
	{
		//echo 111;
        $tadsinfo = Type::all();
		return view('admin.typeads.add',[
            'title'=>'分类广告添加',
            'tadsinfo'=>$tadsinfo
        ]);
	}

	public function store(TypeadsRequest $request)
    {
        //

        $res = $request->except('_token','img');
        
        if($request->hasFile('img')){
            //自定义名字
            $name = rand(111,999).time();

            //dd($name);

            //获取后缀
            $suffix = $request->file('img')->getClientOriginalExtension();

            $request->file('img')->move('./uploads/typeadsimg',$name.'.'.$suffix);

            $res['img'] = '/uploads/typeadsimg/'.$name.'.'.$suffix;

        }

        try{

       		$type = Typeads::create($res);  
            
            if($type){
                return redirect('/admin/typeads')->with('success','添加成功');
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
        $adsinfo = Typeads::where('id',$id)->first();
        $tads = Type::find($id);
        $tadsinfo = Type::all();
        //dd( $tadsinfo);
        return view('admin.typeads.edit',[
            'title'=>'分类广告修改',
            'adsinfo'=>$adsinfo,
            'tads'=>$tads,
            'tadsinfo'=>$tadsinfo
        ]);
    }

    public function update(TypeadsRequest $request, $id)
    {
        //
        $res = $request->except('_token','_method','img');
        //dd($res);
        if($request->hasFile('img')){
            //自定义名字
            $name = rand(111,999).time();

            //dd($name);

            //获取后缀
            $suffix = $request->file('img')->getClientOriginalExtension();

            $request->file('img')->move('./uploads/typeadsimg',$name.'.'.$suffix);

            $res['img'] = '/uploads/typeadsimg/'.$name.'.'.$suffix;

        }

        try{

       		$typeads =  Typeads::where('id',$id)->update($res);  
            
            if($typeads){
                return redirect('/admin/typeads')->with('success','修改成功');
            }else{
                return redirect('/admin/typeads')->with('success','修改成功'); 
            }

        }catch(\Exception $e){

            return back()->with('error','修改失败');
        }

    }

    public function del(Request $request)
    {

        $id = $request->gid;

        $res = DB::table('typeads')->where('id',$id)->delete();


        if($res){

            echo 1;
        } else {

            echo 0;
        }
    }
}
