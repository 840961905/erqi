<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\Color; 
class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $res = Color::all();
        //dd($adsinfo);
        return view('admin.color.index',[
            'title'=>'颜色管理',
            'res'=>$res
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
        return view('admin.color.add',['title'=>'颜色添加']);
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
        $rs = $request->only('color');
        
        $rs1 = Color::where('color','=',$rs['color'])->first();
        if(!$rs1){
            try{
            $data = Color::create($rs);

            if($data){
                return redirect('/admin/color')->with('success','添加成功');
            }
            }catch(\Exception $e){
                return back()->with('error','添加失败');
            }
        }else{
           return redirect('/admin/color')->with('error','添加已经存在');
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
        $res = Color::where('id',$id)->first();

        return view('admin.color.edit',[
            'title'=>'颜色的修改页面',
            'res'=>$res
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
        $res = $request->only('color');
        

        try{
         $data = Color::where('id',$id)->update($res);

        if($data){
            return redirect('/admin/color')->with('success','修改成功');
        }
        }catch(\Exception $e){
            return back()->with('error','修改失败');
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
        //

        $res = Color::destroy($id);

        if($res){
            return redirect('/admin/color')->with('success','删除成功');
        }else {
            return back()->with('error','删除失败');
        }
    }
}
