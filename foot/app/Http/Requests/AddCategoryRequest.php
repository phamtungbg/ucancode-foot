<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCategoryRequest extends FormRequest
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
            "ten"=>"required",
            "anh"=>"image"
        ];
    }
    public function messages()
    {
        return [
            "ten.required"=>"Không được để trống tên danh mục",
            "anh.image"=>"Ảnh không đúng định dạng"
        ];
    }
}
