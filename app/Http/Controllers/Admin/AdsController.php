<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdsRequest;
use App\Model\Admin\Ads;
use DB;

 
class AdsController extends Controller
{
    //
    public function index()
    {
    	$adsinfo = Ads::all();
    	//dd($adsinfo);
    	return view('admin.advertisement.index',[
    		'title'=>'广告管理',
    		'adsinfo'=>$adsinfo
    	]);
    }


    public function create()
	{
		//echo 111;
		return view('admin.advertisement.add',[
            'title'=>'广告添加'
        ]);
	}

	public function store(AdsRequest $request)
    {
        //

        $res = $request->except('_token','img');
        
        if($request->hasFile('img')){
            //自定义名字
            $name = rand(111,999).time();

            //dd($name);

            //获取后缀
            $suffix = $request->file('img')->getClientOriginalExtension();

            $request->file('img')->move('./uploads/adsimg',$name.'.'.$suffix);

            $res['img'] = '/uploads/adsimg/'.$name.'.'.$suffix;

        }

        //dd($res);
        try{

       		$advertisement = Ads::create($res);  
            
            if($advertisement){
                return redirect('/admin/advertisement')->with('success','添加成功');
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
        $adsinfo = Ads::where('id',$id)->first();
        return view('admin.advertisement.edit',[
            'title'=>'广告修改',
            'adsinfo'=>$adsinfo
        ]);
    }

    public function update(AdsRequest $request, $id)
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

            $request->file('img')->move('./uploads/adsimg',$name.'.'.$suffix);

            $res['img'] = '/uploads/adsimg/'.$name.'.'.$suffix;

        }

        try{

       		$advertisement =  Ads::where('id',$id)->update($res);  
            
            if($advertisement){
                return redirect('/admin/advertisement')->with('success','修改成功');
            }else{
                return redirect('/admin/advertisement')->with('success','修改成功');
            }

        }catch(\Exception $e){

            return back()->with('error','修改失败');
        }

    }

    public function adel(Request $request)
    {

        $id = $request->gid;

        $res = DB::table('ads')->where('id',$id)->delete();


        if($res){

            echo 1;
        } else {

            echo 0;
        }
    }

}
