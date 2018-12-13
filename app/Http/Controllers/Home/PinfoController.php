<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\User;
use DB;
use Hash;

class PinfoController extends Controller
{
   /**
    * 显示账户中心
    *
    * @return \Illuminate\Http\Response
    */
   public function index(Request $request)
   {
        return view('home.person.info.index',['title'=>"账户中心"]);
   }

   /**
    * 显示修改手机
    *
    * @return \Illuminate\Http\Response
    */
   public function changephone()
   {
        return view('home.person.info.changephone',['title'=>"修改手机"]);
   }

   /**
    * 执行修改手机
    *
    * @return \Illuminate\Http\Response
    */
   public function dochangephone(Request $request)
   {
      $res = $request->only('phone');
      $id = session('userid');
      try{
            DB::table('users')->where('id',$id)->update($res);
            session(['phone'=>$res['phone']]);
            return redirect('/home/person/info')->with('success','修改成功');
        }catch(\Exception $e){
            return redirect('/home/person/info')->with('error','修改失败');
      }


   }

   /**
    * 显示修改邮箱
    *
    * @return \Illuminate\Http\Response
    */
   public function changeemail()
   {
        $res = DB::table('users')->where('id',session('userid'))->first();
        // dd($res->email);
        return view('home.person.info.changeemail',['title'=>"修改邮箱",'email'=>$res->email]);
   }

   /**
    * 执行修改邮箱
    *
    * @return \Illuminate\Http\Response
    */
   public function dochangeemail(Request $request)
   {

      $res = $request->only('email');
      $id = session('userid');
      try{
            $data = DB::table('users')->where('id',$id)->update($res);
            // dd($data);
            if($data){
                session(['email'=>$res['email']]);
                return redirect('/home/person/info')->with('success','修改成功');
            }
        }catch(\Exception $e){
            return redirect('/home/person/info')->with('error','修改失败');
      }

   }

   /**
    * 显示修改密码
    *
    * @return \Illuminate\Http\Response
    */
   public function changepass()
   {
      return view('home.person.info.changepass',['title'=>"修改密码"]);
   }

   /**
    * 显示修改密码
    *
    * @return \Illuminate\Http\Response
    */
   public function dochangepass(Request $request)
   {
        $ypass = $request ->post('yuanpass');
        $pass = $request ->post('password');
        $repass = $request ->post('repassword');
        try{
            // 查询用户数据
            $rs = User::where('id',session('userid'))->first();
            // 判断原密码对错
            if (!Hash::check($ypass, $rs->password)) {
                return redirect('/home/person/info')->with('error','原密码错误');
            }
            // 判断密码一致
            if ($pass != $repass) {
                return redirect('/home/person/info')->with('error','两次密码不一致');
            }
            // 加密密码
            $arr['password'] = Hash::make($pass);
            // 上传密码
            $res = User::where('id',session('userid'))->update($arr);
            // 判断上传结果
            if(!$res){
                return redirect('/home/person/info')->with('error','修改失败');
            }
            // 清空session
            session(['userid'=>'']);
            session(['img'=>'']);
            session(['aname'=>'']);
            session(['status'=>'']);
            session(['phone'=>'']);
            session(['email'=>'']);

            return redirect('/home/login')->with('success','修改成功');
        }catch(\Exception $e){
            return redirect('/home/person/info')->with('error','修改失败');
        }
   }

   /**
    * 显示修改头像
    *
    * @return \Illuminate\Http\Response
    */
   public function changeimg()
   {
      return view('home.person.info.changeimg',['title'=>"修改头像"]);
   }

   /**
    * 执行修改头像
    *
    * @return \Illuminate\Http\Response
    */
   public function dochangeimg(Request $request)
   {
     if($request->hasFile('img')){
            //自定义名字
            $name = rand(11111,99999).time();
            //获取后缀
            $suffix = $request->file('img')->getClientOriginalExtension();

            $request->file('img')->move('./uploads/userimg/',$name.'.'.$suffix);

            $res['img'] = '/uploads/userimg/'.$name.'.'.$suffix;
            // dd($res);
        }
        // 获取当前管理员id
        try{
            // 查找当前用户原头像路径
            $imgs = User::find(session('userid'));
            // 修改数据库
            $data = User::where('id', session('userid'))->update($res);
            // 判断成功与否
            if($data){
                // 将新头像路径存入session
                session(['img' => '/uploads/userimg/'.$name.'.'.$suffix]);
                return redirect('/home/person/info')->with('success','修改成功');
            }

        }catch(\Exception $e){
            return redirect('/home/person/info')->with('error','添加失败');
        }
   }
}
