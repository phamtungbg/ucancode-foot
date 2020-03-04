<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBlogRequest extends FormRequest
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
            "tieu_de"=>"required",
            "anh"=>"image"
        ];
    }
    public function messages()
    {
        return [
            "tieu_de.required"=>"Không được để trống tiêu đề",
            "anh.image"=>"Ảnh không đúng định dạng"
        ];
    }
}
