<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

use App\Model\Admin\Address;
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
            $data = DB::table('users')->where('id',$id)->update($res);
            // dd($data);
            if($data){
                session(['phone'=>$res['phone']]);
                return redirect('/home/person/info')->with('success','修改成功');
            }
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
    * 显示修改密码
    *
    * @return \Illuminate\Http\Response
    */
   public function changepass()
   {
        return view('home.person.info.changepass',['title'=>"修改密码"]);
   }
}
