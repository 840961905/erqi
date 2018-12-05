<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Model\Admin\Slider;
use DB;

class SliderController extends Controller
{
    //
     public function index()
    {
    	$sliderinfo = Slider::all();
    	//dd($adsinfo);
    	return view('admin.slider.index',[
    		'title'=>'轮播管理',
    		'sliderinfo'=>$sliderinfo
    	]);
    }


    public function create()
	{
		//echo 111;
		return view('admin.slider.add',[
            'title'=>'轮播添加'
        ]);
	}

	public function store(SliderRequest $request)
    {
        //

        $res = $request->except('_token','img');
        
        if($request->hasFile('img')){
            //自定义名字
            $name = rand(111,999).time();

            //dd($name);

            //获取后缀
            $suffix = $request->file('img')->getClientOriginalExtension();

            $request->file('img')->move('./uploads/sliderimg',$name.'.'.$suffix);

            $res['img'] = '/uploads/sliderimg/'.$name.'.'.$suffix;

        }

        //dd($res);
        try{

       		$slider = Slider::create($res);  
            
            if($slider){
                return redirect('/admin/slider')->with('success','添加成功');
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
        $sliderinfo = Slider::where('id',$id)->first();
        return view('admin.slider.edit',[
            'title'=>'轮播修改',
            'sliderinfo'=>$sliderinfo
        ]);
    }

    public function update(Request $request, $id)
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

            $request->file('img')->move('./uploads/sliderimg',$name.'.'.$suffix);

            $res['img'] = '/uploads/sliderimg/'.$name.'.'.$suffix;

        }

        try{

       		$slider =  Slider::where('id',$id)->update($res);  
            
            if($slider){
                return redirect('/admin/slider')->with('success','修改成功');
            }else{
                return redirect('/admin/slider')->with('success','修改成功');
            }

        }catch(\Exception $e){

            return back()->with('error','修改失败');
        }

    }

   public function sdel(Request $request)
    {

        $id = $request->gid;

        $res = DB::table('slider')->where('id',$id)->delete();


        if($res){

            echo 1;
        } else {

            echo 0;
        }
    }
}
