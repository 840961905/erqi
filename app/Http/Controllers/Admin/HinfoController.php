<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\Hinfo;
class HinfoController extends Controller
{
    //
    public function index()
    {
    	// echo "Hello 网站管理中心";

    	//获取数据
    	$hinfo_data = Hinfo::find('1');

    	return view('admin.hinfo.index',[
    		'title'=>'网站设置',
    		'res' => $hinfo_data
    	]);
    }


    public function update(Request $request, $id)
    {
    	//获取数据
    	$res = $request->except('_token','_method','wlogo');
    	//检测图片是否提交
    	if($request->hasFile('wlogo')){
    		// echo "图片存在";

    		//获取数据
    		$hinfo_weblog = Hinfo::first();
    		//单个取出 图片路径
    		$hinfo_weblog_url = $hinfo_weblog->wlogo;
    		//删除以前图片
    		unlink('.'."$hinfo_weblog_url");

    		$name = "weblogo";
    		//获取后缀
            $suffix = $request->file('wlogo')->getClientOriginalExtension();
            //添加新图片
            $request->file('wlogo')->move('./uploads/',$name.'.'.$suffix);
            //获取新图片地址
            $res['wlogo'] = '/uploads/'.$name.'.'.$suffix;

    	}

    	try{

       		$advertisement =  Hinfo::where('id',$id)->update($res);  
            
            if($advertisement){
                return redirect('/admin/hinfo')->with('success','修改成功');
            }

        }catch(\Exception $e){

            return back()->with('error','修改失败');
        }
    }
}
