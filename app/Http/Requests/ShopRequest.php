<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       return [
            //
            'tid' => 'required',
            'gname' => 'required',
            'info' => 'required',
            'price' => 'required',
            'bianma' => 'required',
            'fwsm' => 'required',
            'status' => 'required',
            'stock' => 'required',
            'color' => 'required',
            'size' => 'required',
            'keywords' => 'required',
            'text' => 'required',
            'gimg' => 'required',
           
        ];
    }

    /**
     * 获取已定义验证规则的错误消息。
     *
     * @return array
     */
    public function messages()
    {
        return [
            'tid.required'  => '分类名不能为空',
            'gname.required'  => '商品名称不能为空',
            'info.required'  => '商品说明不能为空',
            'price.required'  => '商品价格不能为空',
            'bianma.required'  => '商品编码不能为空',
            'fwsm.required'  => '服务说明不能为空',
            'status.required'  => '商品状态不能为空',
            'stock.required'  => '商品库存不能为空',
            'color.required'  => '商品规格不能为空',
            'size.required'  => '地址不能为空',
            'keywords.required'  => '商品关键字不能为空',
            'text.required'  => '商品描述不能为空',
            'gimg.required'  => '商品图片不能为空',
        ];
    }
}