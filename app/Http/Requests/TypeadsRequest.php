<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TypeadsRequest extends FormRequest
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
            'tid' => 'required',      
            'href' => 'required',          
            'img' => 'required',          
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
            'tid.required'  => '商品顶级分类不能为空',
            'href.required'  => '跳转地址不能为空',
            'img.required'  => '分类图片不能为空',
        ];
    }
}

