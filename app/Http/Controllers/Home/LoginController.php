<?php

namespace App\Http\Controllers\Home;

use App\Libs\Ucpaas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\User;
use DB;
use Hash;


class LoginController extends Controller
{
    //
    /**
     * 前台用户登录
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('home.login.login',['title'=>'用户登录']);
    }

    /**
     * 执行登录
     *
     * @return \Illuminate\Http\Response
     */
    public function dologin(Request $request)
    {

    	$rs = DB::table('users')->where('aname',$request->aname)->first();
        //判断用户名
    	if(!$rs){
    		return back()->with('error','用户名或者密码错误');
    	}

    	//判断密码
    	//hash
    	if (!Hash::check($request->password, $rs->password)) {
		    
		    return back()->with('error','用户名或者密码错误');
		}
		
		//存点信息  session
        session(['uid'=>$rs->id]);
		session(['img'=>$rs->img]);
        session(['aname'=>$rs->aname]);
		session(['status'=>$rs->status]);
		return redirect('/');
    }

    /**
     * 前台用户注册
     *
     * @return \Illuminate\Http\Response
     */
    public function zhuce(Request $request)
    {
    	 return view('home.login.zhuce',['title'=>'用户注册']);
    }

    /**
     * 执行注册
     *
     * @return \Illuminate\Http\Response
     */
    public function dozhuce(Request $request)
    {
    	$res = $request->except('_token','_method','code','repassword');
    	
    	$ph = User::where('phone',$res['phone'])->first();
    	if($ph){
    		return redirect('/home/zhuce')->with('error','手机号重复，请联系客服');
    	}
        $res['password'] = Hash::make($request->password);
        $res['addtime'] = time();
        $res['img'] = "/homes/img/default.png";
        // dd($res);
        //数据表修改数据
        try{

            $data = User::create($res);
            // dd($data);
            if($data){
                return redirect('/home/login')->with('success','注册成功');
            }

        }catch(\Exception $e){
            // dd($data);
            return back()->with('error','注册失败');
        }

    }

    /**
     * ajax手机验证
     *
     * @return \Illuminate\Http\Response
     */
    public function checkphone(Request $request)
    {
    	$mobile = $request->post('number');

    	$options['accountsid']='0a170d6af7859967e233a081828cd8ab';
		$options['token']='97b45e0dfea51fa8d197b09e8cab0075';
		$ucpass = new Ucpaas($options);
		// 随机生成验证码
		$code = rand(111111,999999);
		// echo $code;
		// session
		session(['code'=>$code]);
		$appid = "4bd32f78da9b41cba9516dd8c4f196e1";
		$templateid= "405159";
		$param =$code.",3";

		$res = $ucpass->SendSms($appid,$templateid,$param,$mobile);
		// echo $res;

    }

    /**
     * ajax用户验证
     *
     * @return \Illuminate\Http\Response
     */
    public function checkuser(Request $request)
    {
    	// $aname = 'qweqwe123';
    	$aname = $request->post('aname');
    	// var_dump($aname);
    	// exit;
    	//检测用户名在表里面有没有
    	$rs = DB::table('users')->where('aname',$aname)->first();

    	if($rs){

    		echo 1;
    	} else {

    		echo 0;
    	}
    }
    /**
     *  验证手机验证码
     *
     * @return \Illuminate\Http\Response
     */
    public function checkcode(Request $request)
    {
    	$code = $request->post('code');
    	$cd = session('code');
    	//比较   跟手机收到的验证码作比较
    	if($code == $cd){
    		echo 1;
    	} else {
    		echo 0;
    	}

    }

    /**
     * 检查手机号码是否重复
     *
     * @return \Illuminate\Http\Response
     */
    public function  checkrephone(Request $request)
    {
    	$res = $request->post('phone');
    	$ph = User::where('phone',$res)->first();
    	if($ph){
    		echo 1;
    	} else {
    		echo 0;
    	}
    }

    /**
     * 跳转到找回密码页面,并且验证手机,通过手机找到账户信息
     *
     * @return \Illuminate\Http\Response
     */
    public function lose()
    {
    	return view('home.login.lose',['title'=>'忘记密码']);
    }

    /**
     * 找回密码填写密码
     *
     * @return \Illuminate\Http\Response
     */
    public function dolose(Request $request)
    {
    	$res =$request -> only('phone');
    	$data = User::where('phone',$res['phone'])->first();
		session(['changename'=>$data['aname']]);
		session(['code'=>'']);
		return view('home.login.changepass',['title'=>'重置密码','data'=>$data]);
    }

    /**
     * 执行密码找回
     *
     * @return \Illuminate\Http\Response
     */
    public function  dochangepass(Request $request)
    {
		$cn = session('changename');
		$res = $request->only('password');
		$reres = $request->only('repassword');
		if ($res== $reres) {
        	session(['changename'=>'']);

			return redirect('/home/lose')->with('error','两次密码不一致');
		}
		$res['password'] = Hash::make($request->password);
        try{

            $data = User::where('aname',session('changename'))->update($res);
            // dd($data);
            if($data){
        		session(['changename'=>'']);
                return redirect('/home/login')->with('success','修改成功');
            }

        }catch(\Exception $e){
        	session(['changename'=>'']);
            return redirect('/home/lose')->with('error','修改失败');
    	}
    }
}
