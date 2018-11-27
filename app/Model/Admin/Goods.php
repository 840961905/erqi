<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    //
    /**
    * 与模型关联的数据表
    *
    * @var string
    */
    protected $table = 'goods';
    protected $primarykey = 'id';

    // 是否被自动维护时间戳
    public $timestamps = false;

    // 不可被批量赋值的属性
    protected $guarded = [];

    public function gis()
    {
    	return $this->hasMany('App\Model\Admin\Goodsimg','gid');
    }
}
