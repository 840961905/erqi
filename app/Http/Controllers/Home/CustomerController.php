<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Customer;

class CustomerController extends Controller
{
    //
    public function index()
    {
    	return view('home.customer',['title'=>'商城客服']);
    }

    public function reply(Request $request)
    {
    	$msg = $request->msg;

       if(!$msg == ''){

       		$res = Customer::where('question','like','%'.$msg.'%')->value('reply');

        	if($res){

	            echo $res;
	        }else{

	        	echo '抱歉哟~小L暂时没能理解您的意思，建议您换个问法试试哦!';
	        }
        	
        }else{

 			echo '您好！问题不能为空，请输入您要问的问题。';
        	
        }
        
    }

     public function replyclick(Request $request)
    {
    	$question = $request->question;

   		$res = Customer::where('question','like','%'.$question.'%')->value('reply');

    	if($res){

            echo $res;
        }else{

        	echo '抱歉哟~小L暂时没能理解您的意思，建议您换个问法试试哦!';
        }
        	
    }
}
