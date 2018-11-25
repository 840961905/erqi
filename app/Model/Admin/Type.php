<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
     /**
     * 与模型关联的数据表
     *
     * @var string
     */
     protected $table = 'type';
     protected $primarykey = 'id';

     // 是否被自动维护时间戳
     public $timestamps = false;

     // 不可被批量赋值的属性
     protected $guarded = [];

}
