<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\Comment;
use App\Model\Admin\Users;
use App\Model\Admin\Goods;
class CommentController extends Controller
{

    //
    public function index()
    {

            //北京市北京市 移动
            // $iplong = ip2long('223.104.3.199');
            //     echo $iplong;
            // dd(long2ip($iplong));


    	// echo "hello 订单评论管理";

    	//获取评论表所有评论信息
    	$comment_data = Comment::get();

    	//单个获取用户ID
    	$hquid = [];
    	$hqgname = [];
    	$cs = [];
        foreach ($comment_data as $key => $value) {
            $hquid[] = Users::find($value->uid);
        	$hqgname[] = Goods::find($value->gid);
        	$cs[] = Goods::find($value->gid)->gis()->first();
        }
        //gimg
        // dd($cs);

    	return view('admin.comment.index',[
    		'title'=>'订单评论管理',
    		'res' => $comment_data,
    		'hquname' => $hquid,
    		'hqgname' => $hqgname,
    		'cs' => $cs
    	]);
    }

    //修改留言状态
    public function status($id)
    {
        //获取相应ID 的数据
        $comment_data = Comment::find($id);
        //获取留言数据状态
        $comment_data_status = $comment_data->status;

        //判断状态 如果正常 否则
        if($comment_data_status == 1){
            // echo "你要被冻结了哦";
            $res = ['status' => '2'];
        }else {
            // echo "你要被解放啦咯";
            $res = ['status' => '1'];
        }



        try{

            $data = Comment::where('id','=',$id)->update($res);
            
            if($data){
                return redirect('/admin/comment')->with('success','修改成功');
            }

        }catch(\Exception $e){

            return back()->with('error','修改失败');
        }
    }


    //ajax查看详情信息
    public function chackinfo()
    {
        //获取ID
        $id = $_GET['id'];
        //向数据库查询
        $comment_data = Comment::find($id);
        //获取留言内容
        $comment_data_content = $comment_data->content;
        //获取留言用户IP
        $comment_data_commip = long2ip($comment_data->commip);
        $jieg=array(
            "content"=>$comment_data_content,
            "id" => $id,
            "commip" => $comment_data_commip
        );
        return response()->json($jieg);
    }



    public function destroy($id)
    {
        $res = Comment::destroy($id);

        if($res){
            return redirect('/admin/comment')->with('success','修改成功');
        }else {
            return back()->with('error','修改失败');
        }
    }
}
