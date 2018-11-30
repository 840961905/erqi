<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FriendRequest;
use App\Model\Admin\Friend;
use DB;

class FrilinkController extends Controller
{
    //
    public function index()
    {
    	$finfo = Friend::all();
    	//dd($finfo);
    	return view('admin.friendlink.index',[
    		'title'=>'链接管理',
    		'finfo'=>$finfo
    	]);
    }


    public function create()
	{
		//echo 111;
		return view('admin.friendlink.add',[
            'title'=>'链接添加'
        ]);
	}

	public function store(FriendRequest $request)
    {
        //

        $res = $request->except('_token');
        

        try{

       		$friendlink = Friend::create($res);  
            
            if($friendlink){
                return redirect('/admin/friend')->with('success','添加成功');
            }else{
                return redirect('/admin/friend')->with('success','添加成功');
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
        $res = Friend::destroy($id);

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
        //
        $finfo = Friend::where('id',$id)->first();
        return view('admin.friendlink.edit',[
            'title'=>'链接修改',
            'finfo'=>$finfo
        ]);
    }

    public function update(FriendRequest $request, $id)
    {
        //
        $res = $request->except('_token','_method');
        //dd($res);

        try{

       		$friendlink =  Friend::where('id',$id)->update($res);  
            
            if($friendlink){
                return redirect('/admin/friend')->with('success','修改成功');
            }

        }catch(\Exception $e){

            return back()->with('error','修改失败');
        }

    }

   public function fdel(Request $request)
    {

        $id = $request->gid;

        $res = DB::table('Friend')->where('id',$id)->delete();


        if($res){

            echo 1;
        } else {

            echo 0;
        }
    }

}
