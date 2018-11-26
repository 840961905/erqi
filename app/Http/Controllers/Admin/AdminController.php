<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Hash;
use App\Model\Admin\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $res = Admin::all();
        return view('admin.admin.index',[
            'title'=>'管理员的列表页面',
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
        return view('admin.admin.add',['title'=>'添加管理员']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //表单验证
     /*   $this->validate($request, [
            'username' => 'required|regex:/^\w{6,16}$/',
            'password' => 'required|regex:/^\S{6,12}$/',
            'repass'=>'same:password',
            'phone'=>'regex:/^1[3456789]\d{9}$/',
            'email'=>'email',
            'profile'=>'required'
        ],[
            'username.required' => '用户名不能为空',
            'username.regex'=>'用户名格式不正确',
            'password.required'  => '密码不能为空',
            'password.regex'  => '密码格式不正确',
            'repass.same'=>'两次密码不一致',
            'phone.regex'=>'手机号码格式不正确',
            'email.email'=>'邮箱格式不正确',
            'profile.required'=>'请上传图片'
        ]);*/

        
        $res = $request->except('_token','pri');
        // dd($res);

        if($request->hasFile('pri')){
            //自定义名字
            $name = rand(11111,99999).time();

            //获取后缀
            $suffix = $request->file('pri')->getClientOriginalExtension();

            $request->file('pri')->move('./uploads/adminpri/',$name.'.'.$suffix);

            $res['pri'] = '/uploads/adminpri/'.$name.'.'.$suffix;

        }

        //网数据表里面添加数据  hash加密
        $res['password'] = Hash::make($request->password);

        //加密 解密
        // $res['password'] = encrypt($request->password);


        // dd()

        //存数据
        // dd($res);
        try{

            $data = Admin::create($res);
            // dd($data);
            if($data){
                return redirect('/admin/admin')->with('success','添加成功');
            }

        }catch(\Exception $e){
            // dd($data);
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
        // 根据id获取数据
        $res = Admin::find($id);

        return view('admin.admin.edit',[
            'title'=>'管理员的修改页面',
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
        //表单验证

        //unlink

        $res = $request->except('_token','pri','_method');
        // dd($res);
        if($request->hasFile('pri')){
            //自定义名字
            $name = rand(11111,99999).time();

            //获取后缀
            $suffix = $request->file('pri')->getClientOriginalExtension();

            $request->file('pri')->move('./uploads/adminpri',$name.'.'.$suffix);

            $res['pri'] = '/uploads/adminpri/'.$name.'.'.$suffix;

        }

        //数据表修改数据
        try{

            $data = Admin::where('id', $id)->update($res);
            
            if($data){
                return redirect('/admin/admin')->with('success','修改成功');
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

        //删除图片  头像
        //unlink

         try{
            if($id == 1 || $id == session('uid')){
                return back()->with('error','你想啥呢？');
            } else {
                $res = Admin::destroy($id);
                if($res){
                    return redirect('/admin/admin')->with('success','删除成功');
                }
            }
            

        }catch(\Exception $e){

            return back()->with('error','删除失败');
        }


    }

    public function ajaxupdate(Request $request)
    {
        //判断空 

        //判断用户名是否一样

        //判断位数 6~12

        $res = [];

        $id = $request->ids;

        $res['username'] = $request->uv;

        //修改数据
        $data = Admin::where('id',$id)->update($res);

        if($data){

            echo 1;
        } else {

            echo 0;
        }


    }
}
