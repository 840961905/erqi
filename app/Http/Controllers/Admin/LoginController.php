<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;

use App\Model\Admin\Admin;

use Session;
use DB;
use Hash;

class LoginController extends Controller
{
    /**
     *  显示登录页面
     *
     *  @return \Illuminate\Http\Response
     */
    public function login()
    {
    	return view('admin.login',['title'=>'后台登录页面']);
    }

    /**
     *  处理登录的方法
     *
     *  @return \Illuminate\Http\Response
     */
    public function dologin(Request $request)
    {
    	//表单验证
        // dd($request ->post());
    	
        $code = session('code');

        if($code != $request->code){
            return back()->with('error','验证码错误');
        } 
    	$rs = DB::table('admin')->where('username',$request->username)->first();



        //判断用户名
    	if(!$rs){

    		return back()->with('error','用户名或者密码错误');
    	}

    	//判断密码
    	//hash
    	if (!Hash::check($request->password, $rs->password)) {
		    
		    return back()->with('error','用户名或者密码错误');
		}

		//加密解密
        
        // if($request->password != decrypt($rs->password)){

        //     return back()->with('error','用户名或者密码错误');
            
        // }
        //密码对比 没有加密
		// if($request->password != $rs->password){

		//     return back()->with('error','用户名或者密码错误');
			
		// }

		//判断验证码
		

		//存点信息  session
        session(['uid'=>$rs->id]);
        session(['account'=>$rs->account]);
		session(['pri'=>$rs->pri]);
		session(['uname'=>$rs->username]);
        $time  = ['lasttime' => time()];
        Admin::where('id',$rs ->id) ->update($time);
		return redirect('/admin');
    	
    }

    /**
     *  验证码
     *
     *  @return \Illuminate\Http\Response
     */
    public function captcha()
    {
        $phrase = new PhraseBuilder;
        // 设置验证码位数
        $code = $phrase->build(4);
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder($code, $phrase);
        // 设置背景颜色
        $builder->setBackgroundColor(rand(200,255),rand(200,255),rand(200,255));
        $builder->setMaxAngle(25);
        $builder->setMaxBehindLines(2);
        $builder->setMaxFrontLines(2);
        // 可以设置图片宽高及字体
        $builder->build($width = 100, $height = 28, $font = null);
        // 获取验证码的内容
        // dd($builder);
        $phrase = $builder->getPhrase();
        // 把内容存入session
        session(['code'=>$phrase]);
        // 生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header("Content-Type:image/jpeg");
        $builder->output();

    }

    /**
     *  修改头像页面.
     *
     *  @return \Illuminate\Http\Response
     */
    public function profile()
    {
    	return view('admin.profile',['title'=>'修改头像']);
    }

    /**
     *  修改头像方法
     *
     *  @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
    	//获取上传的文件对象
        $file = $request->file('profile');
        //判断文件是否有效
        if($file->isValid()){
        	//上传文件的后缀名
            $entension = $file->getClientOriginalExtension();
            //修改名字
            $newName = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
            //移动文件
            $path = $file->move('./uploads',$newName);

            $filepath = '/uploads/'.$newName;

            $res['profile'] = $filepath;
            DB::table('user')->where('id',session('uid'))->update($res);
            //返回文件的路径
            return  $filepath;
        }
    }

    //退出
    public function logout()
    {
    	//清空session
        // dd(123123);
        session(['uid'=>'']);
        session(['pri'=>'']);
        session(['account'=>'']);
    	session(['uname'=>'']);
        // dd(session('uid'));
    	return redirect('/admin/login');
    }
}
