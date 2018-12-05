<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonController extends Controller
{
    //
    /**
     * 显示个人中心
     *
     * @return \Illuminate\Http\Response
     */
    public function  person( )
    {
    	return view('home.person.person',['title'=>'中心']);
    }
}
