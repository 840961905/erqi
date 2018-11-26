<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Type;
use DB;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
         $res = Type::select(DB::raw('*,CONCAT(path,id) as paths'))->where('tname','like','%'.$request->tname.'%')->orderBy('paths')->paginate($request->input('num',10));
        
        foreach($res as $v){

            //path  
            $ps = substr_count($v->path,',')-1;

            //拼接  分类名
            // $v->catname = str_repeat('|--',$ps).$v->catname;

            $v->tname = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$ps).'|--'.$v->tname;

        }

        return view('admin.type.index',[
            'title'=>'分类列表',
            // 'request'=>$request,
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
        // 查询数据表里的信息
        $rs = Type::select(DB::raw('*,CONCAT(path,id) as paths'))->orderBy('paths')->get();
        
        foreach($rs as $v){

            //path  
            $ps = substr_count($v->path,',')-1;

            //拼接  分类名
            // $v->catname = str_repeat('|--',$ps).$v->catname;

            $v->tname = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$ps).'|--'.$v->tname;

        }

        return view('admin.type.add',[
            'title'=>'分类添加',
            'rs'=>$rs
        ]);
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
        $res = $request->except('_token');

        if($request->pid == '0'){
        $res['path'] = '0,';
        }else{
            $rs = DB::table('type')->where('id',$request->pid)->first();
            $res['path']=$rs->path.$rs->id.',';
        }
        
        try{
            $data = Type::create($res);

            if($data){
                return redirect('/admin/type')->with('success','添加成功');
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
        $rs = Type::select(DB::raw('*,CONCAT(path,id) as paths'))->orderBy('paths')->get();
        
        foreach($rs as $v){

            //path  
            $ps = substr_count($v->path,',')-1;

            //拼接  分类名
            // $v->catname = str_repeat('|--',$ps).$v->catname;

            $v->tname = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$ps).'|--'.$v->tname;

        }

        $res = Type::find($id);
      
        return view('admin.type.edit',[
            'title'=>'分类修改页面',
            'res'=>$res,
            'rs'=>$rs
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
        $res = $request->only('status','tname');
       
        try{

            $data = Type::where('id',$id)->update($res);
            
            if($data){
                return redirect('/admin/type')->with('success','修改成功');
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

        try{

            $res = Type::destroy($id);
            
            if($res){
                return redirect('/admin/type')->with('success','删除成功');
            }

        }catch(\Exception $e){

            return back()->with('error','删除失败');
        }

    }
}
