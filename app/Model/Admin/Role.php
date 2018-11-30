<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'role';

    protected $primaryKey = 'id';

    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;

    /**
	 * 不可被批量赋值的属性。
	 *
	 * @var array
	 */
	protected $guarded = [];

    /**
    * 获取此角色的权限
    */
    public function pers()
    {
        return $this->belongsToMany('App\Model\Admin\Permission','role_permission','role_id','per_id');
    }
}
