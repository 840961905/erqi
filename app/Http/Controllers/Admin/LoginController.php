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
		session(['pri'=>$rs->pri]);
        session(['uname'=>$rs->username]);
		session(['status'=>$rs->status]);
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
    	return view('admin.admin.profile',['title'=>'修改头像']);
    }

    /**
     *  修改头像方法
     *
     *  @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        if($request->hasFile('pri')){
            //自定义名字
            $name = rand(11111,99999).time();

            //获取后缀
            $suffix = $request->file('pri')->getClientOriginalExtension();

            $request->file('pri')->move('./uploads/adminpri/',$name.'.'.$suffix);

            $res['pri'] = '/uploads/adminpri/'.$name.'.'.$suffix;

        }
        // 获取当前管理员id
        $id = $request->id;
        try{
            // 查找当前用户原头像路径
            $imgs = Admin::find($id);
            // 删除原头像
            unlink('.'.$imgs->pri);
            // 修改数据库
            $data = Admin::where('id', $id)->update($res);
            // 判断成功与否
            if($data){
                // 将新头像路径存入session
                session(['pri' => '/uploads/adminpri/'.$name.'.'.$suffix]);
                return redirect('/admin')->with('success','修改成功');
            }

        }catch(\Exception $e){
            return back()->with('error','添加失败');
        }
    }

    //退出
    public function logout()
    {
        //清空session
        // dd(123123);
        session(['uid'=>'']);
        session(['pri'=>'']);
        session(['uname'=>'']);
        session(['status'=>'']);
        // dd(session('uid'));
        return redirect('/admin/login');
    }
    // 显示修改密码界面
    public function passchange()
    {   
        // 获取GET里的id
        $id = $_GET['id'];
        return view('admin.admin.passchange',['title'=>'修改密码','id'=>$id]);
    }
    // 执行修改密码
    public function dopasschange(Request $request)
    {   
        // 获取GET里的id
        $id = $_GET['id'];
        // 获取表单信息
        $ypass = $request ->post('yuanpass');
        $pass = $request ->post('password');
        $repass = $request ->post('repass');


        try{
            // 查询用户数据
            $rs = Admin::where('id',$id)->first();
            // 判断原密码对错
            if (!Hash::check($ypass, $rs->password)) {
                return back()->with('error','原密码错误');
            }
            // 判断密码一致
            if ($pass != $repass) {
                return back()->with('error','两次密码不一致');
            }
            // 加密密码
            $arr['password'] = Hash::make($pass);
            // 上传密码
            $res = Admin::where('id',$id)->update($arr);
            // 判断上传结果
            if(!$res){
                return back()->with('error','修改失败');
            }
            // 清空session
            session(['uid'=>'']);
            session(['pri'=>'']);
            session(['uname'=>'']);
            session(['status'=>'']);

            return redirect('/admin/login')->with('success','修改成功');
        }catch(\Exception $e){

            return back()->with('error','修改失败');
        }
    }
}
